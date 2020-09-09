<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Redaksi - Sultra1News</title>
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
        <section class="blog_area single-post-area mt-4 mb-7">
            <div class="container">
                <div class="row border">
                    <div class="col-lg-8 posts-list">
                        <div class="card w-100 mt-3">
                            <div class="card-body">
                                <h5 class="card-title"><b>REDAKSI</b></h5>
                                <p class="card-text">
                                    <b>Pimpinan Perusahaan :</b><br />
                                    - Djery Lihawa<br />
                                    <br />
                                    <b>Redaktur Pemberitaan / Penanggung Jawab :</b><br />
                                    - Djery Lihawa .S.Kom<br />
                                    <br />
                                    <b>Pemimpin Redaksi :</b><br />
                                    - Fahmy Fotaleno<br />
                                    <br />
                                    <b>Wakil Pemimpin Redaksi :</b><br />
                                    - Isharto<br />
                                    <br />
                                    <b>Redaktur Pelaksana :</b><br />
                                    - La Ode Agus<br />
                                    <br />
                                    <b>Kepala Peliputan :</b><br />
                                    - Fathur Walkers / Daerah dan Luar Negeri<br />
                                    - Bung Iwan / Jakarta Jabotabek<br />
                                    - Fataleno / Jakarta Jabotabek<br />
                                    - Genjy Arun / Indonesia Timur<br />
                                    - Jum Rama Saputra / Daerah Sulawesi<br />
                                    - Djery Lihawa /Kepala Peliputan Investigator Korupsi<br />
                                    - Yudi Hendra Rahim / Redaktur Pemberitaan Kasus Korupsi Sulawesi<br />
                                    <br />
                                    <b>Tim Jurnalis Peliputan SultraSatu News :</b><br />
                                    - Djery Lihawa (Redaktur Investigasi Pemberitaan)<br />
                                    - Fathur Walkers (Pemberitaan Luar Negeri)<br />
                                    - Genjy Arun (Wartawan Investigasi)<br />
                                    - Muh. Amir<br />
                                    - Bung Iwan (Informan Dalam Negeri)<br />
                                    - La Ode Agus, Djaelani (Wartawan Pidana dan Hukum)<br />
                                    - Cakra (Editor dan Publisher)<br />
                                    - Assyuraul Jannah (Marketting)<br />
                                    - Adhyatma Teguh (Wartawan SultraSatu.News)<br />
                                    - Jum Rama Saputra (Wartawan SultraSatu.News)<br />
                                    - Chimenk (Wartawan SultraSatu.News)<br />
                                    - Yudi Hendra (Wartawan SultraSatu.News)<br />
                                    <br />
                                    <b>Ombutsman PT. Sultra Satu News :</b><br />
                                    - Ardi, SH.<br />
                                    <br />
                                    <u>Seluruh Karyawan PT. Sultra Satu News adalah Anggota Lembaga Pewarta
                                        Indonesia<br />
                                        (Persatuan Wartawan Indonesia) https://www.sultra1news.com/ | Media Cyber
                                        Group.</u><br />
                                    <br />
                                    <br />
                                    <b>Hubungi Kami</b><br />
                                    Alamat Redaksi : Jln. Bakti Abri No.5, Bukit Wolio Indah Kota Baubau. Sulawesi
                                    Tenggara<br />
                                    Telpon HP : +6281245905999<br />
                                    Telp Kantor : 0402 – 2811 – 930<br />
                                    Facebook Fans Page : https://www.facebook.com/Sultra1Newscom-891271094375046/<br />
                                    Email : redaksi@sultra1news.com<br />
                                    Twitter : https://twitter.com/sultra1news<br />
                                    Kontak Iklan : sultra1news@gmail.com – 0402 – 2811 – 930<br />
                                </p>
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

                                @foreach ($articles_4 as $article4)
                                <div class="media post_item">
                                    <img src="../../{{ $article4->gambar }}" alt="post" width="115" height="100">
                                    <div class="media-body">
                                        <a href="{{ url('show') }}/{{ $article4->id }}/{{ $article4->post_slug }}">
                                            <h3>{{ $article4->post_judul }}</h3>
                                        </a>
                                    </div>
                                </div>
                                @endforeach

                            </aside>
                            <aside class="single_sidebar_widget tag_cloud_widget">
                                <h4 class="widget_title">Tag Clouds</h4>
                                <ul class="list">
                                    @foreach ($kategori as $one)
                                    <li>
                                        <a
                                            href="{{url('/kategori')}}/{{$one->id}}/{{$one->kategori_nama}}">{{ $one->kategori_nama }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </aside>

                            <aside class="single_sidebar_widget newsletter_widget">
                                {{-- width = 300 x height = 755 --}}
                                <div class="news-poster d-none d-lg-block">
                                    <img src="{{ asset('assets/aznews/img/news/news_card.jpg') }}" alt="">
                                </div>
                                <br>
                                <div class="news-poster d-none d-lg-block">
                                    <img src="{{ asset('assets/aznews/img/news/news_card.jpg') }}" alt="">
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

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