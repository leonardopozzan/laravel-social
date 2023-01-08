<header>
    <!-- Image and text -->
    <nav id="navbar">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-lg-nowrap">

            <div class="img-box-header">

                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ Vite::asset('resources/img/logo_ecommerce_bianco.png') }}"
                        class="d-inline-block align-top" alt="logo-site">
                </a>
            </div>
            <div id="hamburger-menu" class="d-lg-none">
                <i class="fa-solid fa-bars text-white"></i>
            </div>
            <div class="web-site-links col-12 ">
                <ul class="d-lg-flex aling-items-center fs-5">

                    <li class="px-3 "> <a href="{{ route('products.index') }}"> Shop</a></li>
                    <li class="px-3"> <a href="{{ route('team') }}">Il nostro Team </a> </li>
                    @if (Auth::check() && Auth::user()->role == 'admin')
                        <li class="px-3"> <a href="{{ route('products.create') }}">Crea un prodotto </a></li>
                    @endif

                </ul>
            </div>


            <div class="login-links">

                @if (Auth::check())
                    <span class="text-white fs-5 d-none d-lg-inline me-1">Benvenuto</span>
                    <a class="pe-3" href="{{ route('users.show', Auth::user()->id) }}">
                        <i class="fa-solid fa-user d-lg-none"></i> <span class="d-none d-lg-inline text-capitalize fs-5">{{Auth::user()->name}}</span>
                    </a> 
                    <a href="{{ route('logout') }}"> 
                        <button class="my-btn">Logout</button>
                    </a>
                @else
                    <a href="{{ route('loginform') }}">
                        <button class="my-btn ms-2">Login</button>
                    </a>
                    <a href="{{ route('users.create') }}">
                        <button class="my-btn ms-4">Registrati</button>
                    </a>
                @endif
            </div>
        </div>
    </nav>

</header>
@if (Auth::check())
<script>
    let menu = document.getElementById('hamburger-menu');
    let navbar = document.getElementById('navbar');

    menu.addEventListener('click',function(){
        if(navbar.classList.contains('my-height')){
            navbar.classList.remove('my-height')
        }else{
            navbar.classList.add('my-height')
        }
    })
</script>
@else
<script>
    let menu = document.getElementById('hamburger-menu');
    let navbar = document.getElementById('navbar');

    menu.addEventListener('click',function(){
        if(navbar.classList.contains('my-height-small')){
            navbar.classList.remove('my-height-small')
        }else{
            navbar.classList.add('my-height-small')
        }
    })
</script>
@endif
