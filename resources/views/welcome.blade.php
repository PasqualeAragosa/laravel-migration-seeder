@extends('layouts.app')

@section('content')
<section class="jumbo">
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">Trains</h1>
    </div>
</section>
<section class="train bg-light p-5">
    <div class="container">
        <div class="row row-cols-3 g-4">
            @foreach ($trains as $key => $train)
            <div class="col {{$key === count($trains)-1 ? 'mx-auto' : ''}}">
                <div class="card text-center h-100 p-3 shadow">
                    <h6>{{$train->company}}</h6>
                    <p class="mb-3">Departure: {{$train->departure_station}}</p>
                    <p>Arrival: {{$train->arrival_station}}</p>
                    <p>{{$train->departure_time}} / {{$train->arrival_time}}</p>
                    <p> Train n°{{$train->train_code}}</p>
                    <p>Carriages n° {{$train->number_of_carriages}} </p>
                    <p>{{$train->in_time === 1 ? 'IN ORARIO' : 'in ritardo'}}</p>
                    <p>{{$train->in_cancelled === 0 ? '' : 'CANCELLATO'}}</p>


                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>
@endsection