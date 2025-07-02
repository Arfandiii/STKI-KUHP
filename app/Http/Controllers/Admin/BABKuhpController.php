<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Bab;


class BABKuhpController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $DataBuku = Buku::all();
        $DataBab = Bab::all();
        return view('admin.data.bab.create', compact('DataBuku', 'DataBab'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'buku_id' => 'required|exists:buku,id',
            'nomor_bab' => [
                'required',
                'regex:/^(?=[MDCLXVI])M{0,4}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$/i', // hanya angka romawi
                function ($attribute, $value, $fail) use ($request) {
                    $exists = Bab::where('buku_id', $request->buku_id)
                        ->where('nomor_bab', strtoupper($value)) // case insensitive
                        ->exists();
    
                    if ($exists) {
                        $fail("Bab dengan nomor '$value' sudah ada untuk buku ini.");
                    }
                }
            ],
            'label_bab' => 'required|string|max:255',
        ]);

        $validated['nomor_bab'] = strtoupper($validated['nomor_bab']); // Simpan sebagai huruf besar

        Bab::create($validated);
        return redirect()->route('admin.dashboard.data')->with('success', 'BAB KUHP berhasil ditambahkan.');    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bab $bab_kuhp)
    {
        $DataBuku = Buku::all();
        return view('admin.data.bab.edit', compact('bab_kuhp', 'DataBuku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bab $bab_kuhp)
    {
        $validated = $request->validate([
            'buku_id' => 'required|exists:buku,id',
            'nomor_bab' => [
                'required',
                'regex:/^(?=[MDCLXVI])M{0,4}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$/i', // hanya angka romawi
                function ($_ , $value, $fail) use ($request, $bab_kuhp) {
                    $exists = Bab::where('buku_id', $request->buku_id)
                        ->where('nomor_bab', strtoupper($value)) // case insensitive
                        ->where('id', '!=', $bab_kuhp->id)
                        ->exists();
    
                    if ($exists) {
                        $fail("Bab dengan nomor '$value' sudah ada untuk buku ini.");
                    }
                }
            ],
            'label_bab' => 'required|string|max:255',
        ]);

        $validated['nomor_bab'] = strtoupper($validated['nomor_bab']); // Simpan sebagai huruf besar

        $bab_kuhp->update($validated);
        return redirect()->route('admin.dashboard.data')->with('success', 'BAB KUHP berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $bab_kuhp = Bab::findOrFail($id);
            $bab_kuhp->delete();
            return redirect()->route('admin.dashboard.data')
            ->with('success', 'BAB KUHP berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.data')
            ->with('error', 'Terjadi kesalahan saat menghapus BAB: ' . $e->getMessage());
        }
    }
}