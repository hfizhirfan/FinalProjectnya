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
                <li class="nav-item col-2 col-md-auto me-2 me-md-4"><a href="{{ route('home') }}" class="nav-link active navbar-text fs-5">Home</a></li>
                <li class="nav-item col-2 col-md-auto me-2 me-md-4"><a href="{{ route('menu.index') }}" class="nav-link navbar-text fs-5">Menu</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('cart') }}" class="nav-link navbar-text fs-5">Add to cart</a></li>
            </ul>
          </div>
        </div>
    </nav>


    <div class="container">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ Vite::asset('resources/images/dua.png') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ Vite::asset('resources/images/satu.png') }}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <br><br>

    <div class="container py-5 px-4">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center">
                <div>
                    <h3 class="mb-3 fw-bold">Best Seller</h3>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ Vite::asset('resources/images/dalam/dua.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text fw-bold">Steak</h5>
                        <div class="container">
                            <span class="text-warning"><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ Vite::asset('resources/images/dalam/dua.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text fw-bold">Steak</h5>
                        <div class="container">
                            <span class="text-warning"><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ Vite::asset('resources/images/dalam/dua.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text fw-bold">Steak</h5>
                        <div class="container">
                            <span class="text-warning"><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ Vite::asset('resources/images/dalam/dua.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text fw-bold">Steak</h5>
                        <div class="container">
                            <span class="text-warning"><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="about">
        <!-- Container -->
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ Vite::asset('resources/images/chef.png') }}" alt="Bootstrap Icons">
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div>
                        <h2 class="display-6 mb-3">Menurut Saya</h2>
                        <p class="fs-5">Lorem ipsum dolor sit amet, consectetur  adipiscing elit, sed
                            do eiusmod tempor  incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis  nostrud exercitation
                            ullamco laboris nisi  ut aliquip ex ea commodo consequat.
                            Duis aute  irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in  culpa qui
                            officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
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
