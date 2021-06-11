@extends('layouts.app')

@section('content')
    <div>
        <h2 class="dark big">Edit Car</h2>    
    </div>
    <div>
        <form action="/cars/{{ $car->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="file">
                <label for="name">Image:</label>
                <input type="file" name="image" value="{{ $car->image_path }}">
            </div>
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
        {{-- {{ var_dump($errors) }} --}}
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        @else
            {{-- <h2>There are no errors!</h2> --}}
        @endif
    </div>
@endsection