<?php

namespace App\Http\Controllers;

use App\Models\Pasal;
use App\Models\DocumentTerm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\PreprocessingController;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua data pasal dengan paginasi 21 per halaman
        $results = Pasal::with('bab')->orderBy('id')->paginate(21);

        return view('sections.pasal.index', compact('results'));
    }

    public function show($id)
    {
        $pasal = Pasal::with(['bab.buku'])->findOrFail($id);

        return view('sections.pasal.show', compact('pasal'));
    }

    public function search(Request $request)
    {
        // Ambil input query dari form
        $query = $request->input('query');
    
        // === [1] Saat POST: Kirim pencarian baru ===
        if ($request->isMethod('post')) {
    
            // Validasi: input tidak boleh kosong
            if (empty($query)) {
                return redirect()->route('pasal.index')->with('error', 'Inputan tidak boleh kosong.');
            }
    
            // Preprocessing dan perhitungan TF-IDF Query (lihat PreprocessingController)
            $preprocessed = PreprocessingController::preprocessQuery($query); // return: ['terms' => [...], 'tfidf' => [...]]
    
            // Simpan hasil ke session agar GET nanti bisa akses
            session([
                'search_keyword' => $query,
                'search_preprocessed' => $preprocessed,
            ]);
    
            // Redirect ke GET agar bisa gunakan pagination/link normal
            return redirect()->route('pasal.process');
        }
    
        // === [2] Saat GET: Menampilkan hasil pencarian sebelumnya ===
        $query = session('search_keyword');
        $preprocessed = session('search_preprocessed');
        
        // Jika tidak ada session, redirect kembali
        if (empty($query) || empty($preprocessed)) {
            return redirect()->route('pasal.index')->with('error', 'Query tidak ditemukan dalam sesi.');
        }
    
        // Ambil TF-IDF hasil preprocessing query
        $queryTfidf = $preprocessed['tfidf'];
        $terms = array_keys($queryTfidf);

        // ————————————————————————————
        //  ➤ Ground truth: pasal yang mengandung *semua* term query
        $termCount = count($terms);
        $groundTruthIds = DB::table('document_terms')
            ->select('pasal_id')
            ->whereIn('term', $terms)
            ->groupBy('pasal_id')
            ->havingRaw('COUNT(DISTINCT term) = ?', [$termCount])
            ->pluck('pasal_id')
            ->toArray();
        // ————————————————————————————
    
        // Hitung panjang vektor query: sqrt(q1^2 + q2^2 + ...)
        $queryLength = sqrt(array_sum(array_map(fn($val) => $val ** 2, $queryTfidf)));
    
        // Ambil semua document_terms (TF-IDF dari pasal) yang memiliki term dari query
        $docTerms = DocumentTerm::whereIn('term', $terms)
            ->get(['pasal_id', 'term', 'tfidf'])
            ->groupBy('pasal_id');
    
        // Hitung cosine similarity: sim(q,d) = dot(q,d) / (||q|| * ||d||)
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
            
            // Simpan hanya jika similarity > 0
            if ($cosine >= 0.4) {
                $similarities[] = [
                    'pasal_id' => $pasalId,
                    'similarity' => $cosine
                ];
            }
        }
    
        // Urutkan berdasarkan similarity tertinggi
        usort($similarities, fn($a, $b) => $b['similarity'] <=> $a['similarity']);
        $predictedIds  = array_column($similarities, 'pasal_id');
    
        // Ambil data Pasal yang cocok dari database
        $pasals = Pasal::with('bab.buku')
            ->whereIn('id', $predictedIds)
            ->get()
            ->keyBy('id');
    
        // Gabungkan hasil similarity dengan model Pasal
        $results = [];
        foreach ($similarities as $item) {
            $pasal = $pasals[$item['pasal_id']] ?? null;
            if ($pasal) {
                $pasal->similarity = $item['similarity']; // tambahkan properti similarity
                $results[] = $pasal;
            }
        }
    
        // === [3] Paginate hasil pencarian manual ===
        $page = $request->input('page', 1);
        $perPage = 21; // ubah sesuai kebutuhan
        $offset = ($page - 1) * $perPage;
    
        $pagedResults = array_slice($results, $offset, $perPage);
    
        $paginator = new LengthAwarePaginator(
            $pagedResults,
            count($results),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        // ————————————————————————————
        //  ➤ Hitung Confusion Matrix & Metrik
        $totalDocs = Pasal::count();
        $tp = count(array_intersect($predictedIds, $groundTruthIds));
        $fp = count(array_diff($predictedIds,  $groundTruthIds));
        $fn = count(array_diff($groundTruthIds, $predictedIds));
        $tn = $totalDocs - $tp - $fp - $fn;

        $precision = ($tp + $fp) > 0 ? round($tp / ($tp + $fp), 4) : 0;
        $recall    = ($tp + $fn) > 0 ? round($tp / ($tp + $fn), 4) : 0;

        $metrics = compact('tp','fp','fn','tn','precision','recall');
        // ————————————————————————————
    
        // Kirim ke view
        return view('sections.pasal.index', [
            'results' => $paginator,
            'query' => $query,
            'metrics' => $metrics,
        ]);
    }
    
}
