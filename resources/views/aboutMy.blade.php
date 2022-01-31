<h1>About</h1>
<div>
    {{-- Using Name in Web.php --}}
    <form action="{{route('blogStatus')}}">
        <input type="submit" Value="Blog Site" />
    </form>
    <form action="{{route('mySite')}}">
        <input type="submit" Value="Our Site" />
    </form>
    <form action="{{route('sitePosts')}}">
        <input type="submit" Value="My Posts" />
    </form>
</div>