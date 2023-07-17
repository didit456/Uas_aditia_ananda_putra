<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BagianAditController extends Controller
{
    public function index()
    {
        //mengambil data dari tabel bagian
        $bagianadit = DB::table('bagianadit')->get();
        //mengirim data ke view bagian
        return view('bagianadit', ['bagianadit' => $bagianadit]);
    }
}
