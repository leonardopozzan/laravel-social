<header>
    <!-- Image and text -->
    <nav class="navbar  ">
        <div class="container">


            <div class="img-box-header">

                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ Vite::asset('resources/img/logo_ecommerce_bianco.png') }}"
                        class="d-inline-block align-top" alt="logo-site">
                </a>
            </div>
            <div>
                <ul class="d-flex  list-unstyled">
                    <li class="px-3 "> <a href="{{ route('products.index') }}"> Shop</a></li>
                    <li class="px-3"> <a href="{{ route('team') }}">Il nostro team </a> </li>
                    @if (Auth::check())
                        <li class="my-3"> <a href="{{ route('products.create') }}">crea un prodotto </a></li>
                    @endif


                </ul>
            </div>


            <div>

                @if (Auth::check())
                    Benvenuto <a href="#nogo">{{ Auth::user()->name }}</a> <a href="{{ route('logout') }}"> <button
                            class="my-btn">Logout </button> </a>
                @else
                    <a href="{{ route('login') }}"> <button class="my-btn">
                            Login
                        </button> </a>
                @endif
            </div>
        </div>
    </nav>


</header>
