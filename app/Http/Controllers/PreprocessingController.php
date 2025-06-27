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

    /**
     * Menghitung bobot Term Frequency (TF) untuk setiap token.
     *
     * @param array $tokens
     * @return array
     */
    public function calculateTFWeights($tokens)
    {
        // Menghitung frekuensi setiap token
        $tokenFrequencies = array_count_values($tokens);
        
        // Menghitung bobot TF untuk setiap token
        $tfWeights = [];
        foreach ($tokenFrequencies as $token => $frequency) {
            $tfWeights[$token] = round(1 + log($frequency, 10), 4); // Log basis 10
        }
        
        return $tfWeights;
    }

    /**
     * Menghitung Inverse Document Frequency (IDF) untuk setiap token.
     *
     * @param array $documents
     * @return array
     */
    public function calculateIDF($documents)
    {
        $allTokens = collect();
        
        // Mengumpulkan semua token dari semua dokumen
        foreach ($documents as $document) {
            $allTokens = $allTokens->merge($document['tokens']);
        }
        
        // Menghitung jumlah total dokumen
        $totalDocuments = count($documents);
        
        // Menghitung jumlah dokumen yang mengandung setiap kata
        $docFrequency = [];
        foreach ($allTokens->unique() as $token) {
            $count = 0;
            foreach ($documents as $document) {
                if (in_array($token, $document['tokens'])) {
                    $count++;
                }
            }
            $docFrequency[$token] = $count;
        }
        
        // Menghitung IDF untuk setiap kata
        $idf = [];
        foreach ($docFrequency as $token => $frequency) {
            $idf[$token] = round(log($totalDocuments / $frequency, 10), 4);
        }
        
        return $idf;
    }

    public function resultPreprocessing()
    {
        $documentsPasal = $this->getPasalDocuments();
        $documents = $this->preprocessPasalDocuments();

        foreach ($documents as &$document) {
            $document['tf'] = $this->calculateTFWeights($document['tokens']);
        }

        // Menghitung IDF
        $idf = $this->calculateIDF($documents);

        $query = "Mencuri dan membunuh dengan senjata tajam.";

        return view('sections.result', compact('documentsPasal', 'documents', 'query', 'idf'));
    }

}
