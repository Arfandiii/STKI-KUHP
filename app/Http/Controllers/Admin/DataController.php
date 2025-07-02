<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bab;
use App\Models\Buku;
use App\Models\Pasal;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $DataBuku = Buku::all();
        $DataBab = Bab::paginate(10);
        $DataPasal = Pasal::paginate(10);
        return view('admin.data.index', compact('DataBuku', 'DataBab', 'DataPasal'));
    }
}
