<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengeluaranitemAditController extends Controller
{
    public function index()
    {
        //mengambil data dari tabel pengeluaranitemadit
        $pengeluaranitemadit = DB::table('pengeluaranitemadit')->get();
        //mengirim data ke view pengeluaranitemadit
        return view('pengeluaranitemadit', ['pengeluaranitemadit' => $pengeluaranitemadit]);
    }//
}
