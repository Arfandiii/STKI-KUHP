<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Query;

class HistoryQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $DataHistory = Query::paginate(20);
        return view('admin.history.index', compact('DataHistory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $queries = Query::findOrFail($id);
            $queries->delete();
            return redirect()->back()
            ->with('success', 'History pencarian berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()
            ->with('error', 'Terjadi kesalahan saat menghapus history pencarian: ' . $e->getMessage());
        }
    }
}
