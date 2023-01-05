@extends('layout.app')
@section('content')

<section id="home" class="section-main outer-container-cards container py-5">
    <div class="cards-container position-relative">
        <button class="left-btn carousel-arrow" onclick="scrollLft()">
            <i class="fa-solid fa-angle-left" ></i>
        </button>
        <div id="box" class="d-flex ">
            @foreach ($products as $product)
                {{-- card --}}
                <div class="card col-6 col-lg-4 col-xl-3 me-3 my-3 single-card" >
                    {{-- card img product --}}
                    <a href="#">
                        <div class="img-product">
                            <img src="https://picsum.photos/id/{{$product->id+10}}/1920/1080" class="card-img-top" alt="...">
                            {{-- <img src="https://picsum.photos/1920/1080?random={{$product->id}}" class="card-img-top" alt="..."> --}}
                            {{-- <img src="https://loremflickr.com/500/200?lock={{$product->id}}" class="card-img-top" alt="..."> --}}
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
                                <p class="pt-3"> <span>Price:</span> {{$product->price}} €</p>
                            </div>
                            <div class="card-status">
                                <p class="pt-3"><span>Condizioni:</span> <br> {{$product->status}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="right-btn carousel-arrow" onclick="scrollRgt()">
            <i class="fa-solid fa-angle-right"></i>
        </button>
    </div>
    <div class="text-center mt-4 pb-4    ">
        <a  href="{{route('products.index')}}" role="button">
            <button class="my-btn">
            Go to...
            </button>
        </a>
    </div>
</section>


@endsection

<script>
    function scrollLft() {
        const element = document.getElementById('box');
        element.scrollBy({
            left: -1232,
            behavior: "smooth",
        })
    }
    function scrollRgt() {
    const element = document.getElementById('box');
    element.scrollBy({
        left: 1232,
        behavior: "smooth",
        });
    }
</script>