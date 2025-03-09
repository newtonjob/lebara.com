<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <title>Great Value Prepaid Mobile Plans | Lebara Nigeria</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Don't take our word for it!">
    <meta name="keywords" content="lebara">
    <meta name="author" content="VAS2Nets">

    <meta property="og:title" content="Great Value Prepaid Mobile Plans | Lebara Nigeria" />
    <meta property="og:description" content="Don't take our word for it!" />
    <meta property="og:image" content="{{ asset('og.jpg') }}" />

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@_newtonjob"/>
    <meta name="twitter:creator" content="@_newtonjob"/>

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Theme switcher (color modes) -->
    <script src="/assets/js/theme-switcher.js"></script>

    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('logo.png') }}">
    <link rel="manifest" href="/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#6366f1">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="/assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="/assets/vendor/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" media="screen" href="/assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" media="screen" href="/assets/vendor/lightgallery/css/lightgallery-bundle.min.css">

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="/assets/css/theme.min.css">

    <!-- Page loading styles -->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        [data-bs-theme="dark"] .page-loading {
            background-color: #0b0f19;
        }

        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }

        .page-loading.active > .page-loading-inner {
            opacity: 1;
        }

        .page-loading-inner > span {
            display: block;
            font-size: 1rem;
            font-weight: normal;
            color: #9397ad;
        }

        [data-bs-theme="dark"] .page-loading-inner > span {
            color: #fff;
            opacity: .6;
        }

        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #b4b7c9;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }

        [data-bs-theme="dark"] .page-spinner {
            border-color: rgba(255, 255, 255, .4);
            border-right-color: transparent;
        }

        @-webkit-keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .swal-button {
            background-color: #00a6eb !important;
        }
    </style>

    <!-- Page loading scripts -->
    <script>
        (function () {
            window.onload = function () {
                const preloader = document.querySelector('.page-loading');
                preloader.classList.remove('active');
                setTimeout(function () {
                    preloader.remove();
                }, 1000);
            };
        })();
    </script>
</head>
<body >
<!-- Page loading spinner -->
<div class="page-loading active">
    <div class="page-loading-inner">
        <div class="page-spinner"></div>
        <span>Loading...</span>
    </div>
</div>

<!-- Page wrapper for sticky footer -->
<!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
<main class="page-wrapper ">
    <!-- Navbar -->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
    <header class="header navbar navbar-expand-lg position-absolute navbar-sticky">
        <div class="container px-3">
            <a href="/" class="navbar-brand pe-3">
                <img src="{{ asset('logo.svg') }}" width="120" alt="Lebara">
            </a>
        </div>
    </header>

    <section class="jarallax vh-100" data-jarallax data-speed="0.4" data-bs-theme="dark">
        <span class="position-absolute top-0 start-0 w-100 vh-100 bg-gradient-primary-translucent d-none"></span>

        <video class="w-100 position-absolute object-fit-cover vh-100" autoplay muted loop>
            <source src="/lekki-video.mp4" type="video/mp4">
        </video>

        <div class="position-relative text-center zindex-5 overflow-hidden pt-4 py-md-5">

            <!-- Slider controls (Prev / next) -->
            <button type="button" id="hero-prev" class="btn btn-prev btn-icon btn-xl bg-transparent shadow-none position-absolute top-50 start-0 translate-middle-y d-none d-md-inline-flex ms-n3 ms-lg-2" aria-label="Previous">
                <i class="bx bx-chevron-left fs-1"></i>
            </button>
            <button type="button" id="hero-next" class="btn btn-next btn-icon btn-xl bg-transparent shadow-none position-absolute top-50 end-0 translate-middle-y d-none d-md-inline-flex me-n3 me-lg-2" aria-label="Next">
                <i class="bx bx-chevron-right fs-1"></i>
            </button>

            <!-- Slider -->
            <div class="container text-center py-xl-5">
                <div class="row justify-content-center pt-lg-5">
                    <div class="col-xl-8 col-lg-9 col-md-10 col-11">
                        <div class="swiper pt-5 pb-4 py-md-5"
                             data-swiper-options='{
                              "effect": "fade",
                              "speed": 500,
                              "autoplay": {
                                "delay": 5500,
                                "disableOnInteraction": false
                              },
                              "pagination": {
                                "el": ".swiper-pagination",
                                "clickable": true
                              },
                              "navigation": {
                                "prevEl": "#hero-prev",
                                "nextEl": "#hero-next"
                              }
                            }'
                        >
                            <div class="swiper-wrapper">
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <h2 class="display-2 from-start mb-lg-4">Welcome to Lebara Nigeria</h2>
                                    <div class="from-end">
                                        <p class="fs-xl text-white pb-2 mb-lg-5">
                                            Subscribe to get the insider gist of our launch and other premium offers.
                                        </p>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <h2 class="display-2 from-start mb-lg-4">
                                        Reliable. Affordable and premium service.
                                    </h2>
                                    <div class="from-end">
                                        <p class="fs-xl text-white pb-2 mb-lg-5">
                                            Subscribe to get the insider gist of our launch and other premium offers.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination (bullets) -->
                            <div class="swiper-pagination position-relative d-md-none pt-2 mt-5"></div>
                        </div>

                        <div class="row row-cols-4 g-4 pt-2 pt-md-3 pt-lg-2">
                            <div class="col">
                                <div class="d-flex align-items-center">
                                    <div class="display-4 text-primary" id="days">0</div>
                                    <p class="ps-1 mb-0 text-white">days</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center">
                                    <div class="display-4 text-primary" id="hours">0</div>
                                    <p class="ps-1 mb-0 text-white">hours</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center">
                                    <div class="display-4 text-primary" id="minutes">0</div>
                                    <p class="ps-1 mb-0 text-white">mins</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center">
                                    <div class="display-4 text-primary" id="seconds">0</div>
                                    <p class="ps-1 mb-0 text-white">secs</p>
                                </div>
                            </div>
                        </div>

                        <form
                            action="/join"
                            x-data="{ form: $form() }"
                            @submit.prevent="form.submit()"
                            @then="swal('Well done!', 'We\'ll be in touch.', 'success'); $el.reset()"
                        >
                            <div class="mt-4">
                                <div class="form-floating">
                                    <input class="form-control text-white border-white border-3" type="text" id="fl-text" name="email" placeholder="Your email address" required>
                                    <label for="fl-text" class="text-white">Your email address...</label>
                                </div>
                            </div>

                            <div class="py-2 py-lg-3">
                                <button class="btn btn-primary shadow-primary btn-lg mb-3">Join the wait list</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Back to top button -->
<a href="javascript:top" class="btn-scroll-top" data-scroll>
    <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
    <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
</a>

<script>
    class Countdown {
        initCountDown() {
            if (document.getElementById("days")) {
                var eventCountDown = new Date("May 30, 2025 16:37:52").getTime();

                var countdown = setInterval(function () {

                    var now = new Date().getTime();
                    var timeleft = eventCountDown - now;

                    // Calculating the days, hours, minutes and seconds left
                    var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

                    // Result is output to the specific element
                    document.getElementById("days").innerHTML = days
                    document.getElementById("hours").innerHTML = hours
                    document.getElementById("minutes").innerHTML = minutes
                    document.getElementById("seconds").innerHTML = seconds

                    // Display the message when countdown is over
                    if (timeleft < 0) {
                        clearInterval(countdown);
                        document.getElementById("days").innerHTML = ""
                        document.getElementById("hours").innerHTML = ""
                        document.getElementById("minutes").innerHTML = ""
                        document.getElementById("seconds").innerHTML = ""
                        document.getElementById("end").innerHTML = "00:00:00:00";
                    }
                }, 1000);
            }
        }

        init() {
            this.initCountDown();
        }
    }

    new Countdown().init();
</script>

<!-- Vendor Scripts -->
<script src="/assets/vendor/parallax-js/dist/parallax.min.js"></script>
<script src="/assets/vendor/rellax/rellax.min.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

<script src="/assets/vendor/lightgallery/plugins/video/lg-video.min.js"></script>
<script src="/assets/vendor/lightgallery/lightgallery.min.js"></script>

<!-- Main Theme Script -->
<script src="/assets/js/theme.min.js"></script>

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="https://unpkg.com/axios@1.4.0/dist/axios.min.js"></script>
<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
<script src="{{ asset('assets/js/form.js') }}"></script>

</body>
</html>
