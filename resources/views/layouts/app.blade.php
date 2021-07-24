<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/assets/custom/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/assets/custom/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/custom/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/custom/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/custom/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/custom/css/component.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/custom/css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/custom/css/mobile-nav.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/custom/css/custom.css') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'MRT ORGANIC') }}</title>


</head>
<body>
<div id="app">
    <main>
        @yield('content')
    </main>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="{{ asset('assets/custom/js/jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('assets/custom/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/custom/js/bootstrap.min.js') }}" ></script>


<script src="{{ asset('assets/custom/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/custom/js/jquery.nice-select.js') }}"></script>

<script src="{{ asset('assets/custom/js/modernizr.custom.js') }}"></script>
<script src="{{ asset('assets/custom/js/jquery.dlmenu.js') }}"></script>


<script>
    //fixed header script
    $(window).scroll(function(){
        if ($(window).scrollTop() >= 100) {
            $('header').addClass('fixed-header');
        // $('nav div').addClass('visible-title');
        }
        else {
            $('header').removeClass('fixed-header');
        // $('nav div').removeClass('visible-title');
        }
    });
        
    

    $(window).on('load', function() {
        $('#status').fadeOut(); 
        $('#preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({'overflow':'visible'});
    })

    $(document).ready(function() {
    

            $('.carousel').carousel({
                pause: "false"
            });
        
    });

    $(function() {
        // $( '#dl-menu' ).dlmenu({
        //     animationClasses : { classin : 'dl-animate-in-5', classout : 'dl-animate-out-5' }
        // });
    });
</script>

</body>
</html>
        