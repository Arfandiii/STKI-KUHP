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
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->input('filter', 'all');
        $search = $request->input('q');

        $DataBuku = Buku::all();
        $hasSimilarity = false;

        // ======== Handle DataBab ========
        if ($filter === 'dataBab') {
            if ($search) {
                $DataBab = Bab::where('nomor_bab', 'LIKE', '%' . $search . '%')
                            ->orWhere('label_bab', 'LIKE', '%' . $search . '%')
                            ->paginate(10);
            } else {
                $DataBab = Bab::paginate(10);
            }
        } elseif ($filter === 'all') {
            // Tampilkan semua tanpa pencarian (BAB)
            $DataBab = Bab::paginate(10);
        } else {
            $DataBab = collect(); // Kosongkan jika tidak dibutuhkan
        }

        // ======== Handle DataPasal ========
        if ($filter === 'dataPasal') {
            if ($search) {
                // 1. Preprocessing Query
                $preprocessed = $this->preprocessQuery($search);
                $queryTfidf = $preprocessed['tfidf'];
                $terms = array_keys($queryTfidf);

                $queryLength = sqrt(array_sum(array_map(fn($val) => $val ** 2, $queryTfidf)));

                // 2. Ambil dokumen term yang relevan
                $docTerms = DocumentTerm::whereIn('term', $terms)
                    ->get(['pasal_id', 'term', 'tfidf'])
                    ->groupBy('pasal_id');

                // 3. Hitung cosine similarity
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

                // 4. Urutkan berdasarkan similarity tertinggi
                usort($similarities, fn($a, $b) => $b['similarity'] <=> $a['similarity']);
                $ids = array_column($similarities, 'pasal_id');

                // 5. Ambil data pasal yang relevan
                $pasals = Pasal::with('bab.buku')
                    ->whereIn('id', $ids)
                    ->get()
                    ->keyBy('id');

                // 6. Gabungkan pasal dengan nilai similarity
                $results = [];
                foreach ($similarities as $item) {
                    $pasal = $pasals[$item['pasal_id']] ?? null;
                    if ($pasal) {
                        $pasal->similarity = $item['similarity'];
                        $results[] = $pasal;
                    }
                }

                // 7. Paginasi manual hasil similarity
                $page = $request->input('page', 1);
                $perPage = 10;
                $offset = ($page - 1) * $perPage;

                $pagedResults = array_slice($results, $offset, $perPage);
                $DataPasal = new LengthAwarePaginator(
                    $pagedResults,
                    count($results),
                    $perPage,
                    $page,
                    ['path' => $request->url(), 'query' => $request->query()]
                );
                $hasSimilarity = count($similarities) > 0;

            } else {
                $DataPasal = Pasal::paginate(10);
            }
        } elseif ($filter === 'all') {
            // Tampilkan semua tanpa pencarian (Pasal)
            $DataPasal = Pasal::paginate(10);
        } else {
            $DataPasal = collect(); // Kosongkan jika tidak dibutuhkan
        }

        $isPreprocessed = DB::table('pasal')
            ->whereNotIn('id', function ($query) {
                $query->select('pasal_id')->from('document_terms');
            })
            ->doesntExist(); // TRUE jika SEMUA pasal sudah diproses

        return view('admin.data.index', compact(
            'DataBuku',
            'DataBab',
            'DataPasal',
            'filter',
            'search',
            'hasSimilarity',
            'isPreprocessed'
        ));
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
