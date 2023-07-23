<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }} | Rumah Rasa Nusantara</title>
    <link rel="icon" href="{{ Vite::asset('resources/images/logokecil.png') }}">
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #CC040C;">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1">
                <img class="img-fluid" src="{{ Vite::asset('resources/images/logonya.png') }}" alt="main logo">
            </a>

          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-lg-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap ms-auto">
                <li class="nav-item col-2 col-md-auto me-2 me-md-4"><a href="{{ route('home') }}" class="nav-link navbar-text fs-5">Home</a></li>
                <li class="nav-item col-2 col-md-auto me-2 me-md-4"><a href="{{ route('menu.index') }}" class="nav-link active navbar-text fs-5">Menu</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('cart') }}" class="nav-link navbar-text fs-5">Add to cart</a></li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container" style="display: flex; justify-content: center;">
        <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;">All Menu</button>
        <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;" onclick="redirectToCategory(1)">Mie</button>
        <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;">Sayur</button>
        <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;">Ayam</button>
        <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;">Ikan</button>
        <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;">Daging</button>
        <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;">Nasi</button>
        <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;">Soto</button>
        <button type="button" class="btn" style="margin:10px; background-color: #CC040C; color: white;">Puding</button>
    </div>
    <script>
        function redirectToCategory(type_id) {
            // Ganti {type_id} dengan ID kategori yang sesuai untuk masing-masing tombol
            window.location.href = '/products/' + type_id;
        }
    </script>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12">
                <div class="dropdown">

                    <button id="dLabel" type="button" class="btn btn-primary" data-bs-toggle="dropdown">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge bg-danger">{{ count((array) session('cart')) }}</span>
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dLabel">
                        <div class="row total-header-section">
                            @php $total = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach
                            <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                <p>Total: <span class="text-success">Rp. {{ $total }}</span></p>
                            </div>
                        </div>
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                <div class="row cart-detail">
                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                        <img src="{{ asset('resources/images/menu') }}/{{ $details['image'] }}" />
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                        <p>{{ $details['name'] }}</p>
                                        <span class="price text-success"> Rp. {{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <br/>
    <div class="container">

        @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    @yield('scripts')


    <div class="container">
        <div class="row mt-3">
            @foreach ($products as $product)
            <div class="col-md-3 col-sm-6 mb-5">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ Vite::asset('resources/images/menu/' . $product->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">{{ $product->name_product }}</h5>
                            <label class="card-text harga">Rp. {{ $product->price }}</label><br><br>
                            <a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-primary btn-sm">Tambah</a>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="bg-light py-5" id="footer">
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-lg-3 mb-5">
                    <a href="" class="logo text-decoration-none">
                        <div class="d-flex align-items-center">
                            <img src="{{ Vite::asset('resources/images/logonya hitam.png') }}" alt="" class="img-fluid">
                        </div>
                    </a>
                    <div class="mt-4 text-muted">
                        <small>Designed by Team 6</small>
                    </div>
                    <div class="mt-4 text-muted">
                        <small>© 2023 Rumah Rasa Nusantara.</small>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="text-end">
                        <div class="d-flex flex-column align-items-end">
                            <a href="" class="text-muted" style="text-decoration: none;">
                                <i class="bi bi-instagram"></i>&nbsp; rumahrasanusantara
                            </a>
                            <a href="#" class="text-muted" style="text-decoration: none;">
                                <i class="bi bi-tiktok"></i>&nbsp; rumahrasanusantara
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
