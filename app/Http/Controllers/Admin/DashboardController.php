<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Buku;
use App\Models\Bab;
use App\Models\Pasal;
use App\Models\Query;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $TotalBuku = count(Buku::all());
        $TotalBAB = count(Bab::all());
        $TotalPasal = count(Pasal::all());
        $TotalQuery = count(Query::all());
        // Data untuk History Chart
        $days = collect(range(0, 29))->map(function ($i) {
            return Carbon::now()->subDays($i)->format('d M');
        })->reverse()->values();

        $dailyHistories = collect(range(0, 29))->map(function ($i) {
            return Query::whereDate('created_at', Carbon::now()->subDays($i)->toDateString())
                ->count();
        })->reverse()->values();

        return view('admin.dashboard', compact('TotalBuku', 'TotalBAB', 'TotalPasal', 'TotalQuery', 'days', 'dailyHistories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user = Auth::user();
        return view('admin.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = Auth::user(); // Ambil data user yang sedang login

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
        ]);
    
        return redirect()->route('admin.dashboard.profile')->with('success', 'Profil berhasil diperbarui.');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:8', 'confirmed'],
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password lama tidak cocok.']);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('success', 'Password berhasil diperbarui.');
    }
}
