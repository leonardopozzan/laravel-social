@extends('layout.app')
@section('content')
    <div class="container edit">
        <div class="p-5 ">
            <div class="my-5 bg-edit p-5">
                {{-- title price description status available --}}
                <h1 class="text-center mb-5">Aggiorna il prodotto </h1>
                <form action={{ route('products.update', $product->id)}} method="POST" >
                    @csrf
                    @method("PUT")
                    <div class="d-flex">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="title" class="d-block mb-3">Nome del prodotto</label>
                                <input type="text" class="form-controll @error('title') is-invalid @enderror"
                                    id="title" name="title" maxlength="98" value="{{old('title', $product->title)}}">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="price" class="d-block mb-2">Prezzo del prodotto </label>
                                <input type="number" class="form-controll @error('price') is-invalid @enderror"
                                    step="0.01" id="price" name="price" max="99999" min="0" value="{{old('price', $product->price)}}">
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="description" class="form-label d-block mb-2">Descrizione del prodotto</label>
                                <textarea name="description" id="description" rows="3" placeholder="scrivi la descrizione del prodotto "
                                    class="form-control w-75" value="{{old('description', $product->description)}}"></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="status" class="d-block mb-2">Status del prodotto </label>
                                <select name="status" id="status" class="form-controll @error('title') is-invalid @enderror">
                                    <option value="nuovo" {{old('status', $product->status == 'nuovo' ? 'selected' : '') }} selected>Nuovo</option>
                                    <option value="usato come nuovo"{{ old('status', $product->status == 'usato come nuovo' ? 'selected' : '') }}>Usato come nuovo</option>
                                    <option value="usato buone condizioni"{{ old('status', $product->status == 'usato buone condizioni' ? 'selected' : '') }}>Usato buone condizioni</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="available" class="d-block mb-2">Disponibilità</label>
                                <select name="available" id="available"
                                    class="form-controll @error('title') is-invalid @enderror">
                                    <option value="1"{{ old('available', $product->available == '1' ? 'selected' : '') }} selected>Si</option>
                                    <option value="0"{{ old('available', $product->available == '0' ? 'selected' : '') }}>No</option>
                                </select>
                                @error('available')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-5 d-flex flex-column gap-4 justify-content-start">
                                <button class="my-btn me-5 text-uppercase" type="submit">modifica prodotto </button>
                                <button class="my-btn me-5 text-uppercase" type="reset">reset campi </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
