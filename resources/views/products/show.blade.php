@extends('layout.app')
@section('content')
    <section id="show-page" class="container m-auto py-5">
        <div class="my-5 d-flex bg-show">
            {{-- descrizione --}}
            <div class="col-3 d-flex justify-content-center align-items-center">
                <div>
                    <h4>Descrizione del prodotto</h4>
                    <p>{{$product->description}}</p>  
                </div>
            </div>
            {{-- img prodotto --}}
            <div class="col-6">
                <div class="">
                    <img src="{{ Vite::asset('resources/img/logo_ecommerce_bianco.png') }}" alt="">
                </div>
            </div>
            {{-- titolo, prezzo, aggiungi al carrello, btn modifica --}}
            <div class="col-3 d-flex justify-content-center align-items-center">
                <div>
                    <h4>{{$product->title}}</h4>
                    <div>
                        <p>Prezzo: <span>{{$product->price}}</span> £</p>
                        <button class="my-btn">aggiungi al carrello</button>
                    </div>
                    {{-- btn modifica .... aggiungere poi solo se admin? --}}
                    @if (Auth::check())
                        <button class="my-btn">Modifica il prodotto</button>
                    @endif
                </div>
            </div>
        </div>
    </section>  
@endsection