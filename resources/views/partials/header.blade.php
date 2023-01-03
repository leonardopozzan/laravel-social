<header>
    @if(Auth::check())
    Benvenuto <b>{{ Auth::user()->name }}</b> <a href="{{ route('logout') }}">Logout</a>
    @else
    <a href="{{ route('login') }}">Login</a>
    @endif
</header>