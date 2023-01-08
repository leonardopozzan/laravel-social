@extends('layout.app')

@section('content')

    @isset($registered)
        <div class="text-center text-white pt-5">
            Registrazione avenuta con successo
        </div>
    @endisset
    
<div class="d-flex align-items-center justify-content-center">
    <form action="{{route('auth')}}" method="post" id="login-form" class="bg-create">
        @csrf
        <div class="field">
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div class="field">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        @isset($error)
            <div class="mb-3 text-center">Le credenziali sono errate</div>
        @endisset
        <div class="text-center">
            <button type="submit" class="my-btn">Invia</button>
        </div>
    </form>
</div>
@endsection

