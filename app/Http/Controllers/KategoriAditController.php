<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriAditController extends Controller
{
    public function index()
    {
        //mengambil data dari tabel kategori
        $kategoriadit = DB::table('kategoriadit')->get();
        //mengirim data ke view kategori
        return view('kategoriadit', ['kategoriadit' => $kategoriadit]);
    }//
}
