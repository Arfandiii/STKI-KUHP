<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bab;
use App\Models\Buku;
use App\Models\Pasal;
use Illuminate\Http\Request;
use App\Helpers\TextPreprocessing;
use App\Models\DocumentTerm;
use Illuminate\Pagination\LengthAwarePaginator;

class DataController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->input('filter', 'all');
        $search = $request->input('q');

        $DataBuku = Buku::all();
        // Logika untuk Data Bab dengan pencarian dan filter
        if ($filter === 'dataBab' || $filter === 'all') {
            if ($search) {
                $DataBab = Bab::where('nomor_bab', 'LIKE', '%' . $search . '%')
                            ->orWhere('label_bab', 'LIKE', '%' . $search . '%')
                            ->paginate(10);
            } else {
                $DataBab = Bab::paginate(10);
            }
        } else {
            $DataBab = collect(); // atau nilai default lainnya
        }
        
        // Logika untuk Data Pasal dengan pencarian dan filter
        if ($filter === 'dataPasal' || $filter === 'all') {
            $hasSimilarity = false;
            if ($search) {
                // Preprocessing dan perhitungan TF-IDF Query
                $preprocessed = $this->preprocessQuery($search);

                // Ambil TF-IDF hasil preprocessing query
                $queryTfidf = $preprocessed['tfidf'];
                $terms = array_keys($queryTfidf);

                // Hitung panjang vektor query
                $queryLength = sqrt(array_sum(array_map(fn($val) => $val ** 2, $queryTfidf)));

                // Ambil semua document_terms yang memiliki term dari query
                $docTerms = DocumentTerm::whereIn('term', $terms)
                    ->get(['pasal_id', 'term', 'tfidf'])
                    ->groupBy('pasal_id');

                // Hitung cosine similarity
                $similarities = [];
                foreach ($docTerms as $pasalId => $rows) {
                    $dot = 0;
                    $docLen = 0;

                    foreach ($rows as $row) {
                        $docWeight = $row->tfidf;
                        $queryWeight = $queryTfidf[$row->term] ?? 0;

                        $dot += $docWeight * $queryWeight;
                        $docLen += $docWeight ** 2;
                    }

                    $docLen = sqrt($docLen);
                    $cosine = ($queryLength > 0 && $docLen > 0) ? round($dot / ($queryLength * $docLen), 4) : 0;

                    if ($cosine > 0.5) {
                        $similarities[] = [
                            'pasal_id' => $pasalId,
                            'similarity' => $cosine
                        ];
                    }
                }

                // Urutkan berdasarkan similarity tertinggi
                usort($similarities, fn($a, $b) => $b['similarity'] <=> $a['similarity']);
                $ids = array_column($similarities, 'pasal_id');

                // Ambil data Pasal yang cocok dari database
                $pasals = Pasal::with('bab.buku')
                    ->whereIn('id', $ids)
                    ->get()
                    ->keyBy('id');

                // Gabungkan hasil similarity dengan model Pasal
                $results = [];
                foreach ($similarities as $item) {
                    $pasal = $pasals[$item['pasal_id']] ?? null;
                    if ($pasal) {
                        $pasal->similarity = $item['similarity'];
                        $results[] = $pasal;
                    }
                }

                // Paginasi manual
                $page = $request->input('page', 1);
                $perPage = 10;
                $offset = ($page - 1) * $perPage;

                $pagedResults = array_slice($results, $offset, $perPage);
                $paginator = new LengthAwarePaginator(
                    $pagedResults,
                    count($results),
                    $perPage,
                    $page,
                    ['path' => $request->url(), 'query' => $request->query()]
                );
                $hasSimilarity = count($similarities) > 0;
                $DataPasal = $paginator;
            } else {
                $DataPasal = Pasal::paginate(10);
            }
        } else {
            $DataPasal = collect();
        }
        return view('admin.data.index', compact('DataBuku', 'DataBab', 'DataPasal', 'filter', 'search','hasSimilarity'));
    }

    private function preprocessQuery($query)
    {
        // Gunakan helper TextPreprocessing untuk preprocessing query
        $processedTerms = TextPreprocessing::preprocessText($query);
    
        // Hitung TF-IDF untuk setiap term
        $tfidf = array_count_values($processedTerms);
        $totalTerms = count($processedTerms);
        
        foreach ($tfidf as &$value) {
            $value = $value / $totalTerms;
        }
    
        return [
            'terms' => $processedTerms,
            'tfidf' => $tfidf
        ];
    }
}
