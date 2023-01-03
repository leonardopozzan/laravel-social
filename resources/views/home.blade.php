@extends('layout.app')
@section('content')
<section class="section-main outer-container-cards">
    <div class="cards-container">
        <button class="left-btn" onclick="scrollLft()">
            <i class="fa-solid fa-angle-left" ></i>
        </button>
        <div id="box" class="d-flex">
             @foreach ($products as $product)
                <div class="card col-3 w-50 me-3" style="width: 18rem;">
                    {{-- <img src={{$product->image}} class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <p class="card-text">price: {{$product->price}} £</p>
                    <p class="">condizioni: {{$product->status}}</p>

                    </div>
                </div>
            @endforeach 
        </div>
        <button class="right-btn" onclick="scrollRgt()">
            <i class="fa-solid fa-angle-right"></i>
        </button>
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