<?php  
$ul = config('footer.ul');
$images = config('footer.img');
?>
<footer>

    <div class="d-flex pt-5 pb-5 container">

        <div class="d-flex flex-column justify-content-around flex-md-row w-100 position-relative">
            @foreach ($ul as $links)
                <div class="col-5 col-md-3">
                    <div class="title-links">{{$links['title']}}<i class="fa-solid fa-caret-right arrow"></i></div>
                    <div class="ul-container">
                        <ul class="my-ul-links">
                            @foreach ($links['links'] as $link)
                                <li><a href="#nogo">{{$link}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>

        <div>
            <div class="ps-5 pe-3" id="follow-contenitore">
                <a href=""><h4 class="title">Follow us</h4></a>
                <div id="follow" class="text-center">
                    @foreach ($images as $image)
                    <a href="" class="ps-1"><img src="{{ Vite::asset($image['path']) }}" alt="{{$image['name']}}"></a>
                    @endforeach
                </div>
            </div>
            <div class="pt-3 text-center">
                <a href=""><img src="{{ Vite::asset('resources/img/logo_ecommerce_bianco.png') }}" alt="Logo"></a>
            </div>
        </div>

    </div>

</footer>

<script>
let links = document.getElementsByClassName('ul-container')
let title = document.getElementsByClassName('title-links')
let arrow = document.getElementsByClassName('arrow')

for(let i=0; i<title.length; i++){
    title[i].addEventListener('click',function(){
        for(let j=0; j<links.length; j++){
            if(j==i){
                if(links[j].classList.contains('text-white')){
                    links[j].classList.remove('text-white')
                    links[j].classList.remove('lp-z-index')
                    arrow[j].classList.remove('color-light-blue')
                }else{
                    links[j].classList.add('text-white')
                    links[j].classList.add('lp-z-index')
                    arrow[j].classList.add('color-light-blue')
                }
            }else{
                links[j].classList.remove('text-white')
                links[j].classList.remove('lp-z-index')
                arrow[j].classList.remove('color-light-blue')
            }
        }
    })
}
</script>