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
        // Inisialisasi helper preprocessing
        TextPreprocessing::init();

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

        // Inisialisasi helper preprocessing
        TextPreprocessing::init();

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
}
