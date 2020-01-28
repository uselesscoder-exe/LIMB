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
Route::get('testmodel', function() {
    $post = new App\Post;
$post->title = "7 Amalan Pembuka Jodoh";
$post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
$post->save();
return $post;
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

// Model books
// Model books
Route::get('data-buku/ambil3', function ()
{
    $data = App\Tugas::all()
    ->take(3);
    return $data;
});
Route::get('data-buku/select', function ()
{
    $data = App\Tugas::select('nama_buku','penerbit','penulis')->first();
    return $data;
});
Route::get('data-buku/tambahbuku/{nama_buku}/{id_buku}/{jumlah_halaman}/{penerbit}/{penulis}', function($nama,$idbuku,$jhal,$penerbit,$penulis) {
    $post = new App\Tugas;
    $post->nama_buku = $nama;
    $post->id_buku = $idbuku;
    $post->jumlah_halaman = $jhal;
    $post->penerbit = $penerbit;
    $post->penulis = $penulis;
    $post->save();
    return $post;
// check record baru di database
    });

    route::get('latihan','LatihanController@latihan');

    route::get('tambah/{a?}/{b?}','LatihanController@plus');
    route::get('kurang/{a?}/{b?}','LatihanController@minus');
    route::get('bagi/{a?}/{b?}','LatihanController@spare');
    route::get('kali/{a?}/{b?}','LatihanController@multi');
    route::get('/data-1','LatihanController@loop');
