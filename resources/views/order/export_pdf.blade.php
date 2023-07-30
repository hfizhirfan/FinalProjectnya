<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>struck</title>
    <style>
        html {
            font-size: 12px;
        }
        body {
            font-family: 'Poppins', sans-serif;
        }

        .table {
            border-collapse: collapse !important;
            width: 100%;
        }

        .table-bordered th,
        .table-bordered td {
            padding: 0.5rem;
            border: none;
        }
        .center-text {
            text-align: center;
        }
        .center-text h1 {
            margin-bottom: 40px; /* Sesuaikan jarak yang diinginkan */
        }
        .center-text p {
            margin-top: 60px; /* Sesuaikan jarak yang diinginkan */
        }
        .table-bordered td.bold-text {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="center-text">
        <h1>Nota Pembelian</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Pemesan</th>
                    <th>Menu</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td align="center">{{$order->id}}</td>
                        <td align="center">{{$order->nama}}</td>
                        <td align="center">{{$order->product->name_product}}</td>
                        <td align="center">{{$order->qty}}</td>
                        <td align="center">{{$order->product->price}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="bold-text" align="center">Total</td>
                        <td class="bold-text" align="center">{{$order->total}}</td>
                    </tr>
            </tbody>
        </table>
        <p>Terimakasih atas kunjungannya :)</p>
        </div>
</body>
</html>
