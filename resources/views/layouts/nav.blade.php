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
            <li class="nav-item col-2 col-md-auto me-2 me-md-4"><a href="{{ route('order.index') }}" class="nav-link active navbar-text fs-5">Menu</a></li>
            <li class="nav-item col-2 col-md-auto"><a href="" class="nav-link navbar-text fs-5">Checkout</a></li>
        </ul>
      </div>
    </div>
</nav>
