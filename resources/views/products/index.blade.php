@extends('layout.app')
<?php
$search = '';
if (isset($_GET['search'])) {
    $search = $_GET['search'];
}
?>
@section('content')
    <div id="index">

        <div class="container d-flex">
            <form action="{{ route('products.index') }}" method="GET">
                <select name="search" id="search" class="form-controll">
                    <option value="" {{ $search == '' ? 'selected' : '' }}>Vedi tutti i prodotti</option>
                    <option value="nuovo" {{ $search == 'nuovo' ? 'selected' : '' }}>Prodotti nuovi</option>
                    <option value="usato buone condizioni" {{ $search == 'usato buone condizioni' ? 'selected' : '' }}>
                        Prodotti in buone condizioni</option>
                    <option value="usato come nuovo" {{ $search == 'usato come nuovo' ? 'selected' : '' }}>Prodotti come
                        nuovi</option>
                </select>
                <button type="submit" class="my-btn ms-3">Cerca</button>
            </form>
        </div>
        <section class="container">
            <div class="cards-container">
                @foreach ($products as $product)
                    {{-- card --}}
                    <div class="card my-3 single-card ">
                        {{-- card img product --}}
                        <a href="{{ route('products.show', $product->id) }}">
                            <div class="img-product">
                                <img src="https://picsum.photos/id/{{ $product->id + 10 }}/1920/1080"
                                    alt="{{ $product->title }}">

                            </div>
                        </a>
                        {{-- card body text --}}
                        <div class="card-body">
                            <div class="card-text-overview">
                                <div class="p-3">
                                    <h3 class="">{{ $product->title }}</h3>
                                    <p class="">{{ $product->description }}</p>
                                </div>
                            </div>
                            <div class="card-details">
                                <div class="card-price ">
                                    <p class="pt-3"> <span>Prezzo:</span> {{ $product->price }} €</p>
                                </div>
                                <div class="card-status">
                                    <p class="pt-3"><span>Condizioni:</span> <br> {{ $product->status }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
