@extends('layout.app')
@section('content')
    <div class="crea d-flex align-items-center justify-content-center">
        <div class="p-5">
            <div class="my-6 bg-create p-5">
                <h1>CREA UN ACCOUNT </h1>
                <form action="{{ route('users.store') }}" method="POST" id="register-form">
                    @csrf
                    {{-- name email password --}}
                    <div class="field">
                        <label for="name">Nome</label>
                        <input type="text" name="name">
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <input type="text" name="email">
                    </div>
                    <div class="field">
                        <label for="password">Password</label>
                        <input type="password" name="password">
                    </div>
                    <button type="submit" class="my-btn">Registrati</button>
                </form>
            </div>
        </div>
    </div>
@endsection
