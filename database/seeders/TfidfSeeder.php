<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Helpers\VectorService as TfidfService;
use App\Models\TermIndex;

class TfidfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tfidf = new TfidfService();

        foreach ($tfidf->getAllDocumentVectors() as $pasalId => $vector) {
            foreach ($vector as $term => $weight) {
                TermIndex::updateOrCreate(
                    ['pasal_id' => $pasalId, 'term' => $term],
                    ['tfidf' => $weight]
                );
            }
        }
    }
}
