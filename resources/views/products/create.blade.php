@extends('layout.app')
@section('content')
    <div class="container crea">
        <div class="p-5 ">
            <div class="my-5 bg-create p-5">






                {{-- title price description status available --}}
                <h1 class="text-center mb-5">Aggiungi un prodotto </h1>
                <form action="{{ route('products.store') }}" method="POST" class=" ">
                    @csrf
                    <div class="d-flex">


                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="title" class="d-block mb-3">Nome</label>

                                <input type="text" class=" @error('title') is-invalid @enderror"
                                    id="title" name="title" maxlength="98">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror


                            </div>
                            <div class="form-group mb-3">
                                <label for="price" class="d-block mb-2">Prezzo </label>
                                <div class="d-flex">
                                    <input type="number" class=" @error('price') is-invalid @enderror"
                                        step="0.01" id="price" name="price" max="99999" min="0">
                                        <p class="align-self-center m-0 ms-3 fs-3">€</p>
                                </div>
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror


                            </div>
                            <div class="form-group mb-3">
                                <label for="description" class="form-label d-block mb-2">Descrizione</label>
                                <textarea name="description" id="description" rows="3" placeholder="Inserisci una descrizione del prodotto "
                                    class="w-75"></textarea>




                            </div>
                        </div>
                        <div class="col-6">


                            <div class="form-group mb-3">
                                <label for="status" class="d-block mb-2">Status</label>
                                <select name="status" id="status"
                                    class="@error('title') is-invalid @enderror">
                                    <option value="nuovo" selected>Nuovo</option>
                                    <option value="usato come nuovo">Usato come nuove</option>
                                    <option value="usato buone condizioni">usato buone condizioni</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="form-group mb-3">
                                <label for="available" class="d-block mb-2">Disponibilità</label>
                                <select name="available" id="available"
                                    class="@error('title') is-invalid @enderror">
                                    <option value="1" selected>Yep</option>
                                    <option value="0">Nope</option>
                                </select>
                                @error('available')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="mt-5 d-flex flex-column gap-4 justify-content-start">
                                <button class="my-btn me-5 text-uppercase" type="submit">crea prodotto </button>
                                <button class="my-btn me-5 text-uppercase" type="reset">reset campi </button>

                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
