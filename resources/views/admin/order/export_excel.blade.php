<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pemesan</th>
            <th>Menu</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Nomor Meja</th>
            <th>Tanggal Pesanan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $order->nama }}</td>
                <td>{{ $order->product->name_product }}</td>
                <td>{{ $order->qty }}</td>
                <td>Rp. {{ $order->total }}</td>
                <td>{{ $order->no_meja }}</td>
                <td>{{ $order->created_at->format('d-m-Y') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>