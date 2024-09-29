<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <!-- FAVICONS ICON -->
        <link rel="shortcut icon" type="image/png" href="{{asset('favicon-16x16.png')}}" />
        
        <link href="{{ asset('admin/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('admin/vendor/nouislider/nouislider.min.css') }}">
        <!-- Style css -->
        <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="main-wrapper">
            <div class="nav-header">
                <a href="{{route('home')}}" class="brand-logo">
                    <img class="logo-abbr" viewBox="0 0 53 53" src="{{ asset('logo.png') }}" alt="">
                    <!-- <span class="brand-title">Padiku</span> -->
                </a>
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
            </div>

            <div class="dlabnav">
                <div class="dlabnav-scroll">
                    <ul class="metismenu" id="menu">
            
                        <li class="header-profile">
                            <a class="nav-link" href="javascript:void(0);" role="button">
                                <img src="{{asset('admin/images/profile.png')}}" width="20" alt=""/>
                                <div class="header-info ms-3">
                                    <span class="font-w600 ">Hi, <b>Admin</b></span>
                                    <small class="text-end font-w400">admin@gmail.com</small>
                                </div>
                            </a>
                        </li>
            
                        <li><a href="{{route('home')}}" class="ai-icon pilih" id="menuHome" aria-expanded="false">
                                <i class="flaticon-381-home-2"></i>
                                <span class="nav-text">Beranda</span>
                            </a>
                        </li>
                        <li><a href="{{route('padi')}}" class="ai-icon pilih" id="menuPadi" aria-expanded="false">
                                <i class="flaticon-381-file"></i>
                                <span class="nav-text">Varietas Padi</span>
                            </a>
                        </li>
                        <li><a href="{{route('kriteria')}}" class="ai-icon" aria-expanded="false">
                                <i class="flaticon-013-checkmark"></i>
                                <span class="nav-text">Kriteria</span>
                            </a>
                        </li>
                        <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                                <i class="flaticon-381-perspective"></i>
                                <span class="nav-text">Bobot</span>
                            </a>
                        </li>
                        <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                                <i class="flaticon-381-notepad-1"></i>
                                <span class="nav-text">History Rekomendasi</span>
                            </a>
                        </li>
                        <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                                <i class="flaticon-381-user-9"></i>
                                <span class="nav-text">Akun Admin</span>
                            </a>
                        </li>
            
                        <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                                <i class="flaticon-381-exit-1"></i>
                                <span class="nav-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
            
        {{ $slot }}
    </body>
</html>
