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
                    <h3 class="text-capitalize m-0">{{ $product->title }}</h3>
                    @if($product->available)
                        <span class="available">Disponibile</span>
                    @else
                        <span class="not-available">Non Disponibile</span>
                    @endif
                    <h5 class="mt-3 ">Prezzo: <span>{{ $product->price }}</span> €</h5>
                    <div>

                        <div class="my-5">
                            <h4>Descrizione del prodotto</h4>
                            <p>{{ $product->description }}</p>
                        </div>


                        <div class="d-flex align-items-center">
                            <button class="my-btn me-5"><i class="fa-solid fa-plus me-2"></i><i class="fa-solid fa-cart-shopping"></i></button>
                            @if (Auth::check() && Auth::user()->role == 'admin')
                                <a href="{{route('products.edit',$product->id)}}"><button class="my-btn me-5">Modifica</button></a>
                                <form action="{{route('products.destroy',$product->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="my-btn" type="submit">Elimina</button>
                                </form>
                            @endif
                        </div>
                    </div>
                    {{-- btn modifica .... aggiungere poi solo se admin? --}}
                </div>
            </div>
        </div>
    </section>
@endsection
