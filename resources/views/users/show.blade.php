@extends('layout.app')
@section('content')
    <?php
    $date = $user->subscribed_at;
    $newdata = date('d/M/Y', strtotime($date));
    ?>
    <section class="container m-auto py-5">
        <div class="my-5 bg-create p-5">

            <div>
                <span class="fs-4">Nome:</span><span class="fs-4 ms-2 text-capitalize">{{ $user->name }}</span>
            </div>
            <div>
                <span class="fs-4">Email:</span><span class="fs-4 ms-2">{{ $user->email }}</span>
            </div>
            <div>
                <span class="fs-4">Registrato dal:</span><span class="fs-4 ms-2 text-capitalize">{{ $newdata }}</span>
            </div>
        </div>
    </section>
    @endsection
