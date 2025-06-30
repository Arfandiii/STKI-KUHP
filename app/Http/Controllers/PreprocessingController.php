<?php

namespace App\Http\Controllers;

use App\Models\Pasal;
use App\Models\DocumentTerm;
use App\Helpers\TextPreprocessing;
use App\Helpers\VectorSpaceModel;
use App\Models\Query;
use App\Models\QueryTerm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;


class PreprocessingController extends Controller
{
    private function storeTFIDF(int $pasalId, array $tokens, array $idfTable): void
    {
        // 1. Hitung Term Frequency
        $tf = array_count_values($tokens);

        // 2. Buat mapping IDF
        $idfMap = array_column($idfTable, 'idf', 'term');

        // 3. Simpan ke tabel document_terms
        foreach ($tf as $term => $count) {
            $tfWeight = $count > 0 ? round(1 + log10($count), 4) : 0;
            $idf = $idfMap[$term] ?? 0;
            $tfidf = round($tfWeight * $idf, 4);

            DocumentTerm::updateOrCreate(
                ['pasal_id' => $pasalId, 'term' => $term],
                ['tf' => $count, 'tfidf' => $tfidf]
            );
        }
    }

    public function preprocessAllPasal()
    {
        $pasals = Pasal::all();
        $tokenMap = [];

        // 1. Preprocess semua pasal
        foreach ($pasals as $pasal) {
            $tokenMap[$pasal->id] = TextPreprocessing::preprocessText($pasal->isi_pasal);
        }

        // 2. Buat format dokumen untuk TF & IDF
        $documentList = collect($tokenMap)->map(fn($tokens) => ['tokens' => $tokens])->values()->all();
        $docCount = count($documentList);

        // 3. Hitung TF, TF Weight, dan IDF global
        $vsm = new VectorSpaceModel();
        $tfTable = $vsm->calculateTermFrequencies($documentList, []);
        $tfWeightTable = $vsm->calculateTFWeight($tfTable, $docCount);
        $idfTable = $vsm->calculateIDF($tfTable, $docCount);

        // 4. Proses dan simpan TF-IDF untuk masing-masing pasal
        foreach ($pasals as $pasal) {
            $tokens = $tokenMap[$pasal->id];
            $this->storeTFIDF($pasal->id, $tokens, $idfTable);
        }

        return response()->json(['message' => 'Preprocessing all pasal completed.']);
    }

    public static function preprocessQuery(string $query): array
    {
        // 1. Simpan query ke database
        $queryModel = Query::create(['user_input' => $query]);
        
        // 2. Preprocessing: tokenize, stopword removal, stemming
        $queryTokens = TextPreprocessing::preprocessText($query);
        
        // 3. Hitung Term Frequency (TF) dari query
        $queryTF = array_count_values($queryTokens);
        $terms   = array_keys($queryTF);
        
        // 4. Ambil IDF global untuk hanya term yang muncul di query (cached)
        $totalDocs = Pasal::count();
        $key = 'idf_map:' . md5(implode('|', $terms));
        $idfMap = Cache::remember(
            $key,
            now()->addMinutes(10),
            function () use ($terms, $totalDocs) {
                return DB::table('document_terms')
                ->select('term', DB::raw('COUNT(DISTINCT pasal_id) as df'))
                ->whereIn('term', $terms)
                ->groupBy('term')
                ->get()
                ->mapWithKeys(function ($row) use ($totalDocs) {
                    $idf = $row->df > 0 ? round(log10($totalDocs / $row->df), 4) : 0;
                    return [$row->term => $idf];
                })
                ->toArray();
            }
        );
        
        // 5. Hitung dan simpan TF, TF-weight, dan TF-IDF ke query_terms,
        //    sekaligus kumpulkan vektor TF-IDF untuk return
        $queryTFIDF = [];

        DB::transaction(function () use (&$queryTFIDF, $queryModel, $queryTF, $idfMap) {
            foreach ($queryTF as $term => $count) {
                $tfWeight = $count > 0 ? round(1 + log10($count), 4) : 0;
                $idf = $idfMap[$term] ?? 0;
                $tfidf = round($tfWeight * $idf, 4);
        
                QueryTerm::updateOrCreate(
                    ['query_id' => $queryModel->id, 'term' => $term],
                    ['tf' => $count, 'tfidf' => $tfidf]
                );
        
                $queryTFIDF[$term] = $tfidf;
            }
        });

        // 6. Kembalikan vektor TF-IDF query dan daftar term
        return [
            'tfidf' => $queryTFIDF,     // e.g. ['pidana' => 0.301, 'penjara' => 0.477, …]
            'terms' => $terms           // e.g. ['pidana','penjara',…]
        ];
    }

    public function getPasalDocuments()
    {
        $ids = [13, 31, 32, 35, 43];

        $pasalData = Pasal::whereIn('id', $ids)->with('bab.buku')->get();

        return $pasalData->map(function ($item) {
            return [
                'buku' => $item->bab->buku->judul ?? 'Tidak Diketahui',
                'bab' => $item->bab->nomor_bab ?? 'Tidak Diketahui',
                'pasal' => $item->nomor_pasal,
                'isi' => $item->isi_pasal
            ];
        })->toArray();
    }

    public function preprocessPasalDocuments()
    {
        $documents = $this->getPasalDocuments();

        // Preprocessing dokumen pasal
        foreach ($documents as &$document) {
            $document['tokens'] = TextPreprocessing::preprocessText($document['isi']);
        }

        return $documents;
    }

    public function resultPreprocessing()
    {
        // Ambil dokumen pasal
        $documentsPasal = $this->getPasalDocuments();
        $documents = $this->preprocessPasalDocuments();
        
        // Contoh query yang akan diproses
        $query = "Terpidana melarikan diri dari tempat pidana penjara.";
        $preprocessedQuery = TextPreprocessing::preprocessText($query);
        
        // TF
        $tfTable = VectorSpaceModel::calculateTermFrequencies($documents, $preprocessedQuery);
        
        // TF Weight
        $tfWeightTable = VectorSpaceModel::calculateTFWeight($tfTable, count($documents));
        
        // IDF
        $idfTable = VectorSpaceModel::calculateIDF($tfTable, count($documents));

        // TF-IDF
        $tfidfTable = VectorSpaceModel::calculateTFIDF($tfWeightTable, $idfTable, count($documents));
        
        // Cosine Similarity
        $cosineSimilarities = VectorSpaceModel::calculateCosineSimilarity($tfidfTable, count($documents));
        
        return view('sections.result', compact(
            'documentsPasal',
            'documents',
            'query',
            'preprocessedQuery',
            'tfTable',
            'tfWeightTable',
            'idfTable',
            'tfidfTable',
            'cosineSimilarities'
        ));
    }
}
