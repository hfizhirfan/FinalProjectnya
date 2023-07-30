@extends('layouts.app')
@section('content')
{{-- <div class="container" style="display: flex; justify-content: center;">
    <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;">All Menu</button>
    <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;">Mie</button>
    <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;">Sayur</button>
    <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;">Ayam</button>
    <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;">Ikan</button>
    <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;">Daging</button>
    <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;">Nasi</button>
    <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;">Soto</button>
    <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;">Puding</button>
</div> --}}



<div class="container">
    <div class="row mt-3">
        @foreach ($products as $product)
        <div class="col-md-3 col-sm-6 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ Vite::asset('resources/images/menu/' . $product->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{ $product->name_product }}</h5>
                        <label class="card-text harga">Rp. {{ $product->price }}</label><br><br>
                        <a href="{{ route('order.create',['id'=>$product->id]) }}" class="btn btn-primary btn-sm">Tambah</a>
                    </div>
                </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
