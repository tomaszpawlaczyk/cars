<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show-Samochód</title>
</head>
<body>
    
<div class="container">
    <h1>{{$car->vin}}</h1>
    <h3>Szczegoly</h3>
    <ul>
        <li><b>Kolor: </b>{{$car->color}}</li>
        <li><b>Cena: </b>{{$car->price}}</li>
        <li><b>Opis: </b>{{$car->description}}</li>

    </ul>


</div>

</body>
</html>