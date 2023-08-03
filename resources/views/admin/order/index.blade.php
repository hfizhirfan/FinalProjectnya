@extends('admin.layouts.app')

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
                            <a href=" {{ route('transaksi.exportExcel')}}" class="btn btn-success">
                                <i class="bi bi-download me-1"></i> Download Excel
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
                <div class="table-responsive border p-3 rounded-">
                    <table class="table table-bordered table-striped table-hover mb-0 bg-white datatable" id="orderTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pemesan</th>
                                <th>Menu</th>
                                <th>Jumlah</th>
                                <th>Total Harga</th>
                                <th>Nomor Meja</th>
                                <th>Tanggal Pesanan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $index => $order)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $order->nama }}</td>
                                    <td>{{ $order->product->name_product }}</td>
                                    <td>{{ $order->qty }}</td>
                                    <td>Rp. {{ $order->total }}</td>
                                    <td>{{ $order->no_meja }}</td>
                                    <td>{{ $order->created_at->format('d-m-Y') }}</td>
                                    <td>@include('admin.order.actions')</td>
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
            $('#orderTable').DataTable();
        });
    </script>
@endpush