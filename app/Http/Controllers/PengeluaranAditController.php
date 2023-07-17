<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengeluaranAditController extends Controller
{
    public function index()
    {
        //mengambil data dari tabel pengeluaran
        $pengeluaranadit = DB::table('pengeluaranadit')->get();
        //mengirim data ke view pengeluaran
        return view('pengeluaranadit', ['pengeluaranadit' => $pengeluaranadit]);
    }//
}
