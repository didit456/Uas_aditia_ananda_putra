<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasAditController extends Controller
{
    public function index()
    {
        //mengambil data dari tabel petugas
        $petugasadit = DB::table('petugasadit')->get();
        //mengirim data ke view petugas
        return view('petugasadit', ['petugasadit' => $petugasadit]);
    }//
}
