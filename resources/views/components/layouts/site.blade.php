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
    <link rel="stylesheet" media="screen" href="/assets/css/theme.min.css?v=1">
    <link rel="stylesheet" media="screen" href="/assets/css/colors.css?v=1">

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

    @production
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-9GY618XQP2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-9GY618XQP2');
        </script>
    @endproduction
</head>

<!-- Body -->
<body>
<!-- Page loading spinner -->
<div class="page-loading active">
    <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
    </div>
</div>


<!-- Page wrapper for sticky footer -->
<!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
<main class="page-wrapper">
    <!-- Dark alert -->
    <div
        class="alert alert-danger rounded-0 text-center navbar-sticky"
        style="background-color: #ff3182; border-color: #ff3182; color: white"
        role="alert"
    >
        <span class="flashing">We’re not just launching; we’re about to change the game. <b>Stay Tuned!</b></span>
    </div>
    <!-- Navbar -->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
    <header class="header navbar navbar-expand-lg bg-light navbar-sticky">


        <div class="container px-3">
            <a href="/" class="navbar-brand pe-3">
                <img src="{{ asset('logo.svg') }}" width="120" alt="Lebara">
            </a>
            <div id="navbarNav" class="offcanvas offcanvas-end">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul
                        class="navbar-nav me-auto mb-2 mb-lg-0"
                        x-data="{ active: (el) => el.href === location.href }"
                    >
                        <li class="nav-item">
                            <a href="/home" class="nav-link fw-normal" :class="{ 'active': active($el) }">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="/about" class="nav-link fw-normal" :class="{ 'active': active($el) }">About</a>
                        </li>

                        <li class="nav-item">
                            <a href="/products" class="nav-link fw-normal" :class="{ 'active': active($el) }">Product/Service</a>
                        </li>

                        <li class="nav-item">
                            <a href="/news" class="nav-link fw-normal" :class="{ 'active': active($el) }">News/Insights</a>
                        </li>

                        <li class="nav-item">
                            <a href="/careers" class="nav-link fw-normal" :class="{ 'active': active($el) }">Careers</a>
                        </li>

                        <li class="nav-item">
                            <a href="/contact" class="nav-link fw-normal" :class="{ 'active': active($el) }">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="offcanvas-header border-top">
                    <a href="javascript:"
                       class="btn btn-primary w-100">
                        <i class="bx bx-cart fs-4 lh-1 me-1"></i>
                        &nbsp;Refuel
                    </a>
                </div>
            </div>
            <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4 d-none" data-bs-toggle="mode">
                <input type="checkbox" class="form-check-input" id="theme-mode">
                <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
                <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
            </div>
            <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="javascript:"
               class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex">
                <i class="bx bx-cart fs-5 lh-1 me-1"></i>
                &nbsp;Refuel
            </a>
        </div>
    </header>

    {{ $slot }}
</main>


