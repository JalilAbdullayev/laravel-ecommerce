<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"/>
    <link rel="stylesheet" href="{{ asset('front/fonts/icomoon/style.css')}}"/>
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css')}}"/>
    <link rel="stylesheet" href="{{ asset('front/css/jquery-ui.css')}}"/>
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('front/css/aos.css')}}"/>
    <link rel="stylesheet" href="{{ asset('front/css/style.css')}}"/>
</head>
<body>
<div class="site-wrap">
    @include('front.includes.header')
    @yield('content')
    @include('front.includes.footer')
</div>
<script src="{{ asset('back/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('back/js/jquery-ui.js')}}"></script>
<script src="{{ asset('back/js/popper.min.js')}}"></script>
<script src="{{ asset('back/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('back/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('back/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('back/js/aos.js')}}"></script>
<script src="{{ asset('back/js/main.js')}}"></script>
</body>
</html>
