<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuKuhpController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.data.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
        ]);

        // Cek apakah judul sudah ada di database
        $sudahAda = Buku::where('judul', $validated['judul'])->exists();

        if ($sudahAda) {
            return redirect()->back()
                ->withErrors(['judul' => 'Judul buku sudah ada dalam database.'])
                ->withInput();
        }

        Buku::create($validated);
        return redirect()->route('admin.dashboard.data')->with('success', 'Buku KUHP berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku_kuhp)
    {
        return view('admin.data.buku.edit', compact('buku_kuhp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku_kuhp)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
        ]);

        $buku_kuhp->update($validated);
        return redirect()->route('admin.dashboard.data')->with('success', 'Buku KUHP berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $buku_kuhp = Buku::findOrFail($id);
            $buku_kuhp->delete(); // Menghapus data buku dari database
            return redirect()->route('admin.dashboard.data')
            ->with('success', 'Buku KUHP berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard.data')
            ->with('error', 'Terjadi kesalahan saat menghapus Buku: ' . $e->getMessage());
        }
    }
}
