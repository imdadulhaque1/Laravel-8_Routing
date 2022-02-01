<h1>Conditional Statement</h1>

<p>{{ $name }}</p>
<p>{{ $email }}</p>
@empty($message)
    <h3>message variable is empty!</h3>    
@endempty

@if($age > 20)
    <h5> Age {{$age}} is getter than 20.</h5>
@elseif ($age == 20)
    <h5> Age {{$age}} is equal to 20.</h5>
@else
    <h5> Age {{$age}} is less than 20.</h5>
@endif


<h1>Conditional Statement using Foreach Loop</h1>
@foreach ($data as $num )
    {{-- Num: {{ $num }}<br/> --}}
    {{-- <h3>Number: {{$num}}</h3> --}}
    @if($num%2 === 0)
        <h2>Even Number: {{$num}}</h2>
    @else
        <h2>Odd Number: {{$num}}</h2>
    @endif
@endforeach
