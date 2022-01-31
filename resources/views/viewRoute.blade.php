<h1>Not connected with Controller | View and Route</h1>
<div>
    {{-- Using Name in Web.php --}}
    <form action="{{route('blogStatus')}}">
        <input type="submit" Value="Blog Site" />
    </form>
    <form action="/data-pass">
        <input type="submit" Value="Data Passing Via Routing" />
    </form>
</div>