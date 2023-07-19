<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

@section('halaman')
<div class="container-sm mt-5">
    <form action="{{ route('product.update',['product' => $produts->id]) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-6">
                <div class="mb-3 text-center">
                    <i class="bi bi-image-fill fs-1"></i>
                    <h4>Edit NFT</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name_product" id="name" value="{{ old('name_product',$data->name) }}" placeholder="Masukkan nama menu">
                        @error('name_product')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" id="price" value="{{ old('price',$data->price) }}" placeholder="Masukkan harga">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="image" class="form-label">Image NFT</label>
                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" value="{{ old('image',$data->image) }}">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select name="type" id="type" class="form-select">
                        @php
                            $selected = "";
                            if ($errors->any())
                                $selected = old('type');
                            else
                                $selected = $products->type_id;
                        @endphp
                        @foreach ($types as $type)
                            <option value="{{ $products->id }}" {{ $selected == $products->id ? 'selected' : '' }}>{{ $type->kode_tipe.' - '.$type->nama_tipe }}</option>
                        @endforeach
                        </select>
                        @error('unit')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="{{ Vite::asset('resources/images/menu/'.$data->image) }}" class="card-img-top" alt="...">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('product.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi bi-arrow-left-circle me-2"></i> Cancel</a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi bi-check-circle me-2"></i> Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection