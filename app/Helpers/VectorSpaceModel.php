<?php
namespace App\Helpers;

use App\Models\Pasal;
use App\Models\DocumentTerm;

class VectorSpaceModel
{
    // Hitung TF-IDF
    public static function calculateTFIDF($tf, $totalDocuments = null)
    {
        if ($totalDocuments === null) {
            $totalDocuments = Pasal::count();
        }

        $tfidf = [];
        foreach ($tf as $term => $count) {
            // Hitung DF (Document Frequency)
            $df = DocumentTerm::where('term', $term)->count();
            // Hitung IDF
            $idf = log10($totalDocuments / ($df + 1));
            // Hitung TF-IDF
            $tfidf[$term] = $count * $idf;
        }

        return $tfidf;
    }
}