@extends('layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="card shadow mb-4 ">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-9 col-xl-6">
                    <h4 class="m-0 font-weight-bold">{{ $pageTitle }}</h4>
                </div>
                <div class="col-lg-3 col-xl-6">
                    <ul class="list-inline  float-end">
                        <li class="list-inline-item">
                            <a href="{{ route('product.create')}}" class="btn btn-primary">
                                <i class="bi bi-plus-circle me-1"></i> Tambah Data
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
                <div class="table-responsive border p-3 rounded-">
                    <table class="table table-bordered table-striped table-hover mb-0 bg-white datatable" id="employeeTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td><img src="{{ asset('storage/menu/' . $product->encrypted_image) }}" alt="Product Image" width="100" height="80"></td>
                                    <td>{{ $product->name_product }}</td>
                                    <td>Rp. {{ $product->price }}</td>
                                    <td>{{ $product->type->nama_tipe }}</td>
                                    <td>@include('admin.product.actions')</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script type="module">
        $(document).ready(function() {
            $('#employeeTable').DataTable();
        });
    </script>
@endpush