<!-- Footer -->
<footer class="footer pt-5 pb-4 pb-lg-5 bg-chambray" data-bs-theme="dark">
    <div class="container pt-lg-4">
        <div class="row pb-5">
            <div class="col-lg-4 col-md-6">
                <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                    <img src="https://www.lebara.de/content/dam/lebara/global/logo-Desktop.png" width="120" alt="Lebara">
                </div>
                <p class="fs-sm text-light opacity-70 pb-lg-3 mb-4">
                    Our goal is to bring happiness, convenience, and seamless communication to Nigerians, ensuring that no call, message, or connection is ever out of reach.
                </p>

                <form
                    action="/join"
                    x-data="{ form: $form() }"
                    @submit.prevent="form.submit()"
                    @then="swal('Welcome!', 'We\'ll be in touch.', 'success'); $el.reset()"
                >
                    <x-honeypot />

                    <label for="subscr-email" class="form-label">Join the waitlist</label>
                    <div class="input-group">
                        <input
                            type="email" id="subscr-email"
                            name="email"
                            class="form-control rounded-start ps-5"
                            placeholder="Your email"
                            required
                        >
                        <i class="bx bx-envelope fs-lg text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
                        <div class="invalid-tooltip position-absolute top-100 start-0">Please provide a valid email address.</div>
                        <button type="submit" class="btn btn-primary">Join the waitlist</button>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4 pt-md-1 pt-lg-0">
                <div id="footer-links" class="row">
                    <div class="col-lg-4">
                        <h6 class="mb-2">
                            <a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">Useful Links</a>
                        </h6>
                        <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                            <ul class="nav flex-column pb-lg-1 mb-lg-3">
                                <li class="nav-item">
                                    <a href="/home" class="nav-link d-inline-block px-0 pt-1 pb-2">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/about" class="nav-link d-inline-block px-0 pt-1 pb-2">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/products" class="nav-link d-inline-block px-0 pt-1 pb-2">Product/Service</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/news" class="nav-link d-inline-block px-0 pt-1 pb-2">News/Insights</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/careers" class="nav-link d-inline-block px-0 pt-1 pb-2">Careers</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/contact" class="nav-link d-inline-block px-0 pt-1 pb-2">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3">
                        <h6 class="mb-2">
                            <a href="#social-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">Socials</a>
                        </h6>
                        <div id="social-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                            <ul class="nav flex-column mb-2 mb-lg-0">
                                <li class="nav-item"><a href="https://web.facebook.com/people/Lebara-Ng/61574122177633" class="nav-link d-inline-block px-0 pt-1 pb-2">Facebook</a></li>
                                <li class="nav-item"><a href="https://linkedin.com/company/lebara-nigeria" class="nav-link d-inline-block px-0 pt-1 pb-2">LinkedIn</a></li>
                                <li class="nav-item"><a href="https://x.com/Lebara_Nigeria" class="nav-link d-inline-block px-0 pt-1 pb-2">Twitter</a></li>
                                <li class="nav-item"><a href="https://instagram.com/lebara.ng" class="nav-link d-inline-block px-0 pt-1 pb-2">Instagram</a></li>
                                <li class="nav-item"><a href="https://youtube.com/@Lebara-Nigeria" class="nav-link d-inline-block px-0 pt-1 pb-2">Youtube</a></li>
                                <li class="nav-item"><a href="https://tiktok.com/@Lebara_Nigeria" class="nav-link d-inline-block px-0 pt-1 pb-2">Tiktok</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 pt-2 pt-lg-0">
                        <h6 class="mb-2">Contact Us</h6>
                        <ul class="nav flex-column mb-0">
                            <li class="mb-1">
                                <a href="javascript:" class="nav-link align-items-start fw-normal px-0 py-1">
                                    <i class="bx bx-map fs-5 text-primary me-2"></i>
                                    Seth House, 5 Stella Sholanke Street, Ajao Estate,<br>Lagos, Nigeria
                                </a>
                            </li>
                           {{-- <li class="mb-1">
                                <a href="tel:4065550120" class="nav-link align-items-start fw-normal px-0 py-1">
                                    <i class="bx bx-phone-call fs-5 text-primary me-2"></i>
                                    (406)&nbsp;555‑0120
                                </a>
                            </li>--}}
                            <li>
                                <a href="mailto:contact@lebara.ng" class="nav-link align-items-start fw-normal px-0 py-1">
                                    <i class="bx bx-envelope fs-5 text-primary me-2"></i>
                                    contact@lebara.ng
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <p class="nav d-block fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
            <span class="text-light opacity-50">&copy; All rights reserved. </span>
            <a class="nav-link d-inline-block p-0" href="/" rel="noopener">Lebara Nigeria</a>
        </p>
    </div>
</footer>


<!-- Back to top button -->
<a href="#top" class="btn-scroll-top" data-scroll>
    <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
    <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
</a>


<!-- Vendor Scripts -->
<script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/parallax-js/dist/parallax.min.js"></script>
<script src="assets/vendor/rellax/rellax.min.js"></script>
<script src="assets/vendor/lightgallery/lightgallery.min.js"></script>
<script src="assets/vendor/lightgallery/plugins/video/lg-video.min.js"></script>

<!-- Main Theme Script -->
<script src="assets/js/theme.min.js"></script>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
<script src="https://unpkg.com/axios@1.4.0/dist/axios.min.js"></script>
<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
<script src="{{ asset('assets/js/form.js') }}"></script>

</body>
</html>
