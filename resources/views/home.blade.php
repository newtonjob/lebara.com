<x-layouts.site>
    <!-- Hero slider + BG parallax -->
    <section class="jarallax min-vh-100" data-jarallax data-speed="0.4" data-bs-theme="dark">
        <video class="w-100 h-100 position-absolute object-fit-cover min-vh-100" autoplay muted loop>
            <source src="/lebara-video.mp4" type="video/mp4">
        </video>

        <span class="position-absolute top-0 start-0 w-100 h-100 min-vh-100 bg-gradient-dark-translucent"></span>

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
                        <div class="swiper pt-5 pb-4 py-md-5" data-swiper-options='{
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
                        }'>
                            <div class="swiper-wrapper">
                                <!-- Item -->
                                <div class="swiper-slide">
                                    <h6 class="from-start mb-lg-4 lh-1" style="font-size:calc(1.3875rem + 1.65vw);font-weight:200;line-height:1.3">WELCOME TO</h6>
                                    <h2 class="display-1 from-start mb-lg-4 lh-1">LEBARA NIGERIA</h2>
                                    {{--<div class="from-end">
                                        <p class="fs-xl text-white pb-2 mb-lg-5">
                                            Subscribe to get the insider gist of our launch and other premium offers.
                                        </p>
                                    </div>--}}

                                    <div class="from-end">
                                        <p class="fs-xl text-white pb-2 my-5">
                                            We’re cooking something fire here 🔥. Wanna be first to taste? Join the waitlist!
                                        </p>
                                    </div>

                                    <div class="scale-up delay-1 d-none">
                                        <a href="javascript:" class="btn btn-primary shadow-primary btn-lg">Get started</a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <h6 class="from-start mb-lg-4 lh-1" style="font-size:calc(1.3875rem + 1.65vw);font-weight:200 !important;line-height:1.3">WE OFFER</h6>
                                    <h2 class="display-1 from-start mb-lg-4 lh-1">Reliable, Affordable and Premium Service.</h2>

                                    <div class="from-end">
                                        <p class="fs-xl text-white pb-2 my-5">
                                            We’re cooking something fire here 🔥. Wanna be first to taste? Join the waitlist!
                                        </p>
                                    </div>

                                    <div class="scale-up delay-1 d-none">
                                        <a href="javascript:" class="btn btn-primary shadow-primary btn-lg">Get started</a>
                                    </div>
                                </div>
                            </div>

                            <form
                                action="/join"
                                x-data="{ form: $form() }"
                                @submit.prevent="form.submit()"
                                @then="swal('Welcome!', 'We\'ll be in touch.', 'success'); $el.reset()"
                            >
                                <x-honeypot />

                                <div class="mt-4">
                                    <div class="d-flex border border-3 rounded">
                                        <div class="form-floating w-100">
                                            <input class="form-control text-white border-white border-0" type="text" id="fl-text" name="email" placeholder="Your email address" required>
                                            <label for="fl-text" class="text-white">Your email...</label>
                                        </div>

                                        <div class="p-1">
                                            <button class="btn btn-primary shadow-primary btn-lg">Join the waitlist</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            @if(false)
                                <div class="swiper-wrapper">
                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <h2 class="display-2 from-start mb-lg-4">Welcome to Lebara Nigeria</h2>
                                        <div class="from-end">
                                            <p class="fs-xl text-white pb-2 mb-lg-5">
                                                Reliable and Affordable and Premium service.
                                            </p>
                                        </div>
                                        <div class="scale-up delay-1">
                                            <a href="javascript:" class="btn btn-primary shadow-primary btn-lg">Get started</a>
                                        </div>

                                    </div>

                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <h2 class="display-2 from-start mb-lg-4">Award-Winning Software Development</h2>
                                        <div class="from-end">
                                            <p class="fs-xl text-white pb-2 mb-lg-5">We build complex web, desktop and mobile applications. With us you get quality software and perfect service every time.</p>
                                        </div>
                                        <div class="scale-up delay-1">
                                            <a href="#" class="btn btn-primary shadow-primary btn-lg">View case studies</a>
                                        </div>
                                    </div>

                                    <!-- Item -->
                                    <div class="swiper-slide">
                                        <h2 class="display-2 from-start mb-lg-4">24/7 Tech &amp; Business Support</h2>
                                        <div class="from-end">
                                            <p class="fs-xl text-white pb-2 mb-lg-5">We ensure lifetime support of all applications we've built. Our support department is a team of professionals who will assist you 24/7.</p>
                                        </div>
                                        <div class="scale-up delay-1">
                                            <a href="#" class="btn btn-primary shadow-primary btn-lg">Work with us</a>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Pagination (bullets) -->
                            <div class="swiper-pagination position-relative d-md-none pt-2 mt-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-flex flex-column flex-sm-row align-items-center justify-content-between position-relative zindex-5 pb-5">
            <div class="d-flex mb-4 mb-sm-0">
                <a target="_blank" href="https://instagram.com/lebara.ng" class="btn btn-icon btn-secondary btn-instagram rounded-circle me-2" aria-label="Instagram">
                    <i class="bx bxl-instagram"></i>
                </a>
                <a target="_blank" href="https://linkedin.com/company/lebara-nigeria" class="btn btn-icon btn-secondary btn-linkedin rounded-circle me-2" aria-label="LinkedIn">
                    <i class="bx bxl-linkedin"></i>
                </a>
                <a target="_blank" href="https://web.facebook.com/people/Lebara-Ng/61574122177633" class="btn btn-icon btn-secondary btn-facebook rounded-circle me-2" aria-label="Facebook">
                    <i class="bx bxl-facebook"></i>
                </a>
                <a target="_blank" href="https://x.com/Lebara_Nigeria" class="btn btn-icon btn-secondary btn-twitter rounded-circle me-2" aria-label="Twitter">
                    <i class="bx bxl-twitter"></i>
                </a>
                <a target="_blank" href="https://youtube.com/@Lebara-Nigeria" class="btn btn-icon btn-secondary btn-youtube rounded-circle me-2" aria-label="YouTube">
                    <i class="bx bxl-youtube"></i>
                </a>
                <a target="_blank" href="https://tiktok.com/@Lebara_Nigeria" class="btn btn-icon btn-secondary btn-tiktok rounded-circle me-2" aria-label="Tiktok">
                    <i class="bx bxl-tiktok"></i>
                </a>
            </div>
            <a href="#" class="nav-link px-0 d-none">
                Our case studies
                <i class="bx bx-right-arrow-circle fs-4 ms-2"></i>
            </a>
        </div>
    </section>

    <section class="py-lg-4 py-xl-5 overflow-hidden bg-blue-50">
        <div class="container mt-md-4">
            <div class="row">
                <div class="col-md-5 text-center text-md-start pb-5">
                    <h1 class="mb-4 text-chambray">We are Lebara</h1>
                    <p class="fs-lg pb-lg-3 mb-2">
                        Lebara Group has been a trusted provider of affordable, reliable, and high-quality mobile services across three continents and nine countries. Now, it's Nigeria’s turn to experience the unmatched benefits of being part of the Lebara family.
                    <p class="fs-lg pb-lg-3 mb-4">
                        Our commitment to delivering world class customer-first solution, unique bundle plans tailored to serve your interest, budget or lifestyle. We’re ready, are you?
                    </p>
                    <a href="/about" class="btn btn-primary shadow-primary btn-lg">More About Us</a>

                    <div class="mt-3 mt-sm-0 pt-4 pt-sm-5 mt-xl-4 d-none">
                        <h2 class="h6 mb-4 text-chambray">Some of our awards:</h2>
                        <img src="assets/img/landing/software-agency-1/awards.svg" alt="Awards">
                    </div>
                </div>
                <div class="col-xl-6 col-md-7 offset-xl-1 pb-4 pb-sm-3 pb-lg-0 mb-4 mb-sm-5 mb-lg-0">
                    <img src="{{ asset('we.jpg') }}" class="rounded-3 shadow-sm" alt="Image">
                </div>
            </div>
        </div>
    </section>

    <section class="container pt-5 mt-2 mt-md-4 mt-lg-5">
        <div class="text-center pb-4 pb-md-0 mb-2 mb-md-5 mx-auto" style="max-width: 530px;">
            <h2 class="h1 text-chambray">Getting a SIM/eSIM?</h2>
            <p class="mb-0">Getting a Lebara SIM or eSIM is quick and easy no hassle:</p>
        </div>

        <!-- Steps -->
        <div class="steps steps-sm steps-horizontal-md steps-center pb-5 mb-md-2 mb-lg-3">
            <div class="step">
                <div class="step-number">
                    <div class="step-number-inner">1</div>
                </div>
                <div class="step-body">
                    <h3 class="h4 mb-3 text-chambray">Visit a Retail Store </h3>
                    <p class="mb-0">Walk into any authorized Lebara store or agent location to purchase a physical SIM/eSIM.</p>
                </div>
            </div>
            <div class="step">
                <div class="step-number">
                    <div class="step-number-inner">2</div>
                </div>
                <div class="step-body">
                    <h3 class="h4 mb-3 text-chambray">Order Online</h3>
                    <p class="mb-0">Get your SIM card delivered to your doorstep by ordering through our website.</p>
                </div>
            </div>
            <div class="step">
                <div class="step-number">
                    <div class="step-number-inner">3</div>
                </div>
                <div class="step-body">
                    <h3 class="h4 mb-3 text-chambray">Activate Your eSIM</h3>
                    <p class="mb-0">Prefer a digital experience? Activate your <b>eSIM instantly</b> without needing a physical card.</p>
                </div>
            </div>
            <div class="step">
                <div class="step-number">
                    <div class="step-number-inner">4</div>
                </div>
                <div class="step-body">
                    <h3 class="h4 mb-3 text-chambray">Porting</h3>
                    <p class="mb-0">
                        Dial <b>*3535#</b> and visit an agent near your location and you are good to go. <a href="javascript:" class="text-primary">Activate Now</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Video -->
        <div class="bg-primary position-relative rounded-3 overflow-hidden">
            <div class="position-absolute top-50 start-50 w-75 h-75 translate-middle d-flex align-items-center justify-content-center zindex-5">
                <a href="https://youtu.be/nCGuEywZvAw" class="btn btn-video btn-icon btn-xl bg-white stretched-link" data-bs-toggle="video" aria-label="Play video" data-lg-id="66ba1219-7dab-496e-b976-de5af0fbab10">
                    <i class="bx bx-play"></i>
                </a>
            </div>
            <div class="">
                <img src="{{ asset('we-are-lebara.jpg') }}" width="100%" class="rellax d-block mx-auto" alt="Card" data-rellax-percentage="0.5" data-rellax-speed="1.1" data-disable-parallax-down="lg" style="transform: translate3d(0px, 42px, 0px);">
            </div>
        </div>
    </section>

    <section class="py-5 bg-blue-50">
        <div class="container my-md-2 my-lg-4 my-xl-5">
            <h2 class="h1 text-center pb-3 pb-md-4 text-chambray">Transparent Pricing for You</h2>
            <div class="price-switch-wrapper mb-n2">
                <div class="form-check form-switch price-switch justify-content-center mt-2 mb-4 d-none" data-bs-toggle="price">
                    <input type="checkbox" class="form-check-input" id="pricing">
                    <label class="form-check-label" for="pricing">Monthly</label>
                    <label class="form-check-label d-flex align-items-start" for="pricing">Annually <span class="text-danger fs-xs fw-semibold mt-n2 ms-2">-10%</span></label>
                </div>

                <div class="table-responsive-xxl pt-md-3">
                    {{--TODO: Blur for now--}}
                    <div class="row pb-4">
                        <div class="col mb-4">
                            <div class="card h-100 border-0 shadow-sm p-xxl-3" style="min-width: 18rem;">
                                <div class="card-body" style="filter: blur(6px)">
                                    <div class="d-flex align-items-center pb-2 pb-md-3 mb-4">
                                        <div class="flex-shrink-0 bg-secondary rounded-3">
                                            <img src="assets/img/landing/saas-1/pricing/basic.png" width="84" alt="Icon">
                                        </div>
                                        <div class="ps-4" >
                                            <h3 class="fs-lg fw-normal text-body mb-2">Basic</h3>
                                            <h4 class="h3 lh-1 mb-0">
                                                <span data-monthly-price="">N600.00</span>
                                                <span class="d-none" data-annual-price="">N500.40</span>
                                                <span class="text-body fs-sm fw-normal"> / per month</span>
                                            </h4>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled fs-sm pb-md-3 mb-3">
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Aenean neque tortor, purus faucibus
                                        </li>
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Nullam augue vitae et volutpat sagittis
                                        </li>
                                        <li class="d-flex text-muted mb-2">
                                            <i class="bx bx-x fs-xl me-1"></i>
                                            Mauris massa penatibus enim elit quam
                                        </li>
                                        <li class="d-flex text-muted mb-2">
                                            <i class="bx bx-x fs-xl me-1"></i>
                                            Nec ac sagittis nunc bibendum
                                        </li>
                                        <li class="d-flex text-muted">
                                            <i class="bx bx-x fs-xl me-1"></i>
                                            Odio ut orci volutpat ultricies eleifend
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer border-0 pt-0 pb-4">
                                    <a href="javascript:" class="btn btn-primary w-100">Buy</a>
                                </div>
                            </div>
                        </div>

                        <div class="col d-none">
                            <div class="card h-100 border-0 bg-primary shadow-primary shadow-dark-mode-none p-xxl-3" style="min-width: 18rem;">
                                <div class="card-body" style="filter: blur(6px)">
                                    <div class="d-flex align-items-center pb-2 pb-md-3 mb-4">
                                        <div class="flex-shrink-0 rounded-3" style="background-color: rgba(255,255,255, .1);">
                                            <img src="assets/img/landing/saas-1/pricing/standard.png" width="84" alt="Icon">
                                        </div>
                                        <div class="ps-4">
                                            <h3 class="fs-lg fw-normal text-light opacity-70 mb-2">Standard</h3>
                                            <h4 class="h3 text-light lh-1 mb-0">
                                                <span data-monthly-price="">N1002.00</span>
                                                <span class="d-none" data-annual-price="">N1000.80</span>
                                                <span class="fs-sm fw-normal opacity-70"> / per month</span>
                                            </h4>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled fs-sm pb-md-3 mb-3">
                                        <li class="d-flex text-light mb-2">
                                            <i class="bx bx-check fs-xl me-1"></i>
                                            <span class="opacity-70">Aenean neque tortor, purus faucibus</span>
                                        </li>
                                        <li class="d-flex text-light mb-2">
                                            <i class="bx bx-check fs-xl me-1"></i>
                                            <span class="opacity-70">Nullam augue vitae et volutpat sagittis</span>
                                        </li>
                                        <li class="d-flex text-light mb-2">
                                            <i class="bx bx-check fs-xl me-1"></i>
                                            <span class="opacity-70">Mauris massa penatibus enim elit quam</span>
                                        </li>
                                        <li class="d-flex text-light mb-2">
                                            <i class="bx bx-check fs-xl me-1"></i>
                                            <span class="opacity-70">Nec ac sagittis nunc bibendum</span>
                                        </li>
                                        <li class="d-flex text-light opacity-50">
                                            <i class="bx bx-x fs-xl me-1"></i>
                                            Odio ut orci volutpat ultricies eleifend
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer border-0 pt-0 pb-4">
                                    <a href="javascript:" class="btn btn-light w-100">Buy</a>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card h-100 border-0 shadow-sm p-xxl-3" style="min-width: 18rem;">
                                <div class="card-body" style="filter: blur(6px)">
                                    <div class="d-flex align-items-center pb-2 pb-md-3 mb-4">
                                        <div class="flex-shrink-0 bg-secondary rounded-3">
                                            <img src="assets/img/landing/saas-1/pricing/standard.png" width="84" alt="Icon">
                                        </div>
                                        <div class="ps-4">
                                            <h3 class="fs-lg fw-normal text-body mb-2">Standard</h3>
                                            <h4 class="h3 lh-1 mb-0">
                                                <span data-monthly-price="">N1002.00</span>
                                                <span class="d-none" data-annual-price="">N1000.80</span>
                                                <span class="fs-sm fw-normal opacity-70"> / per month</span>
                                            </h4>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled fs-sm pb-md-3 mb-3">
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Aenean neque tortor, purus faucibus
                                        </li>
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Nullam augue vitae et volutpat sagittis
                                        </li>
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Mauris massa penatibus enim elit quam
                                        </li>
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Nec ac sagittis nunc bibendum
                                        </li>
                                        <li class="d-flex">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Odio ut orci volutpat ultricies eleifend
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer border-0 pt-0 pb-4">
                                    <a href="javascript:" class="btn btn-primary w-100">Buy</a>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4">
                            <div class="card h-100 border-0 shadow-sm p-xxl-3" style="min-width: 18rem;">
                                <div class="card-body" style="filter: blur(6px)">
                                    <div class="d-flex align-items-center pb-2 pb-md-3 mb-4">
                                        <div class="flex-shrink-0 bg-secondary rounded-3">
                                            <img src="assets/img/landing/saas-1/pricing/ultimate.png" width="84" alt="Icon">
                                        </div>
                                        <div class="ps-4">
                                            <h3 class="fs-lg fw-normal text-body mb-2">Ultimate</h3>
                                            <h4 class="h3 lh-1 mb-0">
                                                <span data-monthly-price="">N1008.00</span>
                                                <span class="d-none" data-annual-price="">N1006.20</span>
                                                <span class="text-body fs-sm fw-normal"> / per month</span>
                                            </h4>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled fs-sm pb-md-3 mb-3">
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Aenean neque tortor, purus faucibus
                                        </li>
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Nullam augue vitae et volutpat sagittis
                                        </li>
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Mauris massa penatibus enim elit quam
                                        </li>
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Nec ac sagittis nunc bibendum
                                        </li>
                                        <li class="d-flex">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Odio ut orci volutpat ultricies eleifend
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer border-0 pt-0 pb-4">
                                    <a href="javascript:" class="btn btn-primary w-100">Buy</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center pb-4">
                        <div class="col-sm-4 mb-4">
                            <div class="card h-100 border-0 shadow-sm p-xxl-3" style="min-width: 18rem;">
                                <div class="card-body" style="filter: blur(6px)">
                                    <div class="d-flex align-items-center pb-2 pb-md-3 mb-4">
                                        <div class="flex-shrink-0 bg-secondary rounded-3">
                                            <img src="assets/img/landing/saas-1/pricing/standard.png" width="84" alt="Icon">
                                        </div>
                                        <div class="ps-4">
                                            <h3 class="fs-lg fw-normal text-body mb-2">Standard</h3>
                                            <h4 class="h3 lh-1 mb-0">
                                                <span data-monthly-price="">N1002.00</span>
                                                <span class="d-none" data-annual-price="">N1000.80</span>
                                                <span class="fs-sm fw-normal opacity-70"> / per month</span>
                                            </h4>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled fs-sm pb-md-3 mb-3">
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Aenean neque tortor, purus faucibus
                                        </li>
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Nullam augue vitae et volutpat sagittis
                                        </li>
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Mauris massa penatibus enim elit quam
                                        </li>
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Nec ac sagittis nunc bibendum
                                        </li>
                                        <li class="d-flex">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Odio ut orci volutpat ultricies eleifend
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer border-0 pt-0 pb-4">
                                    <a href="javascript:" class="btn btn-primary w-100">Buy</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-4">
                            <div class="card h-100 border-0 shadow-sm p-xxl-3" style="min-width: 18rem;">
                                <div class="card-body" style="filter: blur(6px)">
                                    <div class="d-flex align-items-center pb-2 pb-md-3 mb-4">
                                        <div class="flex-shrink-0 bg-secondary rounded-3">
                                            <img src="assets/img/landing/saas-1/pricing/ultimate.png" width="84" alt="Icon">
                                        </div>
                                        <div class="ps-4">
                                            <h3 class="fs-lg fw-normal text-body mb-2">Ultimate</h3>
                                            <h4 class="h3 lh-1 mb-0">
                                                <span data-monthly-price="">N1008.00</span>
                                                <span class="d-none" data-annual-price="">N1006.20</span>
                                                <span class="text-body fs-sm fw-normal"> / per month</span>
                                            </h4>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled fs-sm pb-md-3 mb-3">
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Aenean neque tortor, purus faucibus
                                        </li>
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Nullam augue vitae et volutpat sagittis
                                        </li>
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Mauris massa penatibus enim elit quam
                                        </li>
                                        <li class="d-flex mb-2">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Nec ac sagittis nunc bibendum
                                        </li>
                                        <li class="d-flex">
                                            <i class="bx bx-check fs-xl text-chambray me-1"></i>
                                            Odio ut orci volutpat ultricies eleifend
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer border-0 pt-0 pb-4">
                                    <a href="javascript:" class="btn btn-primary w-100">Buy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-secondary">
        <div class="container mb-lg-2">
            <div class="text-center pt-md-2 pb-2 pb-md-0 mb-4 mb-md-0">
                <h2 class="pb-3 mb-1 mb-lg-3 text-chambray">
                    Got questions? Check out the FAQs
                </h2>

                @if(false)
                    <p class="fs-lg pb-3 mb-2 mb-lg-3">Couldn’t find what you are looking for?</p>
                    <div class="row row-cols-1 g-3 g-sm-4">
                        <div class="col">
                            <div class="card card-hover">
                                <div class="card-body pb-3">
                                    <i class="bx bx-message-rounded-dots d-block fs-2 text-primary mb-2 py-1"></i>
                                    <p class="fs-sm mb-2">
                                        Our AI agent (Lary) got you.
                                    </p>
                                    <a href="javascript:" class="btn btn-link text-primary stretched-link px-0">
                                        Chat with Lary
                                        <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="row py-2 py-md-4 py-lg-5">
                <div class="col-md-6">
                    <div class="accordion" id="faq">
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h2 class="accordion-header" id="q1-heading">
                                <button class="accordion-button shadow-none rounded-3 text-chambray" type="button" data-bs-toggle="collapse" data-bs-target="#q1" aria-expanded="true" aria-controls="q1">
                                    How do I check my balance?
                                </button>
                            </h2>
                            <div id="q1" class="accordion-collapse collapse show" aria-labelledby="q1-heading" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0" style="filter: blur(3px)">
                                    <p>Dial <b>XYZ#</b> or check via the <b>Lebara Nigeria app</b> available on IOS and Android.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h2 class="accordion-header" id="q2-heading">
                                <button class="accordion-button shadow-none rounded-3 text-chambray collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2" aria-expanded="false" aria-controls="q2">
                                    What happens when I activate my SIM?
                                </button>
                            </h2>
                            <div id="q2" class="accordion-collapse collapse" aria-labelledby="q2-heading" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0" style="filter: blur(3px)">
                                    <p>You automatically get a <b>Sterling Wallet</b>, unlocking access to microloans and device financing. T&C applies.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h2 class="accordion-header" id="q3-heading">
                                <button class="accordion-button shadow-none rounded-3 text-chambray collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3" aria-expanded="false" aria-controls="q3">
                                    Can I keep my current number when switching to Lebara?
                                </button>
                            </h2>
                            <div id="q3" class="accordion-collapse collapse" aria-labelledby="q3-heading" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0" style="filter: blur(3px)">
                                    <p>Yes! Our <b>number porting service</b> allows you to bring your existing number to Lebara with ease.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h2 class="accordion-header" id="q4-heading">
                                <button class="accordion-button shadow-none rounded-3 text-chambray collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q4" aria-expanded="false" aria-controls="q4">
                                    What are the benefits of the Sterling Wallet?
                                </button>
                            </h2>
                            <div id="q4" class="accordion-collapse collapse" aria-labelledby="q4-heading" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0" style="filter: blur(3px)">
                                    <p>With a Sterling Wallet, you can access <b>instant microloans</b>, finance a new device, and enjoy
                                        <b>seamless digital payments and easy recharge</b>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h2 class="accordion-header" id="q5-heading">
                                <button class="accordion-button shadow-none rounded-3 text-chambray collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q5" aria-expanded="false" aria-controls="q5">
                                    What data and voice plans are available?
                                </button>
                            </h2>
                            <div id="q5" class="accordion-collapse collapse" aria-labelledby="q5-heading" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0" style="filter: blur(3px)">
                                    <p>We offer a range of <b>affordable plans</b> tailored for local and international calls, with
                                        <b>high-speed data bundles</b> to keep you connected.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="accordion" id="faq2">
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h2 class="accordion-header" id="q6-heading">
                                <button class="accordion-button shadow-none rounded-3 text-chambray collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q6" aria-expanded="false" aria-controls="q6">
                                    Can I recharge my Lebara line online?
                                </button>
                            </h2>
                            <div id="q6" class="accordion-collapse collapse" aria-labelledby="q6-heading" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0" style="filter: blur(3px)">
                                    <p>Absolutely! Top up online via our <b>website, mobile app, or bank transfers</b> for easy and fast recharges.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h2 class="accordion-header" id="q7-heading">
                                <button class="accordion-button shadow-none rounded-3 text-chambray collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q7" aria-expanded="false" aria-controls="q7">
                                    Is Lebara available across Nigeria?
                                </button>
                            </h2>
                            <div id="q7" class="accordion-collapse collapse" aria-labelledby="q7-heading" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0" style="filter: blur(3px)">
                                    <p>Yes! We have <b>nationwide coverage</b>, ensuring you stay connected no matter where you are.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h2 class="accordion-header" id="q8-heading">
                                <button class="accordion-button shadow-none rounded-3 text-chambray collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q8" aria-expanded="false" aria-controls="q8">
                                    What makes Lebara different from other telecom brands?
                                </button>
                            </h2>
                            <div id="q8" class="accordion-collapse collapse" aria-labelledby="q8-heading" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0" style="filter: blur(3px)">
                                    <p>
                                        Unlike other networks, we offer <b>more than just telecom services</b>—we integrate financial benefits and our bundle incorporated lifestyle perks into your mobile experience
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h2 class="accordion-header" id="q9-heading">
                                <button class="accordion-button shadow-none rounded-3 text-chambray collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q9" aria-expanded="false" aria-controls="q9">
                                    Do you offer international calling?
                                </button>
                            </h2>
                            <div id="q9" class="accordion-collapse collapse" aria-labelledby="q9-heading" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0" style="filter: blur(3px)">
                                    <p>
                                        Yes! We provide <b>low-cost international call rates</b> so you can stay connected with loved ones abroad.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h2 class="accordion-header" id="q10-heading">
                                <button class="accordion-button shadow-none rounded-3 text-chambray collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q10" aria-expanded="false" aria-controls="q10">
                                    How do I contact customer support?
                                </button>
                            </h2>
                            <div id="q10" class="accordion-collapse collapse" aria-labelledby="q10-heading" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0" style="filter: blur(3px)">
                                    <p>You can reach us via <b>call, WhatsApp, email, or by visiting our nearest service
                                            center</b>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download app CTA -->
    <section class="pt-lg-4 pt-xl-5 overflow-hidden bg-blue-50">
        <div class="container pt-5">
            <div class="row pt-2 pt-sm-3 pt-md-4">
                <div
                    class="col-md-6 col-xl-5 col-xxl-4 text-center text-md-start pb-4 pb-sm-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
                    <h2 class="h1 mb-5" style="color: #3d4998">Download the app</h2>
                    <div class="d-flex d-md-block mt-n2 mt-sm-0">
                        <div class="row row-cols-1 row-cols-lg-2 align-items-lg-end me-1 me-md-0 pb-md-4 mb-md-3">
                            <div class="col">
                                <h3 class="fs-base fw-normal mb-2" style="color: #3d4998">App Store</h3>
                                <div class="text-nowrap text-warning pb-1 mb-2">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                </div>
                            </div>
                            <div class="col d-xl-flex justify-content-end">
                                <a href="javascript:"
                                   class="btn btn-dark btn-lg w-xl-100 px-3 py-2 ms-xl-3 mt-3 mt-lg-0">
                                    <img src="/assets/img/market/appstore-light.svg" class="light-mode-img" width="124"
                                         alt="App Store">
                                    <img src="/assets/img/market/appstore-dark.svg" class="dark-mode-img" width="124"
                                         alt="App Store">
                                </a>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-lg-2 align-items-lg-end">
                            <div class="col">
                                <h3 class="fs-base fw-normal mb-2" style="color: #3d4998">Google Play</h3>
                                <div class="text-nowrap text-warning pb-1 mb-2">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                </div>
                            </div>
                            <div class="col d-xl-flex justify-content-end">
                                <a href="javascript:"
                                   class="btn btn-dark btn-lg w-xl-100 px-3 py-2 ms-xl-3 mt-3 mt-lg-0">
                                    <img src="/assets/img/market/googleplay-light.svg" class="light-mode-img" width="139"
                                         alt="Google Play">
                                    <img src="/assets/img/market/googleplay-dark.svg" class="dark-mode-img" width="139"
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
</x-layouts.site>
