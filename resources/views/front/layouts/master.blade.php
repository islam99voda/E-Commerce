<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>	
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('front/assets')}}/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('front/assets')}}/css/animate.css">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('front/assets')}}/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('front/assets')}}/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('front/assets')}}/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('front/assets')}}/css/chosen.min.css">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('front/assets')}}/css/style.css">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('front/assets')}}/css/color-01.css">
</head>
<body class="home-page home-01 ">
	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	@include('front.layouts.header')	
	@yield('content')



	@include('front.layouts.footer')	
		
	<script src="{{URL::asset('front/assets/js')}}/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="{{URL::asset('front/assets/js')}}/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="{{URL::asset('front/assets/js')}}/bootstrap.min.js"></script>
	<script src="{{URL::asset('front/assets/js')}}/jquery.flexslider.js"></script>
	<script src="{{URL::asset('front/assets/js')}}/chosen.jquery.min.js"></script>
	<script src="{{URL::asset('front/assets/js')}}/owl.carousel.min.js"></script>
	<script src="{{URL::asset('front/assets/js')}}/jquery.countdown.min.js"></script>
	<script src="{{URL::asset('front/assets/js')}}/jquery.sticky.js"></script>
	<script src="{{URL::asset('front/assets/js')}}/functions.js"></script>
	@include('layouts.footer')
</body>
</html>