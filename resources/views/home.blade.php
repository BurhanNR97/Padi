<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Dompet : Payment Admin Template" />
	<meta property="og:title" content="Dompet : Payment Admin Template" />
	<meta property="og:description" content="Dompet : Payment Admin Template" />
	<meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Administrator | SPK Pemilihan Bibit Padi</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{asset('favicon-16x16.png')}}" />
	
	<link href="{{ asset('admin/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('admin/vendor/nouislider/nouislider.min.css') }}">
	<!-- Style css -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
	
</head>
<body>

    @include('admin.header')
	@include('sweetalert::alert')

    <div id="main-wrapper">
		<div class="nav-header">
			<a href="{{route('admin.home')}}" class="brand-logo">
				<img class="logo-abbr" viewBox="0 0 53 53" src="{{ asset('logo.png') }}" alt="">
				<!-- <span class="brand-title">Padiku</span> -->
			</a>
			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>
    	@include('admin.sidebar')
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <main id="page-main">
                @yield('content')
            </main>
        </div>


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
	
	<!-- Dashboard 1 -->
	<script src="{{ asset('admin/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
	<script src="{{ asset('admin/js/dlabnav-init.js') }}"></script>
    
</body>
</html>