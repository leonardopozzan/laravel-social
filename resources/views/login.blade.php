@extends('layout.app')

@section('content')
@isset($error)
    {{$error}}
@endisset
<form action="{{route('auth')}}" method="post">
    @csrf
    <label for="email">email</label>
    <input type="text" name="email">
    <label for="password">password</label>
    <input type="text" name="password">
    <button type="submit">Invia</button>
</form>
@endsection