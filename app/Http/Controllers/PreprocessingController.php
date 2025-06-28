<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasal;
use App\Models\DocumentTerm;
use App\Helpers\TextPreprocessing;
use App\Helpers\VectorSpaceModel;
use App\Models\Query;
use App\Models\QueryTerm;

class PreprocessingController extends Controller
{
    public function preprocessAllPasal()
    {
        $pasals = Pasal::all();

        foreach ($pasals as $pasal) {
            $this->preprocessPasal($pasal);
        }
        
        return response()->json(['message' => 'Preprocessing all pasal completed.']);
    }

    private function preprocessPasal($pasal)
    {
        // Ambil isi pasal
        $content = $pasal->isi_pasal;

        // Lakukan preprocessing menggunakan helper
        $processedTokens = TextPreprocessing::preprocessText($content);

        // Hitung TF untuk setiap kata
        $tf = array_count_values($processedTokens);

        // Hitung TF-IDF menggunakan helper
        $tfidf = VectorSpaceModel::calculateTFIDF($tf);

        // Simpan ke database
        foreach ($tfidf as $term => $score) {
            DocumentTerm::updateOrCreate(
                ['pasal_id' => $pasal->id, 'term' => $term],
                ['tf' => $tf[$term], 'tfidf' => $score]
            );
        }
    }

    public function preprocessQuery(Request $request)
    {
        // Validasi input
        $request->validate([
            'query' => 'required|string',
        ]);

        // Ambil teks query dari request
        $queryText = $request->input('query');

        // Preprocessing query text
        $processedTokens = TextPreprocessing::preprocessText($queryText);

        // Hitung TF untuk setiap kata
        $tf = array_count_values($processedTokens);

        // Hitung TF-IDF
        $tfidf = VectorSpaceModel::calculateTFIDF($tf);

        // Simpan query ke database
        $query = Query::create([
            'user_input' => $queryText
        ]);

        // Simpan query terms ke database
        foreach ($tfidf as $term => $score) {
            QueryTerm::create([
                'query_id' => $query->id,
                'term' => $term,
                'tf' => $tf[$term],
                'tfidf' => $score
            ]);
        }

        // Redirect atau kirim respons
        // return redirect()->back()->with('success', 'Query berhasil diproses.');
        return response()->json(['message' => 'Preprocessing query completed.']);
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

    public function calculateTermFrequencies($documents, $queryTokens)
    {
        $allTerms = [];

        // Kumpulkan semua term unik dari dokumen
        foreach ($documents as $doc) {
            foreach ($doc['tokens'] as $term) {
                $allTerms[] = $term;
            }
        }

        // Tambahkan juga dari query
        foreach ($queryTokens as $term) {
            $allTerms[] = $term;
        }

        $uniqueTerms = array_values(array_unique($allTerms));

        $tfTable = [];

        foreach ($uniqueTerms as $term) {
            $row = ['term' => $term];

            // Hitung TF untuk tiap dokumen
            foreach ($documents as $index => $doc) {
                $count = array_count_values($doc['tokens'])[$term] ?? 0;
                $row["D" . ($index + 1)] = $count;
            }

            // Hitung TF untuk query
            $row["Q"] = array_count_values($queryTokens)[$term] ?? 0;

            $tfTable[] = $row;
        }

        return $tfTable;
    }

    public function calculateTFWeight($tfTable, $docCount)
    {
        $tfWeightTable = [];

        foreach ($tfTable as $row) {
            $newRow = ['term' => $row['term']];

            // Proses setiap dokumen
            for ($i = 1; $i <= $docCount; $i++) {
                $tf = $row["D$i"];
                $newRow["D$i"] = $tf > 0 ? round(1 + log10($tf), 4) : 0;
            }

            // Proses Query
            $tfQ = $row['Q'];
            $newRow['Q'] = $tfQ > 0 ? round(1 + log10($tfQ), 4) : 0;

            $tfWeightTable[] = $newRow;
        }

        return $tfWeightTable;
    }

    public function calculateIDF($tfTable, $docCount)
    {
        $idfTable = [];

        foreach ($tfTable as $row) {
            $term = $row['term'];

            // Hitung DF (jumlah dokumen yang memiliki term ini)
            $df = 0;
            for ($i = 1; $i <= $docCount; $i++) {
                if ($row["D$i"] > 0) {
                    $df++;
                }
            }

            // Hitung IDF (hindari pembagian nol)
            // $idf = $df > 0 ? round(log10($docCount / $df), 4) : 0;

            $idf = log10(($docCount + 1) / ($df + 1)) + 1;

            $idfTable[] = [
                'term' => $term,
                'df' => $df,
                'idf' => $idf
            ];
        }

        return $idfTable;
    }


    public function calculateTFIDF($tfWeightTable, $idfTable, $docCount)
    {
        $tfidfTable = [];

        foreach ($tfWeightTable as $tfRow) {
            $term = $tfRow['term'];

            // Cari IDF dari term ini
            $idfMap = array_column($idfTable, 'idf', 'term');
            // …
            $idf = $idfMap[$term] ?? 0;

            $row = ['term' => $term];

            // Kalikan TF Weight * IDF untuk tiap dokumen
            for ($i = 1; $i <= $docCount; $i++) {
                $tfWeight = $tfRow["D$i"];
                $row["D$i"] = round($tfWeight * $idf, 4);
            }

            // Kalikan untuk Query
            $tfWeightQ = $tfRow["Q"];
            $row["Q"] = round($tfWeightQ * $idf, 4);

            $tfidfTable[] = $row;
        }

        return $tfidfTable;
    }

    public function calculateCosineSimilarity($tfidfTable, $docCount)
    {
        $similarities = [];

        // Hitung panjang vektor Query
        $queryVectorLength = 0;
        foreach ($tfidfTable as $row) {
            $queryVectorLength += pow($row['Q'], 2);
        }
        $queryVectorLength = sqrt($queryVectorLength);

        // Hitung cosine similarity dengan tiap dokumen
        for ($i = 1; $i <= $docCount; $i++) {
            $dotProduct = 0;
            $docVectorLength = 0;

            foreach ($tfidfTable as $row) {
                $docVal = $row["D$i"];
                $queryVal = $row["Q"];

                $dotProduct += $docVal * $queryVal;
                $docVectorLength += pow($docVal, 2);
            }

            $docVectorLength = sqrt($docVectorLength);

            // Hindari pembagian nol
            $cosine = ($queryVectorLength > 0 && $docVectorLength > 0)
                ? round($dotProduct / ($queryVectorLength * $docVectorLength), 4)
                : 0;

            $similarities[] = [
                'doc' => "D$i",
                'similarity' => $cosine
            ];
        }

        return $similarities;
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
        $tfTable = $this->calculateTermFrequencies($documents, $preprocessedQuery);
        
        // TF Weight
        $tfWeightTable = $this->calculateTFWeight($tfTable, count($documents));
        
        // IDF
        $idfTable = $this->calculateIDF($tfTable, count($documents));

        // TF-IDF
        $tfidfTable = $this->calculateTFIDF($tfWeightTable, $idfTable, count($documents));
        
        // Cosine Similarity
        $cosineSimilarities = $this->calculateCosineSimilarity($tfidfTable, count($documents));
        
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
