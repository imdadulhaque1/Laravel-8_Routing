<h1>Blog</h1>
<div>
    {{-- Using url in Web.php --}}
    {{-- <form action="/about">
        <input type="submit" Value="About My" />
    </form>
    <form action="/site">
        <input type="submit" Value="Our Site" />
    </form> --}}

    {{-- Using Name in Web.php --}}
    <form action="{{route('myAbout')}}">
        <input type="submit" Value="About My" />
    </form>
    <form action="{{route('mySite')}}">
        <input type="submit" Value="Our Site" />
    </form>
    <form action="{{route('viewAndRoute')}}">
        <input type="submit" value="View to Route">
    </form>
    <form action="/add-form">
        <input type="submit" Value="Redirect to Site page" />
    </form>
</div>