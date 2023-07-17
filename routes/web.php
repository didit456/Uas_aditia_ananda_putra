<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('petugasadit', 'App\Http\Controllers\PetugasAditController@index');
Route::get('barangadit', 'App\Http\Controllers\BarangAditController@index');
Route::get('bagianadit', 'App\Http\Controllers\BagianAditController@index');
Route::get('pengeluaranadit', 'App\Http\Controllers\PengeluaranAditController@index');
Route::get('pengeluaranitemadit', 'App\Http\Controllers\PengeluaranitemAditController@index');
Route::get('kategoriadit', 'App\Http\Controllers\KategoriAditController@index');