@extends('layouts.app')

@section('content')

<section>
    <div class="container">

        <!-- elenco dei treni -->
        <h1>TRENI</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Codice treno</th>
                <th>Partenza</th>
                <th>Arrivo</th>
                <th>Orario partenza</th>
                <th>Orario arrivo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{$train->train_code}}</td>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->departure_time}}</td>
                    <td>{{$train->arrival_time}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
       
    </div>
</section>

@endsection