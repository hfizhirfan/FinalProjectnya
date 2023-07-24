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
                            <label for="name-categpry" class="form-label">Kode Kategori</label>
                            <h5>{{ $category->kode_tipe }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="name-categpry" class="form-label">Nama Kategori</label>
                            <h5>{{ $category->nama_tipe }}</h5>
                        </div>
                    </div>
                    <div class="row m-3 col-md-4">
                        <div class="col-md-12 d-grid">
                            <a href="{{ route('kategori.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
