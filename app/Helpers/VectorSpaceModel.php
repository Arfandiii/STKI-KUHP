<?php
namespace App\Helpers;

use App\Models\Pasal;
use App\Models\DocumentTerm;

class VectorSpaceModel
{
    /**
     * Hitung TF (term frequency) dari daftar token.
     * 
     * @param  array  $tokens  Array hasil preprocessText()
     * @return array           ['kata1' => 3, 'kata2' => 1, ...]
     */
    public static function calculateTF(array $tokens): array
    {
        $tf = [];
        foreach ($tokens as $term) {
            if (isset($tf[$term])) {
                $tf[$term]++;
            } else {
                $tf[$term] = 1;
            }
        }
        return $tf;
    }

    /**
     * Hitung TF-IDF dari term frequency.
     * 
     * @param  array  $tf  ['kata1' => 3, 'kata2' => 1, ...]
     * @return array       ['kata1' => 3, 'kata2' => 1, ...]
     */
    public static function calculateIDF(int $totalDocs, array $allTerms): array
    {
        $idf = [];
        foreach ($allTerms as $term => $df) {
            $idf[$term] = $df > 0 ? log10($totalDocs / $df) : 0;
        }
        return $idf;
    }

    
    
}