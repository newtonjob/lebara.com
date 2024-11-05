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
    <script src="assets/js/theme-switcher.js"></script>

    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('logo.png') }}">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#6366f1">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="assets/vendor/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" media="screen" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" media="screen" href="assets/vendor/lightgallery/css/lightgallery-bundle.min.css">

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="assets/css/theme.min.css?v={{ time() }}">

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
<body>
<!-- Page loading spinner -->
<div class="page-loading active">
    <div class="page-loading-inner">
        <div class="page-spinner"></div>
        <span>Loading...</span>
    </div>
</div>

<!-- Page wrapper for sticky footer -->
<!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
<main class="page-wrapper">
    <!-- Navbar -->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
    <header class="header navbar navbar-expand-lg position-absolute navbar-sticky">
        <div class="container px-3">
            <a href="index.html" class="navbar-brand pe-3">
                <img src="{{ asset('logo.svg') }}" width="120" alt="Lebara">
            </a>
            <div id="navbarNav" class="offcanvas offcanvas-end">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="javascript:" class="nav-link">Roaming</a>
                        </li>

                        <li class="nav-item">
                            <a href="javascript:" class="nav-link">Top up</a>
                        </li>
                    </ul>
                </div>
                <div class="offcanvas-header border-top">
                    <a href="javascript:"
                       class="btn btn-primary w-100" target="_blank" rel="noopener">
                        <i class="bx bx-cart fs-4 lh-1 me-1"></i>
                        &nbsp;Buy now
                    </a>
                </div>
            </div>
            <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
                <input type="checkbox" class="form-check-input" id="theme-mode">
                <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
                <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
            </div>
            <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="javascript:"
               class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex" target="_blank" rel="noopener">
                <i class="bx bx-cart fs-5 lh-1 me-1"></i>
                &nbsp;Buy now
            </a>
        </div>
    </header>


    <!-- Hero -->
    <section class="container py-5 mt-5 mt-md-4 mb-md-3 mb-lg-4 mb-xl-5">
        <div class="row align-items-center align-items-lg-stretch mb-2 mb-sm-3">

            <!-- Parallax gfx -->
            <div
                class="col-xl-7 col-md-6 d-flex justify-content-center justify-content-md-end overflow-hidden order-md-2 mt-n5 mt-sm-n4 mt-md-0">
                <div class="position-relative mt-5" style="max-width: 660px;">
                    <div class="bg-gradient-primary position-absolute start-0 bottom-0 w-100 rounded-3 opacity-15"
                         style="height: 95%;"></div>
                    <div class="parallax zindex-2">
                        <div class="parallax-layer zindex-2 mb-n3" data-depth="0.1">
                            <img src="{{ asset('layer01.png') }}" alt="Device">
                        </div>
                        <div class="parallax-layer" data-depth="-0.22">
                            <img src="{{ asset('layer02.png') }}" alt="Bubble">
                        </div>
                        <div class="parallax-layer" data-depth="0.3">
                            <img src="{{ asset('layer03.png') }}" alt="Bubble">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Text -->
            <div class="col-xl-5 col-md-6 d-flex flex-column order-md-1">
                <div class="text-center text-md-start pt-4 pt-sm-5 pt-xl-0 mt-2 mt-sm-0 mt-lg-auto">
                    <h1 class="display-3 mb-4">The Smarter Way to Connect</h1>
                    <p class="fs-lg mb-0 d-md-none d-xl-block">Don't just take our word for it!</p>
                    <div
                        class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start pt-2 mt-4 mt-md-5">
                        <a href="https://apps.apple.com/gb/app/mylebara/id1122491914"
                           class="btn btn-dark btn-lg px-3 py-2 me-sm-3 me-lg-4 mb-3">
                            <img src="assets/img/market/appstore-light.svg" class="light-mode-img" width="124"
                                 alt="App Store">
                            <img src="assets/img/market/appstore-dark.svg" class="dark-mode-img" width="124"
                                 alt="App Store">
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.lebara.wallet&hl=en&pli=1" class="btn btn-dark btn-lg px-3 py-2 mb-3">
                            <img src="assets/img/market/googleplay-light.svg" class="light-mode-img" width="139"
                                 alt="Google Play">
                            <img src="assets/img/market/googleplay-dark.svg" class="dark-mode-img" width="139"
                                 alt="Google Play">
                        </a>
                    </div>
                </div>
                <div
                    class="d-sm-flex d-md-none d-lg-flex justify-content-center justify-content-md-start mt-auto pt-3 pt-md-0">
                    <div class="d-flex align-items-center w-100 pe-xxl-2 mb-2 mb-md-0">
                        <div class="h1 mb-0">23k+</div>
                        <div class="ps-2 ms-1">App downloads</div>
                    </div>
                    <div class="vr d-none d-sm-block text-border my-2 mx-4"></div>
                    <div class="d-flex align-items-center w-100 ps-xxl-2">
                        <div class="h1 mb-0">13m+</div>
                        <div class="ps-2 ms-1">Calls every day</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Stats -->
    <section class="bg-dark position-relative pt-5 pb-4 py-md-5" data-bs-theme="dark">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-secondary"></div>
        <div class="container position-relative zindex-3 py-lg-4 pt-md-2 py-xl-5 mb-lg-4">

            <!-- Title -->
            <div class="row justify-content-center text-center pb-4 mb-2">
                <div class="col-xl-6 pt-2">
                    <h2 class="h1 mb-4">Best SIM-Only Deals</h2>
                    <p class="text-body fs-lg mb-0">No long contracts only 30-day rolling plans. Change or cancel your plan anytime.</p>
                </div>
            </div>

            <!-- Table -->
            <div class="d-sm-flex flex-wrap d-lg-table w-100">

                <!-- Row -->
                <div class="d-lg-table-row w-sm-50 w-lg-100 pe-sm-3 pe-lg-0 mb-3 mb-lg-0">
                    <div class="d-lg-table-cell align-middle border-bottom py-3 py-lg-4">
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h3 class="h4 mb-0">5<span class="d-inlin-block opacity-60 ps-2">GB</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-table-cell align-middle h4 border-bottom py-3 py-lg-4 mb-0">N3,000</div>

                    <div class="d-lg-table-cell align-middle border-bottom-lg py-3 py-lg-4">
                        <img src="assets/img/landing/app-showcase-2/crypto/graphs/btc.svg" width="108" alt="BTC graph">
                    </div>
                    <div class="d-lg-table-cell align-middle border-bottom-lg text-lg-end pt-2 pb-3 py-lg-4">
                        <button type="button" class="btn btn-sm btn-outline-secondary fs-sm w-100 w-lg-auto">Buy
                        </button>
                    </div>
                </div>

                <!-- Row -->
                <div class="d-lg-table-row w-sm-50 w-lg-100 ps-sm-3 ps-lg-0 mb-3 mb-lg-0">
                    <div class="d-lg-table-cell align-middle border-bottom py-3 py-lg-4">
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h3 class="h4 mb-0">25<span class="d-inlin-block opacity-60 ps-2">GB</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-table-cell align-middle h4 border-bottom py-3 py-lg-4 mb-0">N10,000</div>

                    <div class="d-lg-table-cell align-middle border-bottom-lg py-3 py-lg-4">
                        <img src="assets/img/landing/app-showcase-2/crypto/graphs/usdt.svg" width="108"
                             alt="USDT graph">
                    </div>
                    <div class="d-lg-table-cell align-middle border-bottom-lg text-lg-end pt-2 pb-3 py-lg-4">
                        <button type="button" class="btn btn-sm btn-outline-secondary fs-sm w-100 w-lg-auto">Buy
                        </button>
                    </div>
                </div>

                <!-- Row -->
                <div class="d-lg-table-row w-sm-50 w-lg-100 pe-sm-3 pe-lg-0 mb-3 mb-lg-0">
                    <div class="d-lg-table-cell align-middle border-bottom py-3 py-lg-4">
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h3 class="h4 mb-0">40<span class="d-inlin-block opacity-60 ps-2">GB</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-table-cell align-middle h4 border-bottom py-3 py-lg-4 mb-0">N28,000</div>

                    <div class="d-lg-table-cell align-middle border-bottom-lg py-3 py-lg-4">
                        <img src="assets/img/landing/app-showcase-2/crypto/graphs/eth.svg" width="108" alt="ETH graph">
                    </div>
                    <div class="d-lg-table-cell align-middle border-bottom-lg text-lg-end pt-2 pb-3 py-lg-4">
                        <button type="button" class="btn btn-sm btn-outline-secondary fs-sm w-100 w-lg-auto">Buy
                        </button>
                    </div>
                </div>

                <!-- Row -->
                <div class="d-lg-table-row w-sm-50 w-lg-100 ps-sm-3 ps-lg-0 mb-3 mb-lg-0">
                    <div class="d-lg-table-cell align-middle border-bottom py-3 py-lg-4">
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <h3 class="h4 mb-0">Unlimited</h3>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-table-cell align-middle h4 border-bottom py-3 py-lg-4 mb-0">N120,000</div>

                    <div class="d-lg-table-cell align-middle border-bottom-lg py-3 py-lg-4">
                        <img src="assets/img/landing/app-showcase-2/crypto/graphs/dot.svg" width="108" alt="DOT graph">
                    </div>
                    <div class="d-lg-table-cell align-middle border-bottom-lg text-lg-end pt-2 pb-3 py-lg-4">
                        <button type="button" class="btn btn-sm btn-outline-secondary fs-sm w-100 w-lg-auto">Buy
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Features -->
    <section class="container py-5 my-md-3 my-lg-4 my-xl-5">
        <div class="row align-items-center align-items-xl-end py-2 pb-sm-3">
            <div class="col-md-6 mb-5 mb-md-0">
                <div style="max-width: 570px;">
                    <h2 class="h1 pb-3 mb-2 mb-md-3"> Why Choose Lebara?</h2>
                    <div class="row row-cols-1 row-cols-sm-2 gx-lg-5 g-4">
                        <div class="col d-md-flex d-xl-block align-items-center pt-1 pt-sm-2 pt-md-0 pt-xl-3">
                            <div class="d-table bg-secondary rounded flex-shrink-0 p-2 mb-3 me-md-3 me-xl-0">
                                <img src="assets/img/landing/app-showcase-2/features/payments.svg" width="19"
                                     class="d-block m-1" alt="Icon">
                            </div>
                            <h3 class="h5 pb-sm-1 mb-2">
                                <span class="d-md-none d-xl-block">No Strings Attached</span>
                                <span class="fs-base text-nav d-none d-md-block d-xl-none">No Strings Attached</span>
                            </h3>
                            <p class="fs-sm mb-0 d-md-none d-xl-block">
                                No contract or commitment. Change or cancel your prepaid plan whenever you want. Pay only for what you use.
                            </p>
                        </div>
                        <div class="col d-md-flex d-xl-block align-items-center pt-1 pt-sm-2 pt-md-0 pt-xl-3">
                            <div class="d-table bg-secondary rounded flex-shrink-0 p-2 mb-3 me-md-3 me-xl-0">
                                <img src="assets/img/landing/app-showcase-2/features/cashback.svg" width="19"
                                     class="d-block m-1" alt="Icon">
                            </div>
                            <h3 class="h5 pb-sm-1 mb-2">
                                <span class="d-md-none d-xl-block">Total control</span>
                                <span class="fs-base text-nav d-none d-md-block d-xl-none">Total control</span>
                            </h3>
                            <p class="fs-sm mb-0 d-md-none d-xl-block">
                                Check your balance and details of your purchases in our app. You can also top up your balance easily.
                            </p>
                        </div>
                        <div class="col d-md-flex d-xl-block align-items-center pt-1 pt-sm-2 pt-md-0 pt-xl-3">
                            <div class="d-table bg-secondary rounded flex-shrink-0 p-2 mb-3 me-md-3 me-xl-0">
                                <img src="assets/img/landing/app-showcase-2/features/statistics.svg" width="19"
                                     class="d-block m-1" alt="Icon">
                            </div>
                            <h3 class="h5 pb-sm-1 mb-2">
                                <span class="d-md-none d-xl-block">5G speed</span>
                                <span class="fs-base text-nav d-none d-md-block d-xl-none">5G speed</span>
                            </h3>
                            <p class="fs-sm mb-0 d-md-none d-xl-block">
                                Browse at top speed with 5G technology on all our plans. And without paying more!
                            </p>
                        </div>
                        <div class="col d-md-flex d-xl-block align-items-center pt-1 pt-sm-2 pt-md-0 pt-xl-3">
                            <div class="d-table bg-secondary rounded flex-shrink-0 p-2 mb-3 me-md-3 me-xl-0">
                                <img src="assets/img/landing/app-showcase-2/features/security.svg" width="19"
                                     class="d-block m-1" alt="Icon">
                            </div>
                            <h3 class="h5 pb-sm-1 mb-2">
                                <span class="d-md-none d-xl-block">No Credit Checks</span>
                                <span class="fs-base text-nav d-none d-md-block d-xl-none">No Credit Checks</span>
                            </h3>
                            <p class="fs-sm mb-0 d-md-none d-xl-block">
                                Hassle-free sign up - it usually takes less than a minute.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="rellax position-relative rounded-3 mb-xl-5"
                     style="box-shadow: -7px 12px 60px 0 rgba(126,123,160, .12);" data-rellax-percentage="0.5"
                     data-rellax-speed="1.3" data-disable-parallax-down="xl">
                    <img src="{{ asset('stats.jpg') }}" class="d-block rounded-3" alt="Stats screen">
                </div>
            </div>
        </div>
    </section>


    <!-- How it works (Slider) -->
    <section class="container">
        <div class="text-center pb-4 mb-3 mx-auto" style="max-width: 530px;">
            <h2 class="h1">How Does It Work?</h2>
            <p class="mb-0">The MyLebara app is free, but data charges may apply</p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 pb-4 pb-md-0 mb-2 mb-md-0">

                <!-- Swiper tabs -->
                <div class="position-relative px-5">
                    <div class="swiper-tabs zindex-2 mx-auto" style="max-width: 384px;">
                        <div id="screen-1" class="swiper-tab active">
                            <img src="/01.png" alt="App screen">
                        </div>
                        <div id="screen-2" class="swiper-tab">
                            <img src="/02.png" alt="App screen">
                        </div>
                        <div id="screen-3" class="swiper-tab">
                            <img src="/03.png" alt="App screen">
                        </div>
                    </div>
                    <div class="bg-gradient-primary position-absolute start-0 bottom-0 w-100 opacity-15 rounded-3"
                         style="height: 86.5%;"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 offset-lg-1">
                <div class="ps-md-4 ps-lg-0">

                    <!-- Swiper slider -->
                    <div class="swiper text-center text-md-start mt-auto" data-swiper-options='{
                "spaceBetween": 30,
                "loop": true,
                "tabs": true,
                "navigation": {
                  "prevEl": "#prev-screen",
                  "nextEl": "#next-screen"
                }
              }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-swiper-tab="#screen-1">
                                <div class="fs-xl text-muted mb-3 mb-lg-4">Step 1</div>
                                <h3 class="mb-lg-4">Create your account</h3>
                                <p>This helps you manage your account securely and track your usage easily.</p>
                            </div>
                            <div class="swiper-slide" data-swiper-tab="#screen-2">
                                <div class="fs-xl text-muted mb-3 mb-lg-4">Step 2</div>
                                <h3 class="mb-lg-4">Set up payment details</h3>
                                <p>Top up or change your plan on the go.</p>
                            </div>
                            <div class="swiper-slide" data-swiper-tab="#screen-3">
                                <div class="fs-xl text-muted mb-3 mb-lg-4">Step 3</div>
                                <h3 class="mb-lg-4">Purchase Plans</h3>
                                <p>Top up or change your plan on the go. Access Rewards at your fingertips.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slider controls (Prev / next) -->
                    <div class="d-flex justify-content-center justify-content-md-start pt-2 pt-lg-3">
                        <button type="button" id="prev-screen" class="btn btn-prev btn-icon btn-sm me-2"
                                aria-label="Previous">
                            <i class="bx bx-chevron-left"></i>
                        </button>
                        <button type="button" id="next-screen" class="btn btn-next btn-icon btn-sm ms-2"
                                aria-label="Next">
                            <i class="bx bx-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video section -->
    <section class="bg-dark pt-4 pt-sm-5 overflow-hidden" data-bs-theme="dark">
        <div class="container pt-xl-4 pt-xxl-5" style="margin-bottom: -1.75rem;">
            <div class="row py-4 pb-sm-5 mb-3 mb-sm-0 mb-lg-4">
                <div class="col-md-6 mb-xl-2">
                    <h2 class="h1 mb-md-0" style="max-width: 560px;">The main advantage of Lebara is the combination of <span class="text-primary">simplicity</span> and <span class="text-primary">functionality</span></h2>
                </div>
                <div class="col-md-6 mb-xl-2">
                    <p class="text-body fs-xl mt-2 mb-0">We compare some of the top SIM-only deals available right now so you can make an informed choice!</p>
                </div>
            </div>
            <div class="position-relative bg-white bg-opacity-10 p-2 p-sm-3" style="border-radius: 20px;">
                <div class="position-relative rounded-4 overflow-hidden">
                    <div class="position-absolute top-50 start-50 translate-middle zindex-2 text-center">
                        <a
                            href="https://www.youtube.com/watch?v=22gQPo8sQEY"
                            class="btn btn-video btn-icon btn-xl bg-white stretched-link mb-2 mb-sm-4"
                            data-bs-toggle="video" aria-label="Play video"
                        >
                            <i class="bx bx-play"></i>
                        </a>
                        <div class="h6 fs-lg mb-0">Watch video</div>
                        <div class="text-body fs-sm text-nowrap"></div>
                    </div>
                    <span class="position-absolute top-0 start-0 w-100 h-100 zindex-1 opacity-90" style="background: radial-gradient(circle, rgba(11,15,25,0) 0%, rgba(8,11,18,1) 70%);"></span>
                    <img src="{{ asset('video-cover.jpg') }}" class="opacity-75" alt="Video cover">
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials -->
    <section class="container py-5 my-1 my-md-4 my-lg-5">
        <div class="row pt-2 py-xl-3">
            <div class="col-lg-3 col-md-4">
                <h2 class="h1 text-center text-md-start mx-auto mx-md-0 pb-3 pb-sm-4 pb-md-0 pt-md-2"
                    style="max-width: 300px;">What Our Customers Say</h2>

                <!-- Slider controls (Prev / next buttons) -->
                <div
                    class="d-none d-md-flex justify-content-center justify-content-md-start pb-4 mb-2 pt-2 pt-md-4 mt-md-5">
                    <button type="button" id="prev-testimonial" class="btn btn-prev btn-icon btn-sm me-2"
                            aria-label="Previous">
                        <i class="bx bx-chevron-left"></i>
                    </button>
                    <button type="button" id="next-testimonial" class="btn btn-next btn-icon btn-sm ms-2"
                            aria-label="Next">
                        <i class="bx bx-chevron-right"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="swiper mx-n2" data-swiper-options='{
                      "slidesPerView": 1,
                      "spaceBetween": 8,
                      "loop": true,
                      "navigation": {
                        "prevEl": "#prev-testimonial",
                        "nextEl": "#next-testimonial"
                      },
                      "pagination": {
                        "el": ".swiper-pagination",
                        "clickable": true
                      },
                      "breakpoints": {
                        "500": {
                          "slidesPerView": 2
                        },
                        "1000": {
                          "slidesPerView": 2
                        },
                        "1200": {
                          "slidesPerView": 3
                        }
                      }
                    }'
                >
                    <div class="swiper-wrapper">

                        <!-- Item -->
                        <div class="swiper-slide h-auto pt-4">
                            <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0 mx-2">
                                <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                                      <span
                                          class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                                        <i class="bx bxs-quote-left"></i>
                                      </span>
                                    <blockquote class="card-body pb-3 mb-0">
                                        <p class="mb-0">Lebara is just amazing.</p>
                                    </blockquote>
                                    <div class="card-footer border-0 text-nowrap pt-0">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                    </div>
                                </div>
                                <figcaption class="ps-4 pt-4">
                                    <h6 class="fs-sm fw-semibold mb-0">Robert Fox</h6>
                                    <span class="fs-xs text-muted">05 Nov, 2024</span>
                                </figcaption>
                            </figure>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide h-auto pt-4">
                            <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0 mx-2">
                                <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                      <span
                          class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                        <i class="bx bxs-quote-left"></i>
                      </span>
                                    <blockquote class="card-body pb-3 mb-0">
                                        <p class="mb-0">You only get to realize that it can be easier when you start using Lebara.</p>
                                    </blockquote>
                                    <div class="card-footer border-0 text-nowrap pt-0">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                    </div>
                                </div>
                                <figcaption class="ps-4 pt-4">
                                    <h6 class="fs-sm fw-semibold mb-0">Annette Balogun</h6>
                                    <span class="fs-xs text-muted">05 Nov, 2024</span>
                                </figcaption>
                            </figure>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide h-auto pt-4">
                            <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0 mx-2">
                                <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                      <span
                          class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                        <i class="bx bxs-quote-left"></i>
                      </span>
                                    <blockquote class="card-body pb-3 mb-0">
                                        <p class="mb-0">I wonder how they do it, the experience using Lebara is topnotch.</p>
                                    </blockquote>
                                    <div class="card-footer border-0 text-nowrap pt-0">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bx-star text-muted opacity-75"></i>
                                    </div>
                                </div>
                                <figcaption class="ps-4 pt-4">
                                    <h6 class="fs-sm fw-semibold mb-0">Jerome Akim</h6>
                                    <span class="fs-xs text-muted">05 Nov, 2024</span>
                                </figcaption>
                            </figure>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide h-auto pt-4">
                            <figure class="d-flex flex-column h-100 px-2 px-sm-0 mb-0 mx-2">
                                <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                                      <span
                                          class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                                        <i class="bx bxs-quote-left"></i>
                                      </span>
                                    <blockquote class="card-body pb-3 mb-0">
                                        <p class="mb-0">Switched to Lebara and never going back.</p>
                                    </blockquote>
                                    <div class="card-footer border-0 text-nowrap pt-0">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                    </div>
                                </div>
                                <figcaption class="ps-4 pt-4">
                                    <h6 class="fs-sm fw-semibold mb-0">Albert Umeh</h6>
                                    <span class="fs-xs text-muted">05 Nov, 2024</span>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <!-- Pagination (bullets) -->
                    <div class="swiper-pagination position-relative d-md-none mt-5"></div>
                </div>
            </div>
        </div>
    </section>


    <!-- Download app CTA -->
    <section class="bg-secondary pt-lg-4 pt-xl-5 overflow-hidden">
        <div class="container pt-5">
            <div class="row pt-2 pt-sm-3 pt-md-4">
                <div
                    class="col-md-6 col-xl-5 col-xxl-4 text-center text-md-start pb-4 pb-sm-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
                    <h2 class="h1 mb-5">Download the MyLebara app</h2>
                    <div class="d-flex d-md-block mt-n2 mt-sm-0">
                        <div class="row row-cols-1 row-cols-lg-2 align-items-lg-end me-1 me-md-0 pb-md-4 mb-md-3">
                            <div class="col">
                                <h3 class="fs-base fw-normal opacity-60 mb-2">App Store</h3>
                                <div class="text-nowrap text-warning pb-1 mb-2">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                </div>
                            </div>
                            <div class="col d-xl-flex justify-content-end">
                                <a href="https://apps.apple.com/gb/app/mylebara/id1122491914"
                                   class="btn btn-dark btn-lg w-xl-100 px-3 py-2 ms-xl-3 mt-3 mt-lg-0">
                                    <img src="assets/img/market/appstore-light.svg" class="light-mode-img" width="124"
                                         alt="App Store">
                                    <img src="assets/img/market/appstore-dark.svg" class="dark-mode-img" width="124"
                                         alt="App Store">
                                </a>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-lg-2 align-items-lg-end">
                            <div class="col">
                                <h3 class="fs-base fw-normal opacity-60 mb-2">Google Play</h3>
                                <div class="text-nowrap text-warning pb-1 mb-2">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                </div>
                            </div>
                            <div class="col d-xl-flex justify-content-end">
                                <a href="https://play.google.com/store/apps/details?id=com.lebara.wallet&hl=en_GB&gl=US"
                                   class="btn btn-dark btn-lg w-xl-100 px-3 py-2 ms-xl-3 mt-3 mt-lg-0">
                                    <img src="assets/img/market/googleplay-light.svg" class="light-mode-img" width="139"
                                         alt="Google Play">
                                    <img src="assets/img/market/googleplay-dark.svg" class="dark-mode-img" width="139"
                                         alt="Google Play">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-7 col-xxl-8">
                    <img src="/devices.png" width="618" class="rellax d-block mx-auto"
                         alt="Devices" data-rellax-percentage="0.5" data-rellax-speed="1"
                         data-disable-parallax-down="lg">
                    <div class="d-none d-xl-block" style="margin-bottom: -450px;"></div>
                    <div class="d-none d-lg-block d-xl-none" style="margin-bottom: -800px;"></div>
                    <div class="d-none d-sm-block d-lg-none" style="margin-bottom: -400px;"></div>
                    <div class="d-sm-none" style="margin-bottom: -240px;"></div>
                </div>
            </div>
        </div>
    </section>


    <!-- Info links -->
    <section class="container pt-5 pb-4 pb-sm-5 mb-2 mb-sm-0 mb-lg-3 mb-xl-4 mt-md-2 mt-lg-4 mt-xl-5">
        <div class="row row-cols-1 row-cols-sm-3 pt-sm-3 py-2">
            <div class="col d-flex d-sm-block d-lg-flex align-items-start mb-3 mb-sm-0">
                <div class="d-table bg-primary shadow-primary rounded flex-shrink-0 p-2 mb-3">
                    <img src="/chat.svg" width="24" class="d-block m-1"
                         alt="Icon">
                </div>
                <div class="ps-4 ps-sm-0 ps-lg-4 ms-lg-2 me-xl-2 pe-xl-5">
                    <h3 class="h4 mb-2 mb-md-3">24/7 Chat Help</h3>
                    <p class="mb-1 mb-md-2">Chat support with our customer service specialists.</p>
                    <a href="javascript:" class="btn btn-link px-0">
                        Talk to us
                        <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                    </a>
                </div>
            </div>
            <div class="col d-flex d-sm-block d-lg-flex align-items-start mb-3 mb-sm-0">
                <div class="d-table bg-primary shadow-primary rounded flex-shrink-0 p-2 mb-3">
                    <img src="/faq.svg" width="24" class="d-block m-1"
                         alt="Icon">
                </div>
                <div class="ps-4 ps-sm-0 ps-lg-4 ms-lg-2 pe-xl-5">
                    <h3 class="h4 mb-2 mb-md-3">FAQ</h3>
                    <p class="mb-1 mb-md-2">Find answers. Learn more about the features and services.</p>
                    <a href="javascript:" class="btn btn-link px-0">
                        Learn more
                        <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                    </a>
                </div>
            </div>
            <div class="col d-flex d-sm-block d-lg-flex align-items-start">
                <div class="d-table bg-primary shadow-primary rounded flex-shrink-0 p-2 mb-3">
                    <img src="/email.svg" width="24" class="d-block m-1"
                         alt="Icon">
                </div>
                <div class="ps-4 ps-sm-0 ps-lg-4 ms-lg-2 pe-xl-5">
                    <h3 class="h4 mb-2 mb-md-3">Email</h3>
                    <p class="mb-1 mb-md-2">Please feel free to drop any questions to our email.</p>
                    <a href="javascript:" class="btn btn-link px-0">
                        Drop us a line
                        <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Divider -->
    <div class="container mb-md-2 mb-lg-4">
        <hr>
    </div>
</main>


<!-- Footer -->
<footer class="footer pt-5 pb-4 pb-lg-5">
    <div class="container text-center pt-lg-3">
        <div class="navbar-brand justify-content-center text-dark mb-2 mb-lg-4">
            <img src="/logo.svg" class="me-2" width="140" alt="Lebara">
        </div>
        <ul class="nav justify-content-center pt-3 pb-4 pb-lg-5">
            <li class="nav-item"><a href="javascript:" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="javascript:" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="javascript:" class="nav-link">Overview</a></li>
            <li class="nav-item"><a href="javascript:" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="javascript:" class="nav-link">Contacts</a></li>
            <li class="nav-item"><a href="javascript:" class="nav-link">Account</a></li>
        </ul>
        <div class="d-flex flex-column flex-sm-row justify-content-center">
            <a href="https://apps.apple.com/gb/app/mylebara/id1122491914" class="btn btn-dark btn-lg px-3 py-2 me-sm-4 mb-3">
                <img src="assets/img/market/appstore-light.svg" class="light-mode-img" width="124" alt="App Store">
                <img src="assets/img/market/appstore-dark.svg" class="dark-mode-img" width="124" alt="App Store">
            </a>
            <a href="https://play.google.com/store/apps/details?id=com.lebara.wallet&hl=en_GB&gl=US" class="btn btn-dark btn-lg px-3 py-2 mb-3">
                <img src="assets/img/market/googleplay-light.svg" class="light-mode-img" width="139" alt="Google Play">
                <img src="assets/img/market/googleplay-dark.svg" class="dark-mode-img" width="139" alt="Google Play">
            </a>
        </div>
        <div class="d-flex justify-content-center pt-4 mt-lg-3">
            <a href="https://www.facebook.com/Lebara" target="_blank" class="btn btn-icon btn-secondary btn-facebook mx-2"
               aria-label="Facebook">
                <i class="bx bxl-facebook"></i>
            </a>
            <a href="https://www.instagram.com/lebara.mobile" target="_blank" class="btn btn-icon btn-secondary btn-instagram mx-2"
               aria-label="Instagram">
                <i class="bx bxl-instagram"></i>
            </a>
            <a href="https://twitter.com/LebaraMobileUK" target="_blank" class="btn btn-icon btn-secondary btn-twitter mx-2"
               aria-label="Twitter">
                <i class="bx bxl-twitter"></i>
            </a>
            <a href="https://www.youtube.com/c/LebaraOfficial" target="_blank" class="btn btn-icon btn-secondary btn-youtube mx-2"
               aria-label="YouTube">
                <i class="bx bxl-youtube"></i>
            </a>
        </div>
        <p class="nav d-block fs-sm text-center pt-5 mt-lg-4 mb-0">
            <span class="opacity-80">&copy; All rights reserved. Powered by </span>
            <a class="nav-link d-inline-block p-0" href="https://vas2nets.com" target="_blank" rel="noopener">VAS2Nets Technologies</a>
        </p>
    </div>
</footer>


<!-- Back to top button -->
<a href="javascript:top" class="btn-scroll-top" data-scroll>
    <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
    <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
</a>


<!-- Vendor Scripts -->
<script src="/assets/vendor/parallax-js/dist/parallax.min.js"></script>
<script src="/assets/vendor/rellax/rellax.min.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

<script src="/assets/vendor/lightgallery/plugins/video/lg-video.min.js"></script>
<script src="assets/vendor/lightgallery/lightgallery.min.js"></script>

<!-- Main Theme Script -->
<script src="/assets/js/theme.min.js"></script>
</body>
</html>
