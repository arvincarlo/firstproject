<!--    
    Comparing multiple possible conditions
    Multiple values that may require the same code


-->

@foreach ($names as $student)
    <h1>The student name is {{ $student }}</h1>
@endforeach

@forelse ($names as $name)
    <h2>The name is {{ $name }}</h2>
@empty
    <h2>There are no names</h2>
@endforelse

{{ $i = 0 }}

@while ($i < 10)
    <h2>The number is {{ $i }}</h2>
    {{ $i++ }}
@endwhile
{{-- @switch($name)
    @case('Cris')
        <h2>Name is Cris!</h2>
        @break
    @case('John')
        <h2>Name is John!</h2>
        @break
    @case('Jasmin')
        <h2>Name is Jasmin!</h2>
        @break
    @default
        <h2>No match found!</h2> 
@endswitch --}}