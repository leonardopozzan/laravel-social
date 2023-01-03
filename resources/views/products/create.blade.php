@extends('layout.app')
@section('content')
    <div class="container">
        {{-- title price description status available --}}
        <h1>Aggiungi un prodotto </h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div>
                <label for="title">nome del prodotto</label>
                <input type="text" id="title" name="title" required maxlength="98">

            </div>
            <div>
                <label for="price">prezzo prodotto </label>
                <input type="number" step="0.01" id="price" name="price" required max="99999">

            </div>
            <div>
                <label for="description">descrizione prodotto</label>
                <textarea name="description" id="description" rows="3">Descrizione...</textarea>


            </div>
            <div>
                <label for="status">status prodotto </label>
                <select name="status" id="status" required>
                    <option value="nuovo" selected>nuovo</option>
                    <option value="usato come nuovo">usato come nuove</option>
                    <option value="usato buone condizioni">usato buone condizioni</option>
                </select>
            </div>
            <div>
                <label for="available">disponibilita</label>
                <select name="available" id="available" required>
                    <option value="1" selected>Si</option>
                    <option value="0">No</option>
                </select>
            </div>
        </form>

    </div>
@endsection
