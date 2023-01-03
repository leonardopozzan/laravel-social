<header>
    <!-- Image and text -->
    <nav class="navbar  ">
        <div class="container d-flex align-items-center">


            <div class="img-box-header">

                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ Vite::asset('resources/img/logo_ecommerce_bianco.png') }}"
                        class="d-inline-block align-top" alt="logo-site">
                </a>
            </div>
            <div class="">
                <ul class="d-flex aling-items-center  fs-5">
                    <li class="px-3 "> <a href="{{ route('products.index') }}"> Shop</a></li>
                    <li class="px-3"> <a href="{{ route('team') }}">Il nostro Team </a> </li>
                    @if (Auth::check())
                        <li class="px-3"> <a href="{{ route('products.create') }}">Crea un prodotto </a></li>
                    @endif


                </ul>
            </div>


            <div>

                @if (Auth::check())
                    <span class="text-white fs-5  px-3">Benvenuto </span> <a class="fs-5 text-capitalize pe-3"
                        href="{{ route('profile') }}">
                        {{ Auth::user()->name }}</a> <a href="{{ route('logout') }}"> <button class="my-btn">Logout
                        </button> </a>
                @else
                    <a href="{{ route('loginform') }}"> <button class="my-btn fs-5 ms-2">
                            Login
                        </button> </a>
                @endif
            </div>
        </div>
    </nav>

</header>
