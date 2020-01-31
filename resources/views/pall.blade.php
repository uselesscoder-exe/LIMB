<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>PEOPLE LIST</center>
    @foreach ($people as $item)
    <hr>
    Id : {{$item->id}}<br>
    name : {{$item->name}}<br>
    address : {{$item->address}}<br>
    age : {{$item->age}}<br>
    region : {{$item->region}}<br>
    phone : {{$item->phone}}<br>
    AreaCode : {{$item->AreaCode}}<br>
    wealth : {{$item->wealth}}<br>
    <hr>
    @endforeach
</body>
</html>
{{--
        'name' => $faker->name,
        'address' => $faker->address,
        'age' => $faker->numberBetween(15,90),
        'region' => $faker->country,
        'phone' => $faker->RandomNumber,
        'AreaCode' => $faker->areaCode,
        'wealth' => $faker->RandomNumber, --}}
