@extends('layouts.app')

@section('content')
    <div>
        <h2 class="dark big">Edit Car</h2>    
    </div>
    <div>
        <form action="/cars/{{ $car->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="name">
                <label for="name">Car name:</label>
                <input type="text" name="name" value="{{ $car->name }}" placeholder="Brand name...">
            </div>
            <div class="founded">
                <label for="founded">Founded:</label>
                <input type="text" name="founded" value="{{ $car->founded }}" placeholder="Founded...">
            </div>
            <div class="description">
                <label for="description">Description:</label>
                <input type="text" name="description" value="{{ $car->description }}" placeholder="Description...">
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection