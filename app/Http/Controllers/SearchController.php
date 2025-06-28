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
        $query = $request->input('query');
        
        // Simpan keyword dalam session (agar tetap terbawa di paginate)
        if ($request->isMethod('post')) {
            session(['search_keyword' => $query]);
        } else {
            $query = session('search_keyword');
        }
        
        if (empty($query)) {
            return redirect()->route('pasal.index')->with('error', 'Inputan tidak boleh kosong.');
        }
        // Cari pasal berdasarkan query
        $results = Pasal::where('isi_pasal', 'like', '%' . $query . '%')->paginate(21);

        return view('sections.pasal.index', compact('results', 'query'));
    }

}
