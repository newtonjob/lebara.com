<x-layouts.site>
    <!-- Hero slider + BG parallax -->
    <section class="jarallax min-vh-100" data-jarallax data-speed="0.4" data-bs-theme="dark">
        <video class="w-100 h-100 position-absolute object-fit-cover min-vh-100" autoplay muted loop>
            <source src="/lekki-video.mp4" type="video/mp4">
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

                            <!-- Pagination (bullets) -->
                            <div class="swiper-pagination position-relative d-md-none pt-2 mt-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-flex flex-column flex-sm-row align-items-center justify-content-between position-relative zindex-5 pb-5">
            <div class="d-flex mb-4 mb-sm-0">
                <a href="#" class="btn btn-icon btn-secondary btn-linkedin rounded-circle me-2" aria-label="LinkedIn">
                    <i class="bx bxl-linkedin"></i>
                </a>
                <a href="#" class="btn btn-icon btn-secondary btn-facebook rounded-circle me-2" aria-label="Facebook">
                    <i class="bx bxl-facebook"></i>
                </a>
                <a href="#" class="btn btn-icon btn-secondary btn-twitter rounded-circle me-2" aria-label="Twitter">
                    <i class="bx bxl-twitter"></i>
                </a>
                <a href="#" class="btn btn-icon btn-secondary btn-youtube rounded-circle me-2" aria-label="YouTube">
                    <i class="bx bxl-youtube"></i>
                </a>
            </div>
            <a href="#" class="nav-link px-0">
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
                    <p class="fs-lg pb-lg-3 mb-4">We create diverse, complex, web and mobile solutions for any business need. With us you get quality software and perfect service every time.</p>
                    <a href="/about" class="btn btn-primary shadow-primary btn-lg">More About Us</a>
                    <div class="mt-3 mt-sm-0 pt-4 pt-sm-5 mt-xl-4">
                        <h2 class="h6 mb-4">Some of our awards:</h2>
                        <img src="assets/img/landing/software-agency-1/awards.svg" alt="Awards">
                    </div>
                </div>
                <div class="col-xl-6 col-md-7 offset-xl-1 pb-4 pb-sm-3 pb-lg-0 mb-4 mb-sm-5 mb-lg-0">
                    <img src="assets/img/landing/software-agency-1/about-img.jpg" class="rounded-3 shadow-sm" alt="Image">
                </div>
            </div>
        </div>
    </section>

    <section class="container pt-5 mt-2 mt-md-4 mt-lg-5">
        <div class="text-center pb-4 pb-md-0 mb-2 mb-md-5 mx-auto" style="max-width: 530px;">
            <h2 class="h1 text-chambray">How to get a sim/esim?</h2>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit volutpat mollis egestas nam luctus facilisis ultrices</p>
        </div>

        <!-- Steps -->
        <div class="steps steps-sm steps-horizontal-md steps-center pb-5 mb-md-2 mb-lg-3">
            <div class="step">
                <div class="step-number">
                    <div class="step-number-inner">1</div>
                </div>
                <div class="step-body">
                    <h3 class="h4 mb-3 text-chambray">Registration </h3>
                    <p class="mb-0">Massa enim libero dictumst consectetur in convallis lobortis</p>
                </div>
            </div>
            <div class="step">
                <div class="step-number">
                    <div class="step-number-inner">2</div>
                </div>
                <div class="step-body">
                    <h3 class="h4 mb-3 text-chambray">Identity verification</h3>
                    <p class="mb-0">At ultricies id non quisque integer eget velit. Facilisis enim</p>
                </div>
            </div>
            <div class="step">
                <div class="step-number">
                    <div class="step-number-inner">3</div>
                </div>
                <div class="step-body">
                    <h3 class="h4 mb-3 text-chambray">Start browsing</h3>
                    <p class="mb-0">Pellentesque rhoncus viverra vestibulum, purus purus</p>
                </div>
            </div>
            <div class="step">
                <div class="step-number">
                    <div class="step-number-inner">4</div>
                </div>
                <div class="step-body">
                    <h3 class="h4 mb-3 text-chambray">Earn with Lebara</h3>
                    <p class="mb-0">Massa enim libero dictumst consectetur in convallis lobortis</p>
                </div>
            </div>
        </div>

        <!-- Video -->
        <div class="bg-secondary position-relative rounded-3 overflow-hidden px-4 px-sm-5">
            <div class="position-absolute top-50 start-50 w-75 h-75 translate-middle d-flex align-items-center justify-content-center zindex-5">
                <a href="https://www.youtube.com/watch?v=wODsNtortYw" class="btn btn-video btn-icon btn-xl bg-white stretched-link" data-bs-toggle="video" aria-label="Play video" data-lg-id="66ba1219-7dab-496e-b976-de5af0fbab10">
                    <i class="bx bx-play"></i>
                </a>
            </div>
            <div class="pt-4 mt-sm-3 px-3 px-sm-5 mx-md-5">
                <img src="assets/img/landing/saas-3/video-cover.png" width="786" class="rellax d-block mx-auto mt-lg-4" alt="Card" data-rellax-percentage="0.5" data-rellax-speed="1.1" data-disable-parallax-down="lg" style="transform: translate3d(0px, 42px, 0px);">
            </div>
        </div>
    </section>

    <section class="py-5 bg-blue-50">
        <div class="container my-md-2 my-lg-4 my-xl-5">
            <h2 class="h1 text-center pb-3 pb-md-4 text-chambray">Transparent Pricing for You</h2>
            <div class="price-switch-wrapper mb-n2">
                <div class="form-check form-switch price-switch justify-content-center mt-2 mb-4" data-bs-toggle="price">
                    <input type="checkbox" class="form-check-input" id="pricing">
                    <label class="form-check-label" for="pricing">Monthly</label>
                    <label class="form-check-label d-flex align-items-start" for="pricing">Annually <span class="text-danger fs-xs fw-semibold mt-n2 ms-2">-10%</span></label>
                </div>
                <div class="table-responsive-xxl pt-md-3">
                    <div class="row flex-nowrap pb-4">
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm p-xxl-3" style="min-width: 18rem;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center pb-2 pb-md-3 mb-4">
                                        <div class="flex-shrink-0 bg-secondary rounded-3">
                                            <img src="assets/img/landing/saas-1/pricing/basic.png" width="84" alt="Icon">
                                        </div>
                                        <div class="ps-4">
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
                                    <a href="#" class="btn btn-primary w-100">Buy</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 border-0 bg-primary shadow-primary shadow-dark-mode-none p-xxl-3" style="min-width: 18rem;">
                                <div class="card-body">
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
                                    <a href="#" class="btn btn-light w-100">Buy</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm p-xxl-3" style="min-width: 18rem;">
                                <div class="card-body">
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
                                    <a href="#" class="btn btn-primary w-100">Buy</a>
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
            <div class="row py-2 py-md-4 py-lg-5">
                <div class="col-xl-4 col-md-5 text-center text-md-start pt-md-2 pb-2 pb-md-0 mb-4 mb-md-0">
                    <h2 class="pb-3 mb-1 mb-lg-3 text-chambray">Any questions? <br class="d-none d-md-inline">Check out the FAQs</h2>
                    <p class="fs-lg pb-3 mb-2 mb-lg-3">Still have unanswered questions and need to get in touch?</p>
                    <div class="row row-cols-1 row-cols-sm-2 g-3 g-sm-4">
                        <div class="col">
                            <div class="card card-hover">
                                <div class="card-body pb-3">
                                    <i class="bx bxs-phone-call d-block fs-2 text-chambray mb-2 py-1"></i>
                                    <p class="fs-sm mb-2">Still have  questions?</p>
                                    <a href="landing-mobile-app-showcase-v1.html#" class="btn btn-link stretched-link px-0">
                                        Call us
                                        <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-hover">
                                <div class="card-body pb-3">
                                    <i class="bx bx-message-rounded-dots d-block fs-2 text-success mb-2 py-1"></i>
                                    <p class="fs-sm mb-2">Still have  questions?</p>
                                    <a href="landing-mobile-app-showcase-v1.html#" class="btn btn-link text-success stretched-link px-0">
                                        Chat with us
                                        <i class="bx bx-right-arrow-alt fs-xl ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 offset-xl-1">
                    <div class="accordion" id="faq">
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h2 class="accordion-header" id="q1-heading">
                                <button class="accordion-button shadow-none rounded-3 text-chambray" type="button" data-bs-toggle="collapse" data-bs-target="#q1" aria-expanded="true" aria-controls="q1">
                                    Is any of my personal information stored in the App?
                                </button>
                            </h2>
                            <div id="q1" class="accordion-collapse collapse show" aria-labelledby="q1-heading" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                                    <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h2 class="accordion-header" id="q2-heading">
                                <button class="accordion-button shadow-none rounded-3 text-chambray collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q2" aria-expanded="false" aria-controls="q2">
                                    What formats can I download my transaction history in?
                                </button>
                            </h2>
                            <div id="q2" class="accordion-collapse collapse" aria-labelledby="q2-heading" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                                    <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h2 class="accordion-header" id="q3-heading">
                                <button class="accordion-button shadow-none rounded-3 text-chambray collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q3" aria-expanded="false" aria-controls="q3">
                                    Can I schedule future transfers?
                                </button>
                            </h2>
                            <div id="q3" class="accordion-collapse collapse" aria-labelledby="q3-heading" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                                    <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h2 class="accordion-header" id="q4-heading">
                                <button class="accordion-button shadow-none rounded-3 text-chambray collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q4" aria-expanded="false" aria-controls="q4">
                                    When can I use Banking App services?
                                </button>
                            </h2>
                            <div id="q4" class="accordion-collapse collapse" aria-labelledby="q4-heading" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                                    <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h2 class="accordion-header" id="q5-heading">
                                <button class="accordion-button shadow-none rounded-3 text-chambray collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q5" aria-expanded="false" aria-controls="q5">
                                    Can I create my own password that is easy for me to remember?
                                </button>
                            </h2>
                            <div id="q5" class="accordion-collapse collapse" aria-labelledby="q5-heading" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                                    <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 rounded-3 shadow-sm">
                            <h2 class="accordion-header" id="q6-heading">
                                <button class="accordion-button shadow-none rounded-3 text-chambray collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q6" aria-expanded="false" aria-controls="q6">
                                    What happens if I forget or lose my password?
                                </button>
                            </h2>
                            <div id="q6" class="accordion-collapse collapse" aria-labelledby="q6-heading" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Nunc duis id aenean gravida tincidunt eu, tempor ullamcorper. Viverra aliquam arcu, viverra et, cursus. Aliquet pretium cursus adipiscing gravida et consequat lobortis arcu velit. Nibh pharetra fermentum duis accumsan lectus non. Massa cursus molestie lorem scelerisque pellentesque. Nisi, enim, arcu purus gravida adipiscing euismod montes, duis egestas. Vehicula eu etiam quam tristique tincidunt suspendisse ut consequat.</p>
                                    <p class="mb-0">Ornare senectus fusce dignissim ut. Integer consequat in eu tortor, faucibus et lacinia posuere. Turpis sit viverra lorem suspendisse lacus aliquam auctor vulputate. Quis egestas aliquam nunc purus lacus, elit leo elit facilisi. Dignissim amet adipiscing massa integer.</p>
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
                                <a href="https://apps.apple.com/gb/app/mylebara/id1122491914"
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
                                <a href="https://play.google.com/store/apps/details?id=com.lebara.wallet&hl=en_GB&gl=US"
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
