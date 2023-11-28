<!doctype html>
<html class="no-js" lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - Academia Viva Bem</title>
    <meta name="description" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="keywords" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicons/favicon.png') }}">
    <link rel="manifest" href="{{ asset('img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
      Google Fonts
    ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700;800&family=Kumbh+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!--==============================
        All CSS File
    ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
    <!-- Flip Slider -->
    <link rel="stylesheet" href="{{ asset('css/jquery.flipster.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <!--********************************
        Code Start From Here
    ******************************** -->




    <!--==============================
     Preloader
    ==============================-->
     <div class="preloader ">
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
    <div class="popup-search-box">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="Search Here..">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="widget-about">
                    <div class="footer-logo">
                        <a href="index.html"><img src="{{ asset('img/logo-white.svg') }}" alt="Fitmas"></a>
                    </div>
                    <p class="about-text">Uma academia, também conhecida como centro de fitness ou clube de saúde, é uma instalação dedicada à saúde física e ao exercício, geralmente oferecendo uma variedade.</p>
                    <div class="social-btn">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">Nossos Links</h3>
                <ul class="menu">
                    <li><a href="{{ url('/sobre') }}">Sobre nós</a></li>
                    <li><a href="{{ url('/project-details') }}">Nossa Missão</a></li>
                    <li><a href="{{ url('/team') }}">Conheça As Equipes</a></li>
                    <li><a href="{{ url('/project') }}">Nossos Projetos</a></li>
                    <li><a href="{{ url('/contact') }}">Contato</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area text-center">
            <button class="menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ url('/index') }}"><img src="{{ asset('img/logo.svg') }}" alt="Fitmas"></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="#">Início</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ url('/index') }}">Home 01</a>
                            </li>
                            <li>
                                <a href="{{ url('/home-2') }}">Home 02</a>
                            </li>
                            <li>
                                <a href="{{ url('/home-3') }}">Home 03</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/team') }}">Team Page</a></li>
                            <li><a href="{{ url('/team-2') }}">Team Page 02</a></li>
                            <li><a href="{{ url('/team-details') }}">Team Details</a></li>
                            <li><a href="{{ url('/gallery') }}">Gallery Page</a></li>
                            <li><a href="{{ url('/gallery-2') }}">Gallery Page 02</a></li>
                            <li><a href="{{ url('/project') }}">Project Page</a></li>
                            <li><a href="{{ url('/project-details') }}">Project Details</a></li>
                            <li><a href="{{ url('/shop') }}">Shop Page</a></li>
                            <li><a href="{{ url('/shop-details') }}">Shop Details</a></li>
                            <li><a href="{{ url('/pricing') }}">Pricing Page</a></li>
                            <li><a href="{{ url('/error') }}">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Project</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/project') }}">Projects</a></li>
                            <li><a href="{{ url('/project-details') }}">Project Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Service</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/project-details') }}service.html">Service</a></li>
                            <li><a href="{{ url('/project-details') }}service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/project-details') }}blog.html">Blog</a></li>
                            <li><a href="{{ url('/project-details') }}blog-2.html">Blog 02</a></li>
                            <li><a href="{{ url('/project-details') }}blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Header Area
    ==============================-->
    <header class="nav-header header-layout2">
        <div class="header-top d-lg-block d-none">
            <div class="container-fluid">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="far fa-envelope"></i><a href="mailto:info@gmail.com">support@gmail.com</a></li>
                                <li><i class="far fa-clock"></i>Seg - Sab: 8.00 am-7.00 pm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li>
                                    <div class="social-links">
                                        <span class="me-3">Visite nossas redes sociais</span>
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-start justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="index.html"><img src="{{ asset('img/logo-white.svg') }}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto m-lg-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">Início</a>
                                        {{-- <ul class="sub-menu">
                                            <li>
                                                <a href="{{ url('/') }}">Home</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/home-2') }}">Home 02</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/home-3') }}">Home 03</a>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    <li>
                                        <a href="{{ url('/about') }}">Sobre</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ url('/service') }}">Serviços</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('/service') }}">Serviços</a></li>
                                            <li><a href="{{ url('/service-details') }}">Serviços Detalhes</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ url('/pages') }}">Páginas</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('/team') }}">Team Page</a></li>
                                            <li><a href="{{ url('/team-2') }}">Team Page 02</a></li>
                                            <li><a href="{{ url('/team-details') }}">Team Details</a></li>
                                            <li><a href="{{ url('/gallery') }}">Gallery Page</a></li>
                                            <li><a href="{{ url('/gallery-2') }}">Gallery Page 02</a></li>
                                            <li><a href="{{ url('/project') }}">Project Page</a></li>
                                            <li><a href="{{ url('/project-details') }}">Project Details</a></li>
                                            <li><a href="{{ url('/shop') }}">Shop Page</a></li>
                                            <li><a href="{{ url('/shop-details') }}">Shop Details</a></li>
                                            <li><a href="{{ url('/pricing') }}">Pricing Page</a></li>
                                            <li><a href="{{ url('/error') }}">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ url('/blog') }}">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('/blog') }}">Blog</a></li>
                                            <li><a href="{{ url('/blog-details') }}">Blog Detalhes</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ url('/contact') }}">Contato</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle icon-btn"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-xxl-block d-none">
                            <div class="navbar-right-desc">
                                <i class="fas fa-phone-volume"></i><a href="tel:+2590256215">+259 (0) 256 215</a>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <a href="{{ url('/contact') }}" class="btn style2 style-r0 d-xl-block d-none">
                                    Fazer um Orçamento
                                </a>
                                <button type="button" class="btn style-r0 btn-border3 sideMenuToggler">
                                    <i class="far fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <main>
        @yield('conteudo')
    </main>



    <!--==============================
        Footer Area
    ==============================-->
    <footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('img/bg/footer-1-bg.png') }}">
        <div class="container">
            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="widget-about">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ asset('img/logo-white.svg') }}" alt="Fitmas"></a>
                                </div>
                                <p class="about-text">A gym, also known as a fitness center or health club, is a facility dedicated to physical fitness and exercise gyms and typically offer a range</p>
                                <div class="social-btn">
                                    <a href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/" tabindex="0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/" tabindex="0"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ url('/about.php') }}">Sobre nós</a></li>
                                    <li><a href="{{ url('/service-details') }}">Nossa missão</a></li>
                                    <li><a href="{{ url('/team') }}">Meet The Teams</a></li>
                                    <li><a href="{{ url('/project') }}">Nossos Projetos</a></li>
                                    <li><a href="{{ url('/contact') }}">Contate-nos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Gallery</h3>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/widget/insta-feed1.png') }}" alt="Gallery Image">
                                    <a href="{{ asset('img/widget/insta-feed1.png') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/widget/insta-feed2.png') }}" alt="Gallery Image">
                                    <a href="{{ asset('img/widget/insta-feed2.png') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/widget/insta-feed3.png') }}" alt="Gallery Image">
                                    <a href="{{ asset('img/widget/insta-feed3.png') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/widget/insta-feed4.png') }}" alt="Gallery Image">
                                    <a href="{{ asset('img/widget/insta-feed4.png') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/widget/insta-feed5.png') }}" alt="Gallery Image">
                                    <a href="{{ asset('img/widget/insta-feed5.png') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="{{ asset('img/widget/insta-feed6.png') }}" alt="Gallery Image">
                                    <a href="{{ asset('img/widget/insta-feed6.png') }}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Get Newsletter</h3>
                            <p class="footer-text">Get 10% off your first order! Hurry up</p>
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <i class="far fa-envelope"></i>
                                    <input class="form-control" type="email" placeholder="Email Address" required="">
                                </div>
                                <button type="submit" class="btn style-r0 style2">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto align-self-center"><p class="copyright-text text-center">© 2023 <a href="#">Fitmas.</a> All Rights Reserved.</p></div>
                </div>
            </div>
        </div>
    </footer>

    <!--********************************
            Code End  Here
    ******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!-- Flip Slider -->
    <script src="{{ asset('js/jquery.flipster.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('js/bmi.calculator.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
