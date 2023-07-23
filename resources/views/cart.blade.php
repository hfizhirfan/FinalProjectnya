<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Rumah Rasa Nusantara</title>
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
                <li class="nav-item col-2 col-md-auto me-2 me-md-4"><a href="{{ route('menu.index') }}" class="nav-link navbar-text fs-5">Menu</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('cart') }}" class="nav-link active navbar-text fs-5">Add to cart</a></li>
            </ul>
          </div>
        </div>
    </nav>
@section('content')
<div class="container">
    <div class="card mb-3" style="max-width: 1000px;">
        <div class="row g-0">
            <div class="col-md-4" style="height: 200px;">
                <img src="{{ Vite::asset('resources/images/menu/Ayam Betutu D.jpg') }}" class="img-fluid rounded-start" alt="..." style="max-width: 100%; max-height: 100%;">
            </div>
            <div class="col-md-8">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h5 class="card-title font-weight-bold">Ayam Betutu</h5>
                    <a href="#" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-trash3-fill"></i></a>
                </div><br><br>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <input type="number" id="quantity" name="quantity" min="1" value="1">
                    <strong>Harga</strong>
                  </div>
            </div>
        </div>
    </div>
</div>


</body>
