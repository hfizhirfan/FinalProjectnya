@extends('layouts.app')
@section('content')\
<div class="container-sm mt-5">
    <form action="{{ route('order.store') }}" method="POST" >
        @csrf
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-6">
                <div class="mb-3 text-center">
                    <i class="bi bi-wallet2 fs-1"></i>
                    <h4>Pembayaran</h4>
                </div>
                <hr>
                <input type="hidden" name="dataid" value="{{$id}}">
                <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Menu</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Harga</th>
                      </tr>
                    </thead>

                    <tbody>
                            <tr>
                                <td>1</td>
                                <td>{{$products->name_product}}</td>
                                <td><input type="number" name="qty" id="qty" min="1" value="1" onchange="updateTotal()"></td>
                                <td>Rp. {{$products->price}}</td>
                            </tr>
                    </tbody>
                    <thead>
                        <tr>
                          <th>Total</th>
                          <th></th>
                          <th></th>
                          <th>Rp. <span id="totalPrice">{{ $products->price }}</span></th>
                        </tr>

                      </thead>
                  </table>
                  <br>

                    {{-- <input type="text" id="dataid" value="{{$id}}"> --}}
                    <div class="form-group">
                      <label for="table_number"><h6>Masukkan Nomer Meja:</h6></label>
                      <input type="number" class="form-control form-control-sm" name="table_number" id="table_number">
                    </div>
                    <br>
                    <div class="form-group">
                      <label for="customer_name"><h6>Atas Nama:</h6></label>
                      <input type="text" class="form-control form-control-sm" name="customer_name" id="customer_name">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('home') }}" class="btn btn-outline-danger btn-lg mt-3"><i class="bi bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-outline-success btn-lg mt-3">Proceed</button>
                        </div>
                    </div>

                <hr>

            </div>
        </div>
    </form>
</div>
<br><br><br><br><br><br>
<script>
    function updateTotal() {
        // Ambil nilai harga produk dari Blade template (nilai dari variabel $products->price)
        const productPrice = parseFloat("{{ $products->price }}");

        // Ambil nilai jumlah pembelian dari input
        const quantity = parseFloat(document.getElementById("qty").value);

        // Hitung total harga
        const totalPrice = productPrice * quantity;

        // Perbarui tampilan total harga
        document.getElementById("totalPrice").innerText = totalPrice; // Format menjadi dua angka di belakang koma
    }
</script>
@endsection

{{-- @push('scripts')
    @if(session('timer'))
        <script>
            setTimeout(function() {
                swal.close();
            }, {{ session('timer') }});
        </script>
    @endif
@endpush --}}
