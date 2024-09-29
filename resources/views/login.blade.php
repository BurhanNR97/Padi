@extends('master')
@include('sweetalert::alert')
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

<div class="container-fluid py-5">
    <div class="container mt-5 pt-5">
        <div class="row kotaks">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">HALAMAN LOGIN</h2>
                        <div class="form-group mb-3">
                            <form id="formLogin" method="POST" action="">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $item)
                                    <div class="alert alert-danger">
                                        <b>Opps!</b> Username atau password salah!
                                    </div>
                                    @endforeach
                                @endif
                                @csrf
                                <div class="mb-3">
                                    <input required type="text" value="{{ old('username')}}" name="username" id="username" placeholder="Masukkan username"
                                        class="form-control">
                                </div>
                                <div class="input-group mb-3">
                                    <input required type="password" name="password" id="password" class="form-control" placeholder="Masukkan password"
                                        aria-label="Insert Password" aria-describedby="basic-addon2">
                                    <span class="input-group-text" id="showHide">
                                        <i class="bi bi-eye"></i>
                                    </span>
                                </div>
                                <div class="mb-3 d-grid gap-2">
                                    <button id="loginBtn" type="submit" class="btn btn-primary">MASUK</button>
                                </div>
                            </form>
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

<script>    
    const password = document.getElementById('password'); // id dari input password
    const showHide = document.getElementById('showHide'); // id span showHide dalam input group password

    password.type = 'password'; // set type input password menjadi password
    showHide.innerHTML = '<i class="bi bi-eye"></i>'; // masukan icon eye dalam icon bootstrap 5
    showHide.style.cursor = 'pointer'; // ubah cursor menjadi pointer
    // jadi ketika span di hover maka cursornya berubah pointer

    showHide.addEventListener('click', () => {
    // ketika span diclick
        if (password.type === 'password') {
            // jika type inputnya password
            password.type = 'text'; // ubah type menjadi text
            showHide.innerHTML = '<i class="bi bi-eye-slash"></i>'; // ubah icon menjadi eye slash
        } else {
            // jika type bukan password (text)
            showHide.innerHTML = '<i class="bi bi-eye"></i>'; // ubah icon menjadi eye
            password.type = 'password'; // ubah type menjadi password
        }
    });
</script>

@endsection