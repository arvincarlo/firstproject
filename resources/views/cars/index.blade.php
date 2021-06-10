@extends('layouts.app')
{{-- 
@foreach ($cars as $car)
    {{ $car->name }}
@endforeach --}}

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
        @if (count($cars) > 0)
            <h2 class="dark big">Cars</h2>
        @endif
    </div>
    
    
    <!-- Cars section -->
    @if (count($cars) > 0)
        @foreach ($cars as $car)
        <div class="container-grid-2">
            <div>
                <img class="img-team" src="{{ URL('storage/corolla-94.jpg') }}" alt="">
            </div>
            <div>
                <h2>Founded: {{ $car->founded }}</h2>
                <h3 class="view-details">
                    <a href="/cars/{{ $car->id }}" class="view-details">{{ $car->name }}</a>
                </h3>
                <p>{{ $car->description }}</p>
                <div class="btn-wrapper">
                    <div class="orange-btn">
                        <a href="cars/{{ $car->id }}/edit" class="edit-btn">Edit &rarr;</a>
                    </div>
                    <br>
                    <div class="delete-btn">
                        <form action="/cars/{{ $car->id }}" method="POST">
                            @csrf
                            @method('delete')
                                <button type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <div class="header-section">
            <h2 class="dark big">There are no available cars.</h2>
        </div>
    @endif
    <div class="create-container">
        <a href="cars/create">Add a new car &rarr;</a>
    </div>
@endsection