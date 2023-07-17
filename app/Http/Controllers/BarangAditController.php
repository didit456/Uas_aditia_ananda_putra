<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangAditController extends Controller
{
    public function index()
    {
        //mengambil data dari tabel barang
        $barangadit = DB::table('barangadit')->get();
        //mengirim data ke view barang
        return view('barangadit', ['barangadit' => $barangadit]);
    }//
}
