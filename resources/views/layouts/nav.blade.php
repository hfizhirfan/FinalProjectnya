{{-- Untuk side bar --}}
@php
    $currentRouteName = Route::currentRouteName();
@endphp

<div class="side-navbar bg-dark active-nav d-flex justify-content-between flex-wrap flex-column pt-2" id="sidebar">
    <ul class="nav flex-column text-white w-100">
        <a class="text-decoration-none mt-3 align-items-center text-white text-center" href="#">
            <img style="width: 75%;" src="{{ Vite::asset('resources/images/Group 26.png')}}" alt="image">
        </a>
        <li class="nav-item col-md-auto mt-3">
            <a href="{{route('dashboard.index')}}" class="nav-link">
                <i class="bi bi-house-fill pe-1"></i>
                <span class="">Dashboard</span>
            </a>
        </li>
        <li class="nav-item col-md-auto">
            <a href="{{route('kategori.index')}}" class="nav-link">
                <i class="bi bi-tags-fill"></i>
                <span class="">Data Kategori</span>
            </a>
        </li>
        <li class="nav-item col-md-auto">
            <a href="{{route('product.index')}}" class="nav-link">
                <i class="bi bi-basket-fill"></i>
                <span class="">Data Menu</span>
            </a>
        </li>
        <li class="nav-item col-md-auto">
            <a href="#" class="nav-link">
                <i class="bi bi-currency-dollar"></i>
                <span class="">Data Transaksi</span>
            </a>
        </li>
    </ul>
    <div class="dropdown p-3">
        {{-- <a href="#" class="btn border-none btn-secondary text-white">
            <i class="bi bi-person-fill"></i>
            <span class="">Profile</span>
        </a> --}}
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </div>
</div>
<div class="my-container active-cont">
    <nav class="navbar top-navbar navbar-light bg-dark px-5 d-flex">
        <a class="btn border-0 text-white" id="menu-btn"><i class="bi bi-list"></i></a>
    </nav>
