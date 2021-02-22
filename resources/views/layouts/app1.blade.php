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
    <link rel="shortcut icon" href="assets/custom/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/custom/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/custom/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/custom/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/custom/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/custom/css/component.css" />
    <link rel="stylesheet" type="text/css" href="assets/custom/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="assets/custom/css/mobile-nav.css" />
    <link rel="stylesheet" href="assets/custom/css/custom.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>


</head>
<body>
        <header>
            <div class="first-row">
                <div class="container-fluid text-center align-items-center">
                    <ul>
                        <li><i><img src="assets/custom/img/icon-pure.png" width="19" height="28" alt="pure" data-src="assets/custom/img/icon-pure.png"> </i> <span>100% Pure</span></li>
                        <li><i><img src="assets/custom/img/icon-chemical.png" width="23" height="31" alt="pure" data-src="assets/custom/img/icon-chemical.png"> </i> <span>Chemical Free</span> </li>
                        <li><i><img src="assets/custom/img/icon-rabit.png" width="34" height="34" alt="pure" data-src="assets/custom/img/icon-rabit.png"> </i> <span>Cruelty Free</span> </li>
                        <li><i><img src="assets/custom/img/icon-echo-friendly.png" width="35" height="31" alt="pure" data-src="assets/custom/img/icon-echo-friendly.png"> </i> <span>Eco Friendly</span></li>
                    </ul>
                </div>
            </div>
            <div class="second-row text-white d-none d-lg-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <ul class="left list-inline">
                                <li class="list-inline-item"><i class="las la-phone"></i> +91-484-2632991,+91-484-2124310</li>
                                <li class="list-inline-item"><i class="las la-envelope"></i> organic@mrtorganic.com</li>
                            </ul>
                        </div>
                        <div class="col text-right">
                            <ul class="right list-inline ml-auto">
                                <li class="list-inline-item online-store"><a href="#"><i><img src="assets/custom/img/icon-web.png" data-src="assets/custom/img/icon-web.png" width="24" height="24" alt="online store"> </i> Online Store</a> </li>
                                <li class="list-inline-item social"><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                <li class="list-inline-item social"><a href="#"><i class="lab la-twitter"></i></a></li>
                                <li class="list-inline-item social"><a href="#"><i class="lab la-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <nav class="navbar navbar-expand-lg   row p-0 no-gutters">
                    <div class="collapse col-4 navbar-collapse d-none d-lg-block" id="main_nav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"> <a class="nav-link" href="#"><i class="las la-home"></i></a> </li>
                            <li class="nav-item"><a class="nav-link" href="#">Our Story</a></li>
                            <li class="nav-item dropdown"> <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">Organic Products</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                                    <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                                    <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- navbar-collapse.// -->
                    <div class="col-4 text-center ">
                        <a class="brand text-white" href="#"><img src="assets/custom/img/brand-logo.png" data-src="assets/custom/img/brand-logo.png" width="266" height="104" alt="MRT"> </a>
                    </div>
                    <div class="col-4  d-none d-lg-block">
                        <ul class="navbar-nav ">
                            <li class="nav-item dropdown"> <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Conventional Products </a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                                    <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                                    <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#"> Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-5 d-block d-md-none  relative">
                        <div id="dl-menu" class="dl-menuwrapper">
                            <button class="dl-trigger">Open Menu</button>
                            <ul class="dl-menu">
                                <li><a href="#">Home</a></li>
                                <li> <a href="#" class="has-sub">Organic Products <i class="las la-angle-right ml-auto float-right"></i></a>
                                    <ul class="dl-submenu">
                                        <li><a href="#">ORGANIC ESSENTIAL OILS</a></li>
                                        <li><a href="#">ORGANIC CARRIER OILS</a></li>
                                        <li><a href="#">ORGANIC HERBS</a></li>
                                        <li><a href="#">ORGANIC HERBAL EXTRACTS</a></li>
                                        <li><a href="#">ORGANIC SPICES</a></li>
                                        <li><a href="#">ORGANIC ISOLATES</a></li>
                                        <li><a href="#">ORGANIC FOOD PRODUCTS</a></li>
                                        <li><a href="#">ORGANIC CO2 EXTRACTS</a></li>
                                        <li><a href="#">ORGANIC NUTRACEUTICALS</a></li>
                                        <li><a href="#">ORGANIC BUTTER &amp; WAXES</a></li>
                                        <li><a href="#">ORAGINIC TEXTILES &amp; GARMENTS</a></li>
                                    </ul>
                                </li>
                                <li> <a href="#">Convetional Products <i class="las la-angle-right ml-auto float-right"></i></a>
                                    <ul class="dl-submenu">
                                        <li><a href="#">ESSENTIAL OILS</a></li>
                                        <li><a href="#">CO2 EXTRACTS</a></li>
                                        <li><a href="#">OLEORESIN</a></li>
                                        <li><a href="#">FLORAL EXTRACTS</a></li>
                                        <li><a href="#">HERBAL EXTRACTS</a></li>
                                        <li><a href="#">MINTS</a></li>
                                        <li><a href="#">NUTRACEUTICALS</a></li>
                                        <li><a href="#">ISOLATES</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    <div id="app">

            @yield('content')
    </div>

        <footer class="wow fadeInUp" data-wow-duration="1s" >
            <div class="container relative">
                <div class="pb-4 pb-md-5 logo"><img src="assets/custom/img/brand-logo.png" data-src="assets/custom/img/brand-logo.png" alt="MRT" width="266" height="104"></div>
                <div class="row">
                    <div class="col-lg-4 d-none d-md-block border-right mb-4 mb-md-5">
                        <h2 class="pb-3 font-bold">Get in touch</h2>
                        <h5 class="text-uppercase pb-2">HEAD OFFICE</h5>
                        <address><i class="las la-map-marker"></i>
                            MRT Organic Green Products<br/>
                            3 – Palatty Buildings, Pipeline Road <br/>
                            Nr to Telephone Exchange<br/>
                            Aluva – 683101, Cochin, Kerala, India.
                        </address>
                        <h2 class="pb-3 font-bold">Contact</h2>
                        <ul class="contact-info pb-4">
                            <li><i class="las la-phone"></i>Phone: +91-484-2632991,+91-484-2124310</li>
                            <li><i class="las la-mobile-alt"></i>Mobile:+91-9746039299</li>
                            <li><i class="las la-fax"></i> Fax : +91-484-2624133</li>
                            <li><i class="las la-envelope"></i>Email: organic@mrtorganic.com</li>
                        </ul>
                        <ul class="list-inline social">
                            <li class="list-inline-item"><a class="ease social-icon text-xs-center" target="_blank" href="#"><i class="lab la-linkedin"></i></a></li>
                            <li class="list-inline-item"><a class="ease social-icon text-xs-center" target="_blank" href="#"><i class="lab la-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="ease social-icon text-xs-center" target="_blank" href="#"><i class="lab la-facebook-f"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 mb-4 mb-md-5">
                        <div class="row pl-0 pl-lg-4">
                            <div class="col-md-4  d-none d-md-block">
                                <h2  class="pb-3 font-bold">Organic<br/> Products</h2>
                                <ul class="links">
                                    <li><a href="#">Organic Essential Oils</a> </li>
                                    <li><a href="#">Organic Carrier Oils</a> </li>
                                    <li><a href="#">Organic Herbs</a> </li>
                                    <li><a href="#">Organic Herbal Extracts</a> </li>
                                    <li><a href="#">Organic Spices</a> </li>
                                    <li><a href="#">Organic Isolates</a> </li>
                                    <li><a href="#">Organic Food Products</a> </li>
                                    <li><a href="#">Organic Co2 Extracts</a> </li>
                                    <li><a href="#">Organic Nutraceuticals</a> </li>
                                    <li><a href="#">Organic Butter &amp; Waxes</a> </li>
                                    <li><a href="#">Oraginic Textiles &amp; Garments</a> </li>
                                </ul>
                            </div>
                            <div class="col-md-4  d-none d-md-block">
                                <h2  class="pb-3 font-bold">Conventional <br/>Products</h2>
                                <ul class="links">
                                    <li><a href="#">Essential Oils</a> </li>
                                    <li><a href="#">Co2 Extracts</a> </li>
                                    <li><a href="#">Floral Extracts</a> </li>
                                    <li><a href="#">Oleoresin</a> </li>
                                    <li><a href="#">Herbal Extracts</a> </li>
                                    <li><a href="#">Mints</a> </li>
                                    <li><a href="#">Nutraceuticals</a> </li>
                                    <li><a href="#">Isolates</a> </li>
                                </ul>
                                <div class="spacer-1"></div>
                            </div>
                            <div class="col-md-4">
                                <h2  class="pb-3 font-bold">Quick<br/>Links</h2>
                                <ul class="links">
                                    <li><a href="#">Home  </a> </li>
                                    <li><a href="#">Our Story </a> </li>
                                    <li><a href="#">Organic Products  </a> </li>
                                    <li><a href="#">Conventional Products </a> </li>
                                    <li><a href="#">Contact Us</a> </li>
                                    <li><a href="#">Online Store</a> </li>
                                </ul>
                                <div class="spacer-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/custom/img/leaf-3.png" data-src="assets/custom/img/leaf-3.png" width="364" height="301" alt="leaf" class="leaf">
            </div>
            <div class="last">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-md-6 text-center text-md-left">© 2020-21 MRT Green Products. </div>
                        <div class="col-md-6 text-center text-md-right "><a href="#" class=" mr-5">Legal</a>     <a href="#" class=""> Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!--       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
        <script src="assets/custom/js/jquery-3.2.1.slim.min.js"></script>
        <script src="assets/custom/js/popper.min.js"></script>
        <script src="assets/custom/js/bootstrap.min.js" ></script>
        
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
        
        <script src="assets/custom/js/jquery.min.js"></script>
        
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
         
            //carousel
            $('.carousel').carousel({
            pause: "false"
        });
            
        </script>
        
        <script type="text/javascript">
           $(window).on('load', function() {
             $('#status').fadeOut(); 
             $('#preloader').delay(350).fadeOut('slow');
             $('body').delay(350).css({'overflow':'visible'});
           })
        </script>
        
         <script src="assets/custom/js/jquery.nice-select.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="assets/custom/js/jquery.countup.js"></script>
        <script>
        $('.counter').countUp();
        </script>
        <script src="assets/custom/js/wow.js"></script>
        <script>
                 new WOW().init();
              </script>
        <script src="assets/custom/js/owl.carousel.min.js"></script>
        
        <script>
              $(document).ready(function() {
                      $('.owl-carousel').owlCarousel({
                        loop: true,
                        margin: 10,
                          autoplay:false,
                           //autoWidth:true,
                        responsiveClass: true,
                          nav: true,
                        responsive: {
                          0: {
                            items: 1,
                            nav: true
                          },
                          600: {
                            items: 2,
                           
                          }
                            ,
                          900: {
                            items: 3,
                           
                          },
                          1000: {
                            items: 3,
                           
                            loop: true,
                            margin: 20
                          }
                        }
                      })
                 
              })
                     
        </script>
        <script>
        $('#carousel-solutions').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            margin: 20,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 3,
                },
                1200: {
                    items: 6,
                }
            }
        });
        </script>
        <script>
        $('.carousel').carousel({
            pause: "false"
        });
        </script>
        <script src="assets/custom/js/modernizr.custom.js"></script>
        <script src="assets/custom/js/jquery.dlmenu.js"></script>
                <script>
                    $(function() {
                        $( '#dl-menu' ).dlmenu({
                            animationClasses : { classin : 'dl-animate-in-5', classout : 'dl-animate-out-5' }
                        });
                    });
                </script>
        
        </body>
        </html>
        