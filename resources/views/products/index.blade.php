@extends('layout.app')
@section('content')
    <div id="index">
        <h1>elenco prodotti</h1>
        <div class="container d-flex">
            <form class="" action="{{route('products.index')}}" method="GET">
                <select name="search" id="search">
                    <option value="">Vedi tutti i prodotti</option>
                    <option value="nuovo">Prodotti nuovi</option>
                    <option value="usato buone condizioni">Prodotti in buone condizioni</option>
                    <option value="usato come nuovo">Prodotti come nuovi</option>
                </select>
                <button type="submit" class="my-btn ms-3">Cerca</button>
            </form>
        </div>
        <section class="container">
            <div class="cards-container">
                @foreach ($products as $product)
                {{-- card --}}
                    <div class="card my-3 single-card" >
                        {{-- card img product --}}
                        <a href="#">
                            <div class="img-product">
                            {{-- <img src={{$product->image}} class="card-img-top" alt="..."> --}}
                            </div>
                        </a>
                        {{-- card body text --}}
                        <div class="card-body">
                            <div class="card-text-overview">
                                <div class="p-3">
                                    <h3 class="">{{$product->title}}</h3>
                                    <p class="">{{$product->description}}</p>
                                </div>
                            </div>
                            <div class="card-details">
                                <div class="card-price ">
                                    <p class="pt-3"> <span>Price:</span> {{$product->price}} £</p>
                                </div>
                                <div class="card-status">
                                    <p class="pt-3"><span>Condizioni:</span> <br> {{$product->status}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach 
            </div>  
        </section>
    </div>
    
@endsection