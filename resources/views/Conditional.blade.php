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