<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/aznews/img/favicon-sultra.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/aznews/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aznews/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aznews/css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aznews/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aznews/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aznews/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aznews/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aznews/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aznews/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aznews/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aznews/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/aznews/css/style.css') }}">
</head>

<body>
    @include('sweetalert::alert')

    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><img src="assets/img/icon/header_icon1.png" alt="">34ºc, Sunny </li>
                                        <li><img src="assets/img/icon/header_icon1.png" alt="">Tuesday, 18th June, 2019
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-mid d-none d-md-block">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('assets/aznews/img/logo/logobaru.png') }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="assets/img/hero/header_card.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="index.html"><img src="{{ asset('assets/aznews/img/logo/logobaru.png') }}"
                                            alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ url('/') }}">BERANDA</a></li>
                                            <li><a href="{{ url('/') }}">SULTRANEWS</a>
                                                <ul class="submenu">

                                                    @foreach ($kategori as $kat)
                                                    <li><a
                                                            href="{{url('/kategori')}}/{{$kat->id}}/{{$kat->kategori_nama}}">{{ $kat->kategori_nama }}</a>
                                                    </li>
                                                    @endforeach

                                                </ul>
                                            </li>
                                            <li><a href="{{ url('/redaksi') }}">REDAKSI</a></li>
                                            <li><a href="{{ url('/hubungi-kami') }}">HUBUNGI KAMI</a></li>
                                            <li><a href="{{ url('/about') }}">ABOUT</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="Search">

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <main>
        <div class="trending-area fix">
            <div class="container">
                <div class="trending-main">
                    <!-- Trending Tittle -->
                    <div class="row mt-4">
                        <div class="col-lg-8">
                            <!-- Trending Top -->

                            @foreach ($article1 as $article11)
                            <div class="trending-top mb-30">
                                <div class="trend-top-img img-fluid">
                                    <img src="{{ $article11->gambar }}" alt="">

                                    {{-- width="770" height="441" --}}

                                    <div class="trend-top-cap">
                                        <h2><a
                                                href="{{ url('show') }}/{{ $article11->id }}/{{ $article11->post_slug }}">{{ $article11->post_judul }}</a>
                                        </h2>
                                        @foreach ($article11->kategoris as $cat2)
                                        <span class="color3">{{ $cat2->kategori_nama }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <!-- Trending Bottom -->
                            <div class="trending-bottom">
                                <div class="row">

                                    @foreach ($article3 as $article33)
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="{{ $article33->gambar }}" alt="" width="237" height="158">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color3">BERITA PILIHAN</span>
                                                <h4>
                                                    <a
                                                        href="{{ url('show') }}/{{ $article33->id }}/{{ $article33->post_slug }}">{{ $article33->post_judul }}
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                        <!-- Riht content -->
                        <div class="col-lg-4">

                            @foreach ($articles_min as $article_min)
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="{{ asset($article_min->gambar) }}" alt="" width="120" height="100">
                                </div>
                                <div class="trand-right-cap">

                                    @foreach ($article_min->kategoris as $cat1)
                                    <span class="color3">{{ $cat1->kategori_nama }}</span>
                                    @endforeach

                                    <h4><a
                                            href="{{ url('show') }}/{{ $article_min->id }}/{{ $article_min->post_slug }}">{{ $article_min->post_judul }}</a>
                                    </h4>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Area End -->
        <!--   Weekly-News start -->
        <div class="weekly-news-area pt-50">
            <div class="container">
                <div class="weekly-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3>Weekly Top News</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="weekly-news-active dot-style d-flex dot-style">

                                @foreach ($articles_min as $article)
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                        <img src="{{ asset($article->gambar) }}" alt="" width="370" height="432">
                                    </div>
                                    <div class="weekly-caption">
                                        <span class="color1">SULTRA1NEWS</span>
                                        <h4><a
                                                href="{{ url('show') }}/{{ $article->id }}/{{ $article->post_slug }}">{{ $article->post_judul }}</a>
                                        </h4>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Weekly-News -->
        <!-- Whats New Start -->
        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-3 col-md-3">
                                <div class="section-tittle mb-30">
                                    <h3>Whats New</h3>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="properties__button">
                                    <!--Nav Button  -->
                                    {{-- <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                                href="#nav-home" role="tab" aria-controls="nav-home"
                                                aria-selected="true">All</a>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                                href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                aria-selected="false">Lifestyle</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">Travel</a>
                                            <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab"
                                                href="#nav-last" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">Fashion</a>
                                            <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab"
                                                href="#nav-nav-Sport" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">Sports</a>
                                            <a class="nav-item nav-link" id="nav-technology" data-toggle="tab"
                                                href="#nav-techno" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">Technology</a>
                                        </div>
                                    </nav> --}}
                                    <!--End Nav Button  -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- card one -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">

                                                @foreach ($article8 as $article88)
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="{{ $article88->gambar }}" alt="" width="370"
                                                                height="344">
                                                        </div>
                                                        <div class="what-cap">
                                                            <h4><a
                                                                    href="{{ url('show') }}/{{ $article88->id }}/{{ $article88->post_slug }}">{{ $article88->post_judul }}</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="d-inline-flex">
                                                {{ $article8->links() }}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card two -->

                                    <!-- Card three -->

                                    <!-- card fure -->

                                    <!-- card Five -->

                                    <!-- card Six -->

                                </div>
                                <!-- End Nav Card -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- New Poster -->
                        <div class="section-tittle mb-40">
                            <div class="news-poster d-none d-lg-block">
                                <img src="{{ asset('assets/aznews/img/news/news_card.jpg') }}" alt="">
                            </div>
                        </div>
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <img src="{{ asset('assets/aznews/img/news/news_card.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Whats New End -->
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ asset('assets/aznews/img/logo/logobaru.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames
                                            lectus tempor da blandit gravida sodales Suscipit mauris pede for con
                                            sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida
                                            sodales Suscipit mauris pede for sectetuer.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Contact Us</h4>
                                <p>
                                    Alamat : Jln. Bakti Abri No.5, Bukit Wolio Indah Kota Baubau. Sulawesi
                                    Tenggara<br />
                                    Telpon HP : +6281245905999<br />
                                    Email : sultra1news@gmail.com<br />
                                    Kontak Iklan : sultra1news@gmail.com – 0402 – 2811 – 930
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i class="ti-heart"
                                        aria-hidden="true"></i> by <a href="https://colorlib.com"
                                        target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>
                                    <li><a href="{{ url('/redaksi') }}">Redaksi</a></li>
                                    <li><a href="{{ url('/pedoman-media-siber') }}">Pedoman Media Siber</a></li>
                                    <li><a href="{{ url('/hubungi-kami') }}">Hubungi Kami</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset('assets/aznews/js/vendor/modernizr-3.5.0.min.js') }}">
    </script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('assets/aznews/js/vendor/jquery-1.12.4.min.js') }}">
    </script>
    <script src="{{ asset('assets/aznews/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/aznews/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('assets/aznews/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('assets/aznews/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/aznews/js/slick.min.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset('assets/aznews/js/gijgo.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('assets/aznews/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/aznews/js/animated.headline.js') }}"></script>
    <script src="{{ asset('assets/aznews/js/jquery.magnific-popup.js') }}"></script>

    <!-- Breaking New Pluging -->
    <script src="{{ asset('assets/aznews/js/jquery.ticker.js') }}"></script>
    <script src="{{ asset('assets/aznews/js/site.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset('assets/aznews/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/aznews/js/jquery.nice-select.min.js') }}">
    </script>
    <script src="{{ asset('assets/aznews/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('assets/aznews/js/contact.js') }}"></script>
    <script src="{{ asset('assets/aznews/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/aznews/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/aznews/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/aznews/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('assets/aznews/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/aznews/js/main.js') }}"></script>

</body>

</html>