<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="{{URL::asset('front')}}/images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{URL::asset('front')}}/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="{{URL::asset('front')}}/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{URL::asset('front')}}/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{URL::asset('front')}}/css/responsive.css" rel="stylesheet" />
   </head>
   
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            @include('front.inc.header')
            @yield('content')
            @include('front.inc.footer')
            <div class="cpy_">
                <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
                
                   Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                
                </p>
             </div>

             <!-- jQery -->
             <script src="{{URL::asset('front')}}/js/jquery-3.4.1.min.js"></script>
             <!-- popper js -->
             <script src="{{URL::asset('front')}}/js/popper.min.js"></script>
             <!-- bootstrap js -->
             <script src="{{URL::asset('front')}}/js/bootstrap.js"></script>
             <!-- custom js -->
             <script src="{{URL::asset('front')}}/js/custom.js"></script>
          </body>
        </html>