@extends('layouts.app')

@section('content')
    <div>
        <h2 class="dark big">Add new Car</h2>    
    </div>
    <div>
        <form action="/cars" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="file">
                <label for="name">Image:</label>
                <input type="file" name="image">
            </div>
            <div class="name">
                <label for="name">Car name:</label>
                <input type="text" name="name" placeholder="Brand name...">
            </div>
            <div class="founded">
                <label for="founded">Founded:</label>
                <input type="text" name="founded" placeholder="Founded...">
            </div>
            <div class="description">
                <label for="description">Description:</label>
                <input type="text" name="description" placeholder="Description...">
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