@extends('layout.app')
@section('content')
    <?php
    $date = $user->subscribed_at;
    $newdata = date('d/M/Y', strtotime($date));
    ?>
    <section class="container m-auto py-5">
        <div class="my-5 bg-create p-5">

            <div>
                <h3>nome:</h3>
                <h4>{{ $user->name }}</h4>
            </div>
            <div>
                <h3>email:</h3>
                <h4>{{ $user->email }}</h4>
            </div>
            <div>
                <h3>registrato da :</h3>
                <h4>{{ $newdata }}</h4>
            </div>



        </div>
        </div>
    @endsection
