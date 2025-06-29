<?php

namespace App\Http\Controllers;

use App\Models\Pasal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        // Saat POST (submit pencarian baru)
        if ($request->isMethod('post')) {
            $query = $request->input('query');

            if (empty($query)) {
                return redirect()->route('pasal.index')->with('error', 'Inputan tidak boleh kosong.');
            }

            // Simpan keyword dan hasil preprocess ke session
            session([
                'search_keyword' => $query,
                'search_preprocessed' => PreprocessingController::preprocessQuery($query)
            ]);

            // ✅ Redirect ke GET agar tidak ulang POST saat refresh
            return redirect()->route('pasal.process');
        }

        // Saat GET (misalnya dari redirect atau paginate)
        $query = session('search_keyword');
        $preprocessedQuery = session('search_preprocessed');
        
        if (empty($query)) {
            return redirect()->route('pasal.index')->with('error', 'Inputan tidak boleh kosong.');
        }
        // Cari pasal berdasarkan query
        $results = Pasal::with('bab')
            ->where('isi_pasal', 'LIKE', '%' . $query . '%')
            ->orderBy('id')
            ->paginate(21);

        return view('sections.pasal.index', compact('results', 'query'));
    }

}
