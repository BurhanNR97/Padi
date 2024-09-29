@extends('master')

@section('content')
    <!-- Navbar & Hero Start -->

    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <img src="{{asset('img/logo.png')}}" alt="Logo">&ensp;
            SPK Pemilihan Bibit Padi
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('beranda')}}" class="nav-item nav-link" style="color: black">Beranda</a>
                <a href="{{route('rekomendasi')}}" class="nav-item nav-link" style="color: black">Rekomendasi Bibit</a>
                <a href="{{route('padi')}}" class="nav-item nav-link active">Varietas Bibit Padi</a>
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


<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-5 mb-4">Varietas Bibit Padi</h1>
            <p class="mb-0"></p>
        </div>
        <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="{{asset('img/inpago-12.jpg')}}" class="img-fluid w-100 rounded" alt="">
                </div>
                <a href="#" class="h4 d-inline-block mb-3">Inpago 12</a>
                <br>
                Jenis padi yang cocok ditanam di musim kemarau dengan kondisi lahan kering. Padi ini dapat di panen pada 111 hari dengan berat 26 gr/1000 butir. Potensi penghasilan sebesar 10,2 ton/ha.
            </div>

            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="{{asset('img/mr.jpg')}}" class="img-fluid w-100 rounded" alt="">
                </div>
                <a href="#" class="h4 d-inline-block mb-3">Malaysian Rica (MR)</a>
                <br>
                Jenis padi yang cocok ditanam di musim kemarau dengan kondisi lahan kering. Padi ini dapat di panen pada 95 hari setelah masa tanam dengan berat 25 gr/1000 butir. Potensi penghasilan sebesar 8-12 ton/ha.
            </div>

            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="{{asset('img/cakrabuana.jpg')}}" class="img-fluid w-100 rounded" alt="">
                </div>
                <a href="#" class="h4 d-inline-block mb-3">Cakrabuana</a>
                <br>
                Jenis padi yang cocok ditanam di musim penghujan dengan kondisi lahan sawah irigasi. Padi ini dapat di panen pada 104 hari setelah masa tanam dengan berat 27,1 gr/1000 butir. Potensi penghasilan sebesar 10,2 ton/ha.
            </div>

            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="{{asset('img/bioprima.jpg')}}" class="img-fluid w-100 rounded" alt="">
                </div>
                <a href="#" class="h4 d-inline-block mb-3">Bioprima</a>
                <br>
                Jenis padi yang cocok ditanam di musim penghujan dengan kondisi lahan sawah irigasi/tadah hujan. Padi ini dapat di panen pada 118 hari setelah masa tanam dengan berat 26,93 gr/1000 butir. Potensi penghasilan sebesar 9,4 ton/ha.
            </div>

            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="{{asset('img/mekongga.jpg')}}" class="img-fluid w-100 rounded" alt="">
                </div>
                <a href="#" class="h4 d-inline-block mb-3">Mekongga</a>
                <br>
                Jenis padi yang cocok ditanam di musim kemarau dengan kondisi lahan sawah kering subur. Padi ini dapat di panen pada 116-125 hari setelah masa tanam dengan berat 27-28 gr/1000 butir. Potensi penghasilan sebesar 6 ton/ha.
            </div>

            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="{{asset('img/inpara-08.jpg')}}" class="img-fluid w-100 rounded" alt="">
                </div>
                <a href="#" class="h4 d-inline-block mb-3">Inpara 08</a>
                <br>
                Jenis padi yang cocok ditanam di musim penghujan dengan kondisi lahan sawah rawah pasang surut/lebak dangkal. Padi ini dapat di panen pada 115 hari setelah masa tanam dengan berat 27,2 gr/1000 butir. Potensi penghasilan sebesar 6 ton/ha.
            </div>
            
            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="{{asset('img/inpari-09.jpg')}}" class="img-fluid w-100 rounded" alt="">
                </div>
                <a href="#" class="h4 d-inline-block mb-3">Inpari 09</a>
                <br>
                Jenis padi yang cocok ditanam di musim kemarau ataupun penghujan dengan kondisi lahan sawah irigasi. Padi ini dapat di panen pada 125 hari setelah masa tanam dengan berat 22,8 gr/1000 butir. Potensi penghasilan sebesar 7 ton/ha.
            </div>

            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="{{asset('img/ciherang.jpg')}}" class="img-fluid w-100 rounded" alt="">
                </div>
                <a href="#" class="h4 d-inline-block mb-3">Ciherang</a>
                <br>
                Jenis padi yang cocok ditanam di musim penghujan dan kemarau dengan kondisi lahan sawah rawah. Padi ini dapat di panen pada 116-125 hari setelah masa tanam dengan berat 27-28 gr/1000 butir. Potensi penghasilan sebesar 5-7 ton/ha.
            </div>

            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="{{asset('img/ketonggo.jpg')}}" class="img-fluid w-100 rounded" alt="">
                </div>
                <a href="#" class="h4 d-inline-block mb-3">Ketonggo</a>
                <br>
                Jenis padi yang cocok ditanam di musim penghujan dengan kondisi lahan sawah irigasi. Padi ini dapat di panen pada 115-125 hari setelah masa tanam dengan berat 29 gr/1000 butir. Potensi penghasilan sebesar 6 ton/ha.
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection