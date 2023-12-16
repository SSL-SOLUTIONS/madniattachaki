<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="{{asset('website/navbar/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('website/navbar/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('website/navbar/css/owl.carousel.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('website/navbar/css/bootstrap.min.css')}}">
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('website/navbar/css/style.css')}}">
    <style>
      .navbody{
          margin: 0px;
          padding: 0;
          box-sizing: 0px;
          }
</style>
    <title>Madni Atta Chakki</title>
  </head>
  <body class="navbody" >
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="" class="text-white mb-0"><img src="{{asset('website/navbar/images/logo.png')}}" alt=""></a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}"><span>Home</span></a></li>
            <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="{{ route('about') }}"><span>About</span></a></li>
            <li class="{{ request()->is('products') ? 'active' : '' }}"><a href="{{ route('products') }}"><span>Products</span></a></li>
            <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}"><span>Contact</span></a></li>
                <li class="{{ request()->is('order_now') ? 'active' : ''}}"><a href="{{ route('order_now') }}"><span>Order Now</span></a></li>
              </ul>
            </nav>
          </div>
          <div class="humberburger d-inline-block d-xl-none ml-md-0 mr-auto py-3"><a href="" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </div>
    </header>
    <div class="hero">
        <video autoplay muted loop>
            <source src="https://sunridgefoods.com/assets/video/home/home-03.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <script src="{{asset('website/navbar/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('website/navbar/js/popper.min.js')}}"></script>
    <script src="{{asset('website/navbar/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('website/navbar/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('website/navbar/js/main.js')}}"></script>
  </body>
</html>