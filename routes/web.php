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

// // Route basic
// Route::get('Biodata/{nama}/{alamat}/{sekolah}/{umur}',function($nama,$alamat,$sekolah,$umur){
//     return 'Nama : '.$nama.
//         '<br>Alamat :'.$alamat.
//         '<br>Sekolah :'.$sekolah.
//         '<br>Umur :'.$umur;
// });

Route::get('Pesan/{makan?}/{minum?}/{harga?}',function($makan=null,$minum=null,$harga=null){
    $str = "Silahkan pesan dulu";
    if (isset($makan)) {
        $str = "Anda pesan ".$makan;
    }
    if (isset($minum)) {
        $str .= " & ".$minum;
    }
    if (isset($harga)) {
        if ($harga < 0) {
            $str .= " Maaf harga invalid,silahkan input kembali";
        }
        if ($harga >= 35000) {
            $str .= " Dengan harga ".$harga." Dan anda mendapatkan Plate & Cup size Large(L)";
        }
        if ($harga <= 25000) {
            $str .= " Dengan harga ".$harga." Dan anda mendapatkan Plate & Cup size S(Small)";
        }
        elseif ($harga >= 25000 && $harga < 35000) {
            $str .= " Dengan harga ".$harga." Dan anda mendapatkan Plate & Cup size Medium(M)";
        }
    }
    return $str;
});

route::get('tni/{nama?}/{bb?}/{umur?}',function($nama=null,$bb=null,$umur=null){
$str = "Silahkan masukkan data terlebih dahulu";
if (isset($nama)) {
 $str = 'Nama anda : '.$nama;
}
if (isset($bb)) {
    if ($bb > 76 && $bb < 100) {
     $str .= '<br>Berat badan anda : '.$bb.'Kg (Anda harus turun berat badan)';
    }
    if ($bb > 65 && $bb < 75) {
     $str .= '<br>Berat badan anda : '.$bb.'Kg (Berat badan anda ideal)';
    }
    if ($bb > 50 && $bb < 64) {
     $str .= '<br>Berat badan anda : '.$bb.'Kg (Naikan berat badan anda)';
    }
    if ($bb < 50) {
     $str .= '<br>Berat badan anda : '.$bb.'Kg (Anda kurang nustrisi)';
    }
}
if (isset($umur)) {
    if ($umur < 30) {
     $str .= '<br>Umur anda : '.$umur.' (tamtama)';
    }
    if ($umur > 30 && $umur < 40) {
     $str .= '<br>Umur anda : '.$umur.' (Perwira)';
    }

    if ($umur > 40 && $umur < 50) {
     $str .= '<br>Umur anda : '.$umur.' (Laksmana)';
    }

    if ($umur > 50 && $umur < 60) {
     $str .= '<br>Umur anda : '.$umur.' (Jendral)';
    }
}
return $str;
});