<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route basic
Route::get('Biodata/{nama}/{alamat}/{sekolah}/{umur}',function($nama,$alamat,$sekolah,$umur){
    return 'Nama : '.$nama.
        '<br>Alamat :'.$alamat.
        '<br>Sekolah :'.$sekolah.
        '<br>Umur :'.$umur;
});
