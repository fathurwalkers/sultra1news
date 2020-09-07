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
                                    <img src="{{ asset('/assets/aznews/img/hero/header_card.jpg') }}" alt="">
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

                                                    @foreach ($kategori2 as $kat)
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
        <!-- Whats New Start -->
        <section class="whats-news-area pt-50 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-3 col-md-3">
                                <div class="section-tittle mb-30">
                                    <h3>Kategori</h3>
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

                                                @foreach ($match as $article)
                                                <?php $match2 = \App\Article::where('id', $article->article_id)->get() ?>
                                                @foreach ($match2 as $articlesfetch)
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="../../{{ $articlesfetch->gambar }}" alt=""
                                                                width="370" height="344">
                                                        </div>
                                                        <div class="what-cap">
                                                            <h4><a
                                                                    href="{{ url('show') }}/{{ $articlesfetch->id }}/{{ $articlesfetch->post_slug }}">{{ $articlesfetch->post_judul }}</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @endforeach


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
                    <div class="col-lg-4 border">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search Keyword"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Search Keyword'">
                                            <div class="input-group-append">
                                                <button class="btns" type="button"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Search</button>
                                </form>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Recent Post</h3>
                                @foreach ($articles4 as $post4)
                                <div class="media post_item">
                                    <img src="../../{{ $post4->gambar }}" alt="post" width="115" height="100">
                                    <div class="media-body">
                                        <a href="{{ url('show') }}/{{ $post4->id }}/{{ $post4->post_slug }}">
                                            <h3>{{ $post4->post_judul }}</h3>
                                        </a>
                                    </div>
                                </div>
                                @endforeach

                            </aside>
                            <aside class="single_sidebar_widget tag_cloud_widget">
                                <h4 class="widget_title">Tag Clouds</h4>
                                <ul class="list">
                                    @foreach ($kategori3 as $one)
                                    <li>
                                        <a href="#">{{ $one->kategori_nama }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </aside>

                            <aside class="single_sidebar_widget newsletter_widget">
                                <h4 class="widget_title">Newsletter</h4>
                                <form action="#">
                                    <div class="form-group">
                                        <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email'" placeholder="Enter email"
                                            required="">
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Subscribe</button>
                                </form>
                            </aside>
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
                                        <p>
                                            Sultra1News adalah Media Online (Siber) yang menyediakan berita dari
                                            berbagai bagian terkhusus
                                            provinsi Sulawesi Tenggara. Seperti pada moto Kami "Investigasi dalam
                                            Berita", yang berarti
                                            berita kami berasal dari investigasi berdasarkan fakta yang ada dan tidak
                                            dibuat-buat.
                                            kami bertekad untuk selalu menyediakan berita yang berkualitas sehingga para
                                            pembaca akan lebih
                                            merasa puas dengan apa yang kami sediakan.
                                        </p>
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
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <p>Heaven fruitful doesn't over les idays appear creeping</p>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email"
                                                placeholder="Email Address" class="placeholder hide-on-focus"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img
                                                        src="assets/img/logo/form-iocn.png" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50 mt-60">
                            <div class="footer-tittle">
                                <h4>
                                    {{-- header content  --}}
                                </h4>
                            </div>
                            <div class="instagram-gellay">
                                {{-- Content  --}}
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
                                    </script> All rights reserved | Forged by Sultra1News <i class="ti-heart"
                                        aria-hidden="true"></i>
                                    {{-- by <a href="https://colorlib.com"
                                        target="_blank">Colorlib</a> --}}
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