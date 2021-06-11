@extends('layouts.app')

@section('content')
    <div class="header-section">
        <a href="">
            <img 
            src="{{ URL('storage/arvin-logo.png') }}" 
            class="cars-logo"
            alt="cars logo"
            title="cars logo"
            />
        </a>
        <hr>
        <h2 class="dark big">{{ $car->name }}</h2>
    </div> 
    <div class="container-grid-2">
        <div>
            <img class="img-team" src="{{ asset('images/' . $car->image_path) }}" alt="">
        </div>
        <div>
            <h2>Founded: {{ $car->founded }}</h2>
            <p>{{ $car->description }}</p>
            <br>
            <table border="2" cellspacing="0">
                <tr>
                    <th>Model</th>
                    <th>Engines</th>
                    <th>Date</th>
                </tr>

                @forelse ($car->carModels as $model)
                    <tr>
                        <td>{{$model->model_name}}</td>
                        <td>
                            @foreach ($car->engines as $engine)
                                @if ($model->id == $engine->model_id)
                                    {{ $engine->engine_name }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            {{ date('d-m-Y', strtotime($car->productionDate->created_at)) }}
                        </td>
                    </tr>
                @empty
                    <p>No car models found</p>                    
                @endforelse
            </table>
            <br>
            <p>
                Product types:
                @forelse ($car->products as $product)
                    <p> {{ $product->name }} </p>
                @empty
                    <p>No car product description</p>
                @endforelse
            </p>
        </div>
    </div>
@endsection