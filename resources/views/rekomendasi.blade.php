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
                <a href="{{route('rekomendasi')}}" class="nav-item nav-link active">Rekomendasi Bibit</a>
                <a href="{{route('padi')}}" class="nav-item nav-link" style="color: black">Varietas Bibit Padi</a>
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
    <!-- Header End -->
</div>
<!-- Navbar & Hero End -->

<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="text-center mt-5 mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-5 mb-3">Cari Rekomendasi Bibit Padi</h1>
            <p class="mb-0">Silahkan pilih kriteria dibawah sesuai keinginan anda
            </p>
        </div>
        <div class="row container wow fadeInUp">
            <div class="row kotaks">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center text-primary mb-4">FORM KRITERIA</h3>
                            <div class="form-group mb-3">
                                <form id="formLogin" method="POST" action="">
                                    @csrf
                                    <label for="k1" class="text-black mb-2">Cuaca</label>
                                    <div class="input-group">
                                        <select name="k1" required class="default-select form-control wide mb-3">
                                            <option value="">- Pilih -</option>
                                            @foreach ($k1 as $item)
                                                <option value="{{$item->kriteria}}#{{$item->subkriteria}}#{{$item->bobot}}">{{$item->subkriteria}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <label for="k2" class="text-black mb-2">Kondisi Lahan</label>
                                    <div class="input-group">
                                        <select name="k2" required class="default-select form-control wide mb-3">
                                            <option value="">- Pilih -</option>
                                            @foreach ($k2 as $item)
                                                <option value="{{$item->kriteria}}#{{$item->subkriteria}}#{{$item->bobot}}">{{$item->subkriteria}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <label for="k3" class="text-black mb-2">Berat/1000 butir (gr)</label>
                                    <div class="input-group">
                                        <select name="k3" required class="default-select form-control wide mb-3">
                                            <option value="">- Pilih -</option>
                                            @foreach ($k3 as $item)
                                                <option value="{{$item->kriteria}}#{{$item->subkriteria}}#{{$item->bobot}}">{{$item->subkriteria}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <label for="k4" class="text-black mb-2">Umur/masa Tanam (hari)</label>
                                    <div class="input-group">
                                        <select name="k4" required class="default-select form-control wide mb-3">
                                            <option value="">- Pilih -</option>
                                            @foreach ($k4 as $item)
                                                <option value="{{$item->kriteria}}#{{$item->subkriteria}}#{{$item->bobot}}">{{$item->subkriteria}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <label for="k5" class="text-black mb-2">Potensi hasil (ton/ha)</label>
                                    <div class="input-group">
                                        <select name="k5" required class="default-select form-control wide mb-3">
                                            <option value="">- Pilih -</option>
                                            @foreach ($k5 as $item)
                                                <option value="{{$item->kriteria}}#{{$item->subkriteria}}#{{$item->bobot}}">{{$item->subkriteria}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="mt-3 d-grid gap-2">
                                        <button id="proses" type="submit" class="btn btn-primary">CARI</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .container .kotaks{
        position: flex;
        justify-content: center;
        align-items: center
    }
</style>

@endsection