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
            <div class="col-6 me-5">
                <div class="p-4">
                    <img src="https://picsum.photos/id/{{ $product->id + 10 }}/1920/1080" alt="{{ $product->title }}">

                </div>
            </div>
            {{-- titolo, prezzo, aggiungi al carrello, btn modifica --}}
            <div class="col-4 d-flex justify-content-center align-items-center">
                <div class="mb-5">
                    {{-- fare il font diverso per il titolo  --}}
                    <h3 class="text-capitalize mb-3 ">{{ $product->title }}</h3>
                    <h5>Prezzo: <span>{{ $product->price }}</span> €</h5>
                    <div>

                        <div class="my-5">
                            <h4>Descrizione del prodotto</h4>
                            <p>{{ $product->description }}</p>
                        </div>


                        <button class="my-btn text-end me-5">Aggiungi al carrello</button>
                        @if (Auth::check() && Auth::user()->role == 'admin')
                            <button class="my-btn">Modifica il prodotto</button>
                        @endif
                    </div>
                    {{-- btn modifica .... aggiungere poi solo se admin? --}}
                </div>
            </div>
        </div>
    </section>
@endsection
