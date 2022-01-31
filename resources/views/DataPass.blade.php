<h1>Data Post via Routing from web.php</h1>
<div>
    <h3>{{$name}}</h3>
    <p>{{$email}}</p>
    <p>{{$designation}}</p>
</div>

<div>
    {{-- Using Name in Web.php --}}
    <form action="{{route('blogStatus')}}">
        <input type="submit" Value="Blog Site" />
    </form>
    <form action="{{route('myAbout')}}">
        <input type="submit" Value="About Site" />
    </form>
    <form action="{{route('sitePosts')}}">
        <input type="submit" Value="My Posts" />
    </form>
</div>