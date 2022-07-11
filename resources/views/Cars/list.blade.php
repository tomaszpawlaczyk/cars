<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samochody</title>
</head>
<body>
    <div class="container">
        <h3>Samochody</h3>

        <div class="cars">
            <table>
                <thead>
                    <th>Liczba</th>
                    <th>Vin</th>
                    <th>Opis</th>
                    <th>Kolor</th>
                    <th>Cena</th>
                    <th>Szczegoly</th>
                    <th>Usun</th>
                </thead>
                <tbody>
                    @foreach ($cars as $car)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $car->vin }}</td>
                        <td>{{ $car->description }}</td>
                        <td>{{ $car->color }}</td>
                        <td>{{ $car->price }}</td>
                        <td>
                            <a href="{{route('cars.show',['id'=>$loop->iteration])}}">Szczegoly</a>    
                        <td>
                        <td>
                            <form action="{{route('cars.destroy', ['id' => $car->id]) }}" method="get">
                                <button type="submit">usun</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>