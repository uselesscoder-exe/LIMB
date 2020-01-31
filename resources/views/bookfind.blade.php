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
    <hr>
    Id : {{$book->id}}<br>
    Nama buku : {{$book->nama_buku}}<br>
    Id buku : {{$book->id_buku}}<br>
    Jumlah Halaman : {{$book->jumlah_halaman}}<br>
    Penerbit : {{$book->penerbit}}<br>
    Penulis : {{$book->penulis}}<br>
    Harga : {{$book->harga}}<br>
    <hr>
</body>
</html>
