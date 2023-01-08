@extends('layout.app')
@section('content')
    <section id="show-page" class="container m-auto py-5">
        <div class="my-5 d-flex bg-show ">

            {{-- descrizione --}}
            {{-- <div class="col-3 d-flex justify-content-center align-items-center p-4">
                <div>
                    <h4>Descrizione del prodotto</h4>
                    <p>{{ $product->description }}</p>
                </div>
            </div> --}}


            {{-- img prodotto --}}
            <div class="col-6 me-3 me-sm-3 p-4">
                <div class="mb-3 ">
                    <img src="https://picsum.photos/id/{{ $product->id + 10 }}/1920/1080" alt="{{ $product->title }}">

                </div>
                <div class="m-3 d-lg-none">
                    <h4>Descrizione del prodotto</h4>
                    <p>{{ $product->description }}</p>
                </div>
            </div>
            {{-- titolo, prezzo, aggiungi al carrello, btn modifica --}}
            <div class="col-6 d-flex justify-content-center align-items-center p-4">
                <div class="mb-5">
                    {{-- fare il font diverso per il titolo  --}}
                    <h3 class="text-capitalize m-0">{{ $product->title }}</h3>
                    @if ($product->available)
                        <span class="available">Disponibile</span>
                    @else
                        <span class="not-available">Non Disponibile</span>
                    @endif
                    <h5 class="mt-3 ">Prezzo: <span>{{ $product->price }}</span> €</h5>
                    <div>

                        <div class="my-5 d-sm-none  d-none d-lg-block">
                            <h4>Descrizione del prodotto</h4>
                            <p>{{ $product->description }}</p>
                        </div>


                        <div class="d-flex flex-column flex-md-row align-items-center">
                            <button class="my-btn  my-3  me-md-3"><i class="fa-solid fa-cart-shopping"></i></button>
                            @if (Auth::check() && Auth::user()->role == 'admin')
                                <a href="{{ route('products.edit', $product->id) }}"><button
                                        class="my-btn  my-3 mx-md-3 ">Modifica</button></a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="my-btn my-3 mx-md-3" type="submit">Elimina</button>
                                </form>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
