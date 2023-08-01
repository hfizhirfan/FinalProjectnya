@extends('layouts.app')
@section('content')
<br><br>
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
@endsection
