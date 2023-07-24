@extends('layouts.app')
@section('content')
    <div class="container-fluid px-4">
        <div class="card shadow mb-4 mt-5">
            <div class="card-header d-flex">
                <h6 class="font-weight-bold fs-4 mt-2 text-black col-lg-10 col-sm-6">{{ $pageTitle }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" cellspacing="0">
                        <form action="{{ route('kategori.store') }}" method="POST">
                            @csrf
                            <div class="row m-3">
                                <label for="code" class="form-label">Kode Kategori</label>
                                <div class="col-sm-10">
                                    <input class="form-control @error('code') is-invalid @enderror" type="text"
                                        name="code" id="code" value="{{ old('code') }}"
                                        placeholder="Masukkan kode kategori">
                                    @error('code')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row m-3">
                                <label for="name" class="form-label">Nama Kategori</label>
                                <div class="col-sm-10">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text"
                                        name="name" id="name" value="{{ old('name') }}"
                                        placeholder="Masukkan nama kategori">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row m-3 pt-4 col-md-4">
                                <div class="col-md-6 d-grid">
                                    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                                <div class="col-md-6 d-grid">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
