@extends('layouts.app')
@section('content')
    <div class="container-fluid px-4">
        <div class="card shadow mb-4 mt-5">
            <div class="card-header d-flex">
                <h6 class="font-weight-bold fs-4 mt-2 text-black col-lg-10 col-sm-6">{{ $pageTitle }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row m-3">
                        <div class="col-md-12 mb-3">
                            <label for="name-product" class="form-label">Nama Menu</label>
                            <h5>{{ $product->name_product }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="price" class="form-label">Harga Menu</label>
                            <h5>Rp. {{ $product->price }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="age" class="form-label">Image </label>
                            @if ($product->image)
                                <h5>{{ $product->image }}</h5>
                                <a href="{{ route('product.downloadFile', ['productId' => $product->id]) }}" class="btn btn-success btn-sm mb-3">
                                    <i class="bi bi-download me-1"></i> Download Image
                                </a>
                            @else
                                <h5>Tidak ada</h5>
                            @endif
                        <div class="col-md-12">
                            <label for="age" class="form-label">Kategori</label>
                            <h5>{{ $product->type->nama_tipe }}</h5>
                        </div>
                    </div>
                    <div class="row col-md-4">
                        <div class="col-md-12 d-grid">
                            <a href="{{ route('product.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
