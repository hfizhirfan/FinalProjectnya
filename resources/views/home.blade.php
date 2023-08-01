@extends('layouts.app')
@section('content')
<br><br>
<div class="container">
    <div id="carouselExample" class="carousel slide mb-4">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ Vite::asset('resources/images/1.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ Vite::asset('resources/images/2.png') }}" class="d-block w-100" alt="...">
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


<br><br><br><br><br><br><br><br>

<div class="container py-5 px-4 mb-4">
    <div class="row">
        <div class="col-lg-6 d-flex align-items-center">
            <div>
                <h3 class="mb-3 fw-bold">Best Seller</h3>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <img src="{{ Vite::asset('resources/images/dalam/Soto Ayam.jpg') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-text fw-bold">Soto Ayam</h5>
                    <div class="container">
                        <span class="text-warning"><i class="fas fa-star"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <img src="{{ Vite::asset('resources/images/dalam/Rendang Daging.jpg') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-text fw-bold">Rendang Daging</h5>
                    <div class="container">
                        <span class="text-warning"><i class="fas fa-star"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <img src="{{ Vite::asset('resources/images/dalam/Nasi Goreng.jpg') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-text fw-bold">Nasi Goreng</h5>
                    <div class="container">
                        <span class="text-warning"><i class="fas fa-star"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <img src="{{ Vite::asset('resources/images/dalam/Nasi Kebuli.jpg') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-text fw-bold">Nasi Kebuli</h5>
                    <div class="container">
                        <span class="text-warning"><i class="fas fa-star"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<br><br><br><br><br><br><br><br>
<div id="about">
    <!-- Container -->
    <div class="container py-5 px-4 mb-4">
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ Vite::asset('resources/images/about.png') }}" alt="Bootstrap Icons">
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <div>
                    <h2 class="display-6 mb-3 fw-bold">About us</h2>
                    <p class="fs-5">Restoran "Rumah Rasa Nusantara (RRN)" adalah tempat makan yang menawarkan 
                        beragam hidangan kuliner Indonesia yang autentik dan menggugah selera.
                        <br><br>
                        Dengan suasana yang hangat dan ramah, Rumah Rasa Nusantara (RRN) adalah 
                        destinasi kuliner yang sempurna untuk menjelajahi kekayaan cita rasa Nusantara
                         dalam satu tempat.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<br><br><br><br><br><br><br><br>
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-12 intro-text text-center mt-4"> <!-- Tambahkan kelas "text-center" untuk teks berada di tengah -->
                <h1>Our Team Members</h1>
                <p>
                    Best Team 2022
                </p>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
                <div class="team-member px-4 py-5 border shadow-on-hover text-center d-flex flex-column">
                    <img src="{{ Vite::asset('resources/images/Team/DSC_6209.jpg') }}" alt="" class="img-fluid rounded-circle w-50 mx-auto mb-4">
                    <div class="team-member-content">
                        <h4 class="mb-0 mt-auto">Darius Pratama</h4>
                        <p class="mb-0">Chef Eksekutif</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-member px-4 py-5 border shadow-on-hover text-center d-flex flex-column">
                    <img src="{{ Vite::asset('resources/images/Team/DSC_6210.jpg') }}" alt="" class="img-fluid rounded-circle w-50 mx-auto mb-4">
                    <div class="team-member-content">
                        <h4 class="mb-0 mt-auto">Adrian Hartanto</h4>
                        <p class="mb-0">Sous Chef</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-member px-4 py-5 border shadow-on-hover text-center d-flex flex-column">
                    <img src="{{ Vite::asset('resources/images/Team/DSC_6220.jpg') }}" alt="" class="img-fluid rounded-circle w-50 mx-auto mb-4">
                    <div class="team-member-content">
                        <h4 class="mb-0 mt-auto">Gabriella Soeharto</h4>
                        <p class="mb-0">Barista</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-member px-4 py-5 border shadow-on-hover text-center d-flex flex-column">
                    <img src="{{ Vite::asset('resources/images/Team/DSC_6240.jpg') }}" alt="" class="img-fluid rounded-circle w-50 mx-auto mb-4">
                    <div class="team-member-content">
                        <h4 class="mb-0 mt-auto">Isabella Wijaya</h4>
                        <p class="mb-0">Pelayan</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<br><br><br><br><br><br><br><br>
<section id="blog" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1>Blog Posts</h1>
        </div>
      </div>
      <div class="row gy-4">
        <div class="col-md-6">
            <div class="blog-post card">
              <img src="{{ Vite::asset('resources/images/Blog Foto/Blog daging.jpg') }}" alt="" class="card-img-top img-fluid">
          
              <div class="card-body">
                <p class="card-text">Posted: 15 Jul, 2023</p>
                <h4 class="card-title"><a href="#" class="text-decoration-none">Cara membuat Daging Sapi empuk</a></h4>
                <p class="card-text">
                  Berikut ini adalah tata cara. . .
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
        </div>
          
          
        <div class="col-md-6">
          <div class="blog-post card">
            <img src="{{ Vite::asset('resources/images/Blog Foto/Blog Nasi Kecombrang.jpg') }}" alt="" class="card-img-top">
            <div class="card-body">
              <p class="card-text">Posted: 25 Jun, 2023</p>
              <h4 class="card-title"><a href="#">Tutorial membuat Nasi Kecombrang</a></h4>
              <p class="card-text">
                Berikut ini adalah tata cara. . .
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

<br><br><br><br><br><br><br><br><br><br>

@endsection
