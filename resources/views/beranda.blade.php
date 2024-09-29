@extends('master')

@section('content')
    <!-- Navbar & Hero Start -->

    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <img src="{{asset('img/logo.png')}}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('beranda')}}" class="nav-item nav-link active">Beranda</a>
                <a href="{{route('rekomendasi')}}" class="nav-item nav-link">Rekomendasi Bibit</a>
                <a href="{{route('padi')}}" class="nav-item nav-link">Varietas Bibit Padi</a>
            </div>
            <div class="dropdown">
                @php
                    if (Auth::check()) {
                        echo 
                        "<a href='javascript:void(0)' class='dropdown-toggle btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0' data-bs-toggle='dropdown'>Administrator</a>
                        <div class='dropdown-menu rounded'>
                            <a href='/admin/home' class='dropdown-item'><i class='fas fa-user-alt me-2'></i> Halaman Admin</a>
                            <a href='/logout' class='dropdown-item'><i class='fas fa-power-off me-2'></i> Log Out</a>
                        </div>";
                    } else {
                        echo 
                        "<a href='/login' class='btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0'>Login</a>";
                    }
                @endphp
            </div>
        </div>
    </nav>
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="{{asset('img/banner.jpg')}}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-12 animated fadeInUp">
                            <div class="text-center">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Selamat Datang</h4>
                                <h2 class="text-uppercase text-white mb-4">Sistem Pendukung Keputusan Pemilihan Bibit Padi Berkualitas Menggunakan Metode WASPAS Berbasis Web Pada Dinas Pertanian Kabupaten Pinrang</h2>
                                
                                <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="{{route('rekomendasi')}}">Cari Rekomendasi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
</div>
<!-- Navbar & Hero End -->


<!-- Abvout Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">Kabupaten Pinrang</h4>
                    <h1 class="display-5 mb-4">Dinas Pertanian dan Peternakan</h1>
                    <p class="mb-4">Kabupaten Pinrang merupakan salah satu daerah yang menjadi sentra penghasil padi di Sulawesi Selatan
                    </p>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="{{asset('img/foto1.jpg')}}" class="img-fluid rounded w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Services Start -->
<div class="container-fluid service pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="text-primary display-5 mb-4">Jenis Lahan Sawah</h1>
            <p class="mb-0">Kondisi lahan sawah yang digunakan para petani untuk menanam padi
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/sawah-kering.jpeg')}}" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="javascript:void(0)" class="h4 d-inline-block mb-4">Lahan Sawah Kering</a>
                        <p>Lahan sawah yang memiliki situasi tanah kering subur</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/sawah-irigasi.jpeg')}}" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="javascript:void(0)" class="h4 d-inline-block mb-4">Lahan Sawah Irigasi</a>
                        <p>Lahan sawah yang memiliki drainase untuk mengaliri sawah</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/sawah-rawah.jpg')}}" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="javascript:void(0)" class="h4 d-inline-block mb-4">Lahan Sawah Rawah</a>
                        <p>Lahan sawah yang memiliki situasi tanah yang tergenang air dan berlumpur dengan kedalaman 10-25 cm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


@endsection