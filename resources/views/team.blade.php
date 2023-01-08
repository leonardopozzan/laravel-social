<?php
$users = config('admin')
?>

@extends('layout.app')

@section('content')
    <div  id="team">
        <section class="container">
            {{-- cards container --}}
            <div class="cards-container">
                @foreach ($users as $user)
                {{-- card --}}
                <div class="card my-4 single-card bg-team">
                    <div class="white-stripe">
                        <span>{{$user['flag']}}</span>
                    </div>
                    {{-- img --}}
                    <div class="pt-4 pb-3 d-flex justify-content-center align-items-center">
                        <img class="img-profile" src="{{$user['image']}}" alt="immagine profilo {{$user['name']}}">
                    </div>
                    {{-- body --}}
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        {{-- person --}}
                        <div class="profile-person">
                            <span class="profile-name ">{{$user['name']}}</span>
                            <span class="profile-qualification ">{{$user['qualification']}}</span>
                            <p class="profile-description">{{$user['description']}}</p>
                        </div>
                        {{-- social --}}
                        <div class="profile-social">
                            <a href="#nogo"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#nogo"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#nogo"><i class="fa-brands fa-telegram"></i></a>
                            <a href="{{$user['github']}}" target="blank"><i class="fa-brands fa-github"></i></a>
                        </div>
                    </div>
                </div>  
                @endforeach
            </div>
        </section>
    </div>
@endsection
