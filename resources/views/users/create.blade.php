@extends('layout.app')
@section('content')
    <div class="container crea">
        <div class="p-5">
            <div class="my-6 bg-create p-5">
                <h1>CREA UN ACCOUNT </h1>
                <form action="{{ route('users.store') }}" method="POST" class="">
                    @csrf
                    {{-- name email password --}}
                    <label for="name">Nome</label>
                    <input type="text" name="name">
                    <label for="email">Email</label>
                    <input type="text" name="email">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="">

                    <button>Registrati</button>
                </form>
            </div>
        </div>
    </div>
@endsection
