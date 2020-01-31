<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Ngutang</center>
    @foreach ($tabungan as $item)
    <hr>
    id : {{$item->id}}<br>
    Nama : {{$item->nama}}<br>
    Nis : {{$item->nis}}<br>
    Kelas : {{$item->kelas}}<br>
    Jumlah : {{$item->jml}}<br>
    @if ($item->jml >= 50000)
        Jenis Paket : Paket A
    @elseif ($item->jml >= 25000)
        Jenis Paket : Paket B
    @elseif ($item->jml >= 10000)
        Jenis paket : Paket C
    @else
        Jenis paket : -
    @endif
    <hr>
    @endforeach
</body>
</html>
