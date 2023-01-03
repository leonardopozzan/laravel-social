@extends('layout.app')
@section('content')

<section id="home" class="section-main outer-container-cards container">
    <div class="cards-container position-relative">
        <button class="left-btn carousel-arrow" onclick="scrollLft()">
            <i class="fa-solid fa-angle-left" ></i>
        </button>
        
        <div id="box" class="d-flex ">
            
             @foreach ($products as $product)
                {{-- card --}}
                <div class="card col-3 w-50 me-3 my-3 single-card" >
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