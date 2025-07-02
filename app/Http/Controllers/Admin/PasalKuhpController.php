<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Bab;
use App\Models\Pasal;

class PasalKuhpController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $DataBuku = Buku::all();
        $DataBab = Bab::all();
        return view('admin.data.pasal.create', compact('DataBuku', 'DataBab'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'bab_id' => 'required|exists:bab,id',
            'nomor_pasal' => 'required|unique:pasal,nomor_pasal',
            'isi_pasal' => 'required|string|max:255',
        ]);
        // Cek apakah nomor pasal sudah ada pada bab yang sama
        $exists = Pasal::where('bab_id', $request->bab_id)
            ->where('nomor_pasal', $request->nomor_pasal)
            ->exists();

        if ($exists) {
            return redirect()->back()
            ->withInput()
            ->withErrors(['nomor_pasal' => 'Nomor pasal sudah ada pada bab yang dipilih.']);
        }

        Pasal::create($validated);
        return redirect()->route('admin.dashboard.data')->with('success', 'Pasal KUHP berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasal $pasal_kuhp)
    {
        return view('admin.data.pasal.show', compact('pasal_kuhp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasal $pasal_kuhp)
    {
        $DataBab = Bab::all();
        return view('admin.data.pasal.edit', compact('pasal_kuhp', 'DataBab'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasal $pasal_kuhp)
    {
        $validated = $request->validate([
            'bab_id' => 'required|exists:bab,id',
            'nomor_pasal' => 'required|unique:pasal,nomor_pasal,' . $pasal_kuhp->id,
            'isi_pasal' => 'required|string|max:255',
        ]);

        // Cek apakah nomor pasal sudah ada pada bab yang sama
        $exists = Pasal::where('bab_id', $request->bab_id)
            ->where('nomor_pasal', $request->nomor_pasal)
            ->where('id', '!=', $pasal_kuhp->id)
            ->exists();

        if ($exists) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['nomor_pasal' => 'Nomor pasal sudah ada pada bab yang dipilih.']);
        }

        $pasal_kuhp->update($validated);
        return redirect()->route('admin.dashboard.data')->with('success', 'Pasal KUHP berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $pasal_kuhp = Pasal::findOrFail($id);
            $pasal_kuhp->delete();
            return redirect()->route('admin.dashboard.data')
            ->with('success', 'Pasal KUHP berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.data')
            ->with('error', 'Terjadi kesalahan saat menghapus Pasal: ' . $e->getMessage());
        }
    }
}
