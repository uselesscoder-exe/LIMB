<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Buku karya Squidward Tentacles</center>

    @foreach ($book as $item)
    <hr>
    Id : {{$item->id}}<br>
    Nama buku : {{$item->nama_buku}}<br>
    Id buku : {{$item->id_buku}}<br>
    Jumlah Halaman : {{$item->jumlah_halaman}}<br>
    Penerbit : {{$item->penerbit}}<br>
    Penulis : {{$item->penulis}}<br>
    Harga : {{$item->harga}}<br>
    <hr>
    @endforeach

</body>
</html>
{{-- // $table->bigIncrements('id');
//             $table->string('nama_buku');
//             $table->string('id_buku');
//             $table->integer('jumlah_halaman');
//             $table->string('penerbit');
//             $table->string('penulis');
//             $table->integer('harga'); --}}
