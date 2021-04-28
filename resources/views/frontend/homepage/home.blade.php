<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google" value="notranslate"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sneaker District</title>
        <link rel="apple-touch-icon" sizes="180x180" href="{!! URL::to('images/assets/favicon_io/apple-touch-icon.png') !!}">
        <link rel="icon" type="image/png" sizes="32x32" href="{!! URL::to('images/assets/favicon_io/favicon-32x32.png') !!}">
        <link rel="icon" type="image/png" sizes="16x16" href="{!! URL::to('images/assets/favicon_io/favicon-16x16.png') !!}">
        <link rel="manifest" href="{!! URL::to('/images/assets/favicon_io/site.webmanifest') !!}">
    
        <meta name="robots" content="index,follow">
        <meta name="author" content="Sneaker-District">
        <meta name="HandheldFriendly" content="True">
        <meta name="theme-color" content="#ffffff">
        <meta name="MobileOptimized" content="320">
        <meta name="description" content="Only for the SNEAKER FREAKERS.World Trade Center, Abu Dhabi">
        <meta name="keywords" content="SneakerDistrict; SneakerDistrictAD; abudhabi; abudhabilife; abudhabifashion; uae; uaefashion; sneakerhead; hypebeast; hypebeaststyle; luxurylife; unitedarabemirates; lifestyle; instagood; instadaily; instafashion">
        <meta property="og:locale" content="en_US" />
        <meta property="og:title" content="The Official Abu Dhabi Sneaker District ME website" />
        <meta name="og:description" content="Only for the SNEAKER FREAKERS.World Trade Center, Abu Dhabi">
        <meta property="og:url" content="https://sneaker-district.com/" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Sneaker District" />
        <meta property="og:image" content="{!! URL::to('images/logo.png')!!}" />
        <meta property="og:image:secure_url" content="{!! URL::to('images/logo.png')!!}" />
        <meta property="og:image:width" content="980" />
        <meta property="og:image:height" content="981" />
        <meta itemprop="name" content="Sneaker District"/>
        <meta itemprop="description" content="Only for the SNEAKER FREAKERS.World Trade Center, Abu Dhabi"/>
        <meta itemprop="image" content="{!! URL::to('images/logo.png')!!}"/>
        <link rel="shortcut icon" type="image/x-icon" href="{!! URL::to('/images/assets/favicon_io/favicon-16x16.png') !!}">
        <link rel=”canonical” href=”https://sneaker-district.com/” />
    
        {{-- Css Files --}}
        <link rel="stylesheet" href="{!! asset('css/bootstrap/bootstrap.min.css') !!}" />
        <link rel="stylesheet" href="{!! asset('css/icofont/icofont.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/boxicons/boxicons.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/animate/animate.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/remixicon/remixicon.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/venobox/venobox.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/owlcarousel/owl.carousel.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/aos/aos.css') !!}" />
        {{-- <link rel="stylesheet" href="{!! asset('css/layout.css') !!}" /> --}}

          <!-- Template Main CSS File -->
        <link href="{!! asset('css/style.css') !!}" rel="stylesheet">
    
        {{-- Js Files --}}
        <script src="{!! asset('js/jquery.min.js') !!}"></script>
        <script src="{!! asset('js/bootstrap/bootstrap.bundle.min.js') !!}"></script>
        <script src="{!! asset('js/jquery-easing/jquery.easing.min.js') !!}"></script>
        <script src="{!! asset('js/waypoints/jquery.waypoints.min.js') !!}"></script>
        <script src="{!! asset('js/counterup/counterup.min.js') !!}"></script>
        <script src="{!! asset('js/venobox/venobox.min.js') !!}"></script>
        <script src="{!! asset('js/owlcarousel/owl.carousel.min.js') !!}"></script>
        <script src="{!! asset('js/isotope-layout/isotope.pkgd.min.js') !!}"></script>
        <script src="{!! asset('js/aos/aos.js') !!}"></script>
        <script src="{!! asset('js/parallax.js-1.5.0/parallax.js') !!}"></script>
        <script src="{!! asset('js/main.js') !!}"></script>
        <script src="http://www.instagram.com/embed.js"></script>
    </head>
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="/" class="logo me-auto"><img src="{!! URL::to('images/assets/logo.png') !!}" alt="sneaker-district-abu-dhabi"></a>
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                <li class="active"><a href="/">The Wall</a></li>
                <li><a href="#brands">Brands</a></li>
                <li><a href="#services">Youbetterfly</a></li>
                <li><a href="#portfolio">Customization</a></li>
                <li><a href="#team">Sneaker Cleaning</a></li>
                <li><a href="#contact">Sneaker Exchange</a></li>
                <li><a href="#contact">Contact</a></li>
                {{-- <li class="drop-down"><a href="">Origin 33</a>
                    <ul>
                    <li><a href="#">Drop Down 1</a></li>
                    <li class="drop-down"><a href="#">Deep Drop Down</a>
                        <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Drop Down 2</a></li>
                    <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li> --}}
                </ul>
            </nav><!-- .nav-menu -->
            </div>
        </header><!-- End Header -->
    </body>
</html>