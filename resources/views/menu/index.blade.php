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
