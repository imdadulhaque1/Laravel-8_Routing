<h1>Our Site</h1>

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
    <form action="/data-pass">
        <input type="submit" Value="Data Passing Via Routing" />
    </form>
</div>