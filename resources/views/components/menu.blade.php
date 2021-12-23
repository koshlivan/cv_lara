<nav class="menu">
    <a href="/">Main Page</a>
    @if(session('userLogin')!='')
    <a  href="/edit">Edit</a>
    <a href="/logout">Logout</a>
    @else
    <a href="/login">Login</a>
    <a href="/register">Register</a>
    @endif

</nav>
