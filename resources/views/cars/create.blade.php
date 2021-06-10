@extends('layouts.app')

@section('content')
    <div>
        <h2 class="dark big">Add new Car</h2>    
    </div>
    <div>
        <form action="/cars" method="POST">
            @csrf
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
    </div>
@endsection