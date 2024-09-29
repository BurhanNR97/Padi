<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPK Pemilihan Bibit Padi Berkualitas</title>
    <link rel="icon" type="image/png" sizes="16x16"  href="{{asset('favicon-16x16.png')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="{{asset('user/lib/animate/animate.min.css')}}"/>
        <link href="{{asset('user/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('user/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('user/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('user/css/style.css')}}" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <div class="container-fluid position-relative p-0">

        <section>
            @yield('content')
        </section>

            
        @include('footer')


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('user/lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('user/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('user/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('user/lib/counterup/counterup.min.js')}}"></script>
        <script src="{{asset('user/lib/lightbox/js/lightbox.min.js')}}"></script>
        <script src="{{asset('user/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        

        <!-- Template Javascript -->
        <script src="{{asset('user/js/main.js')}}"></script>
    </body>

</html>