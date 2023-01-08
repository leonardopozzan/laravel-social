@extends('layout.app')

@section('content')
    @isset($registered)
        <div class="text-center text-white pt-5">
            Registrazione avenuta con successo
        </div>
    @endisset
    <div class="d-flex align-items-center justify-content-center">

        <form action="{{ route('auth') }}" method="post" id="login-form" class="bg-create">
            @csrf
            <div class="field">
                <label for="email">Email</label>
                <input type="text" name="email">
            </div>
            <div class="field">
                <label for="password">Password</label>
                <input type="text" name="password">
                @isset($error)
                    <div>Le credenziali sono errate</div>
                @endisset
            </div>
            <div class="text-center">
                <button type="submit" class="my-btn">Login</button>
            </div>
        </form>
    </div>
@endsection
