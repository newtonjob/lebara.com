<x-layouts.site>
    <div class="jarallax d-none d-md-block" data-jarallax="" data-speed="0.35">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-primary-translucent"></span>

        <div class="d-none d-xxl-block" style="height: 300px;"></div>
        <div class="d-none d-md-block d-xxl-none" style="height: 300px;"></div>
        <div id="jarallax-container-0" class="jarallax-container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);"><div class="jarallax-img" style="background-image: url(&quot;assets/img/about/cover.jpg&quot;); object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1066px; height: 837.3px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; margin-top: 77.35px; transform: translate3d(0px, -50.75px, 0px);" data-jarallax-original-styles="background-image: url('assets/img/about/cover.jpg');"></div></div></div>

    <nav class="container py-4 mb-2 my-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Product/Service</li>
        </ol>
    </nav>

    <section class="bg-secondary pt-1 d-none">
        <div class="position-relative py-lg-4 py-xl-5">

            <!-- Swiper tabs -->
            <div class="swiper-tabs position-absolute top-0 start-0 w-100 h-100">
                <div id="image-1" class="jarallax position-absolute top-0 start-0 w-100 h-100 swiper-tab active" data-jarallax data-speed="0.4">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
                    <div class="jarallax-img" style="background-image: url('assets/img/landing/software-agency-1/case-study01.jpg');"></div>
                </div>
                <div id="image-2" class="jarallax position-absolute top-0 start-0 w-100 h-100 swiper-tab" data-jarallax data-speed="0.4">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
                    <div class="jarallax-img" style="background-image: url('assets/img/landing/software-agency-1/case-study02.jpg');"></div>
                </div>
            </div>

            <!-- Swiper slider -->
            <div class="container position-relative zindex-5 py-5">
                <div class="row py-2 py-md-3">
                    <div class="col-xl-5 col-lg-7 col-md-9">
                        <!-- Slider controls (Prev / next) -->
                        <div class="d-flex justify-content-center justify-content-md-start pb-3 mb-3">
                            <button type="button" id="case-study-prev" class="btn btn-prev btn-icon btn-sm bg-white me-2" aria-label="Previous">
                                <i class="bx bx-chevron-left"></i>
                            </button>
                            <button type="button" id="case-study-next" class="btn btn-next btn-icon btn-sm bg-white ms-2" aria-label="Next">
                                <i class="bx bx-chevron-right"></i>
                            </button>
                        </div>

                        <!-- Card -->
                        <div class="card bg-white shadow-sm p-3">
                            <div class="card-body">
                                <div class="swiper" data-swiper-options='{
                                  "spaceBetween": 30,
                                  "loop": true,
                                  "tabs": true,
                                  "pagination": {
                                    "el": "#case-study-pagination",
                                    "clickable": true
                                  },
                                  "navigation": {
                                    "prevEl": "#case-study-prev",
                                    "nextEl": "#case-study-next"
                                  }
                                }'>
                                    <div class="swiper-wrapper">

                                        <!-- Item -->
                                        <div class="swiper-slide" data-swiper-tab="#image-1">
                                            <img src="/assets/img/landing/software-agency-1/case-study-logo01.png" class="d-block mb-3" width="72" alt="Logo">
                                            <h3 class="mb-2">Cashless payment case study</h3>
                                            <p class="fs-sm text-muted border-bottom pb-3 mb-3">Payment Service Provider Company</p>
                                            <p class="pb-2 pb-lg-3 mb-3">Aenean dolor elit tempus tellus imperdiet. Elementum, ac convallis morbi sit est feugiat ultrices. Cras tortor maecenas pulvinar nec ac justo. Massa sem eget semper...</p>
                                            <a href="landing-software-dev-agency-v1.html#" class="btn btn-primary">View case study</a>
                                        </div>

                                        <!-- Item -->
                                        <div class="swiper-slide" data-swiper-tab="#image-2">
                                            <img src="/assets/img/landing/software-agency-1/case-study-logo02.png" class="d-block mb-3" width="72" alt="Logo">
                                            <h3 class="mb-2">Smart tech case study</h3>
                                            <p class="fs-sm text-muted border-bottom pb-3 mb-3">Data Analytics Company</p>
                                            <p class="pb-2 pb-lg-3 mb-3">Adipiscing quis a at ligula. Gravida gravida diam rhoncus cursus in. Turpis sagittis tempor gravida phasellus sapien. Faucibus donec consectetur sed id sit nisl.</p>
                                            <a href="landing-software-dev-agency-v1.html#" class="btn btn-primary">View case study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination (bullets) -->
                        <div class="pt-4 mt-3" data-bs-theme="dark">
                            <div id="case-study-pagination" class="swiper-pagination position-relative bottom-0"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mb-5 pt-md-2 pt-lg-4 pt-xl-5">
        <h2 class="h1 my-4 pt-2 text-center text-chambray">The Benefits of Lebara Sim</h2>
        <div class="row pb-4">
            <div class="col-md-3 col-6 order-md-1 order-2">
                <div class="d-flex flex-column justify-content-between h-100 text-center">

                    <!-- Item -->
                    <div class="mt-md-5 mt-4">
                        <img src="/assets/img/landing/product/benefits/battery.svg" alt="Icon" class="d-inline-block mb-4">
                        <h3 class="h4 mb-0 lh-1">
                            <span class="d-block mb-2 fs-base fw-normal">Reliable network coverage</span>
                            Strong Connectivity
                        </h3>
                    </div>

                    <!-- Item -->
                    <div class="mt-md-5 mt-4">
                        <img src="/assets/img/landing/product/benefits/drone.svg" alt="Icon" class="d-inline-block mb-4">
                        <h3 class="h4 mb-0 lh-1">
                            <span class="d-block mb-2 fs-base fw-normal">Fast data speeds</span>
                            High Performance
                        </h3>
                    </div>

                    <!-- Item -->
                    <div class="mt-md-5 mt-4">
                        <img src="/assets/img/landing/product/benefits/monitor.svg" alt="Icon" class="d-inline-block mb-4">
                        <h3 class="h4 mb-0 lh-1">
                            <span class="d-block mb-2 fs-base fw-normal">Affordable plans for calls & data</span>
                            Budget-Friendly
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 order-md-2 order-1">
                <div class="d-flex flex-column justify-content-between h-100">

                    <!-- Image -->
                    <div class="mx-md-n5 mb-md-n5 text-center p-5">
                        <img src="{{ asset('sim.png') }}" class="w-lg-75" alt="Image">
                    </div>

                    <!-- Items row -->
                    <div class="row row-cols-2 mt-md-5 mt-4 text-center">

                        <!-- Item -->
                        <div class="col">
                            <img src="/assets/img/landing/product/benefits/thermometer.svg" alt="Icon" class="d-inline-block mb-4">
                            <h3 class="h4 mb-0 lh-1">
                                <span class="d-block mb-2 fs-base fw-normal">Access to Microloans</span>
                                Instant Credit
                            </h3>
                        </div>

                        <!-- Item -->
                        <div class="col">
                            <img src="/assets/img/landing/product/benefits/led-light.svg" alt="Icon" class="d-inline-block mb-4">
                            <h3 class="h4 mb-0 lh-1">
                                <span class="d-block mb-2 fs-base fw-normal">Device financing</span>
                                Easy Payments
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 order-md-3 order-3">
                <div class="d-flex flex-column justify-content-between h-100 text-center">

                    <!-- Item -->
                    <div class="mt-md-5 mt-4">
                        <img src="/assets/img/landing/product/benefits/zoom-in.svg" alt="Icon" class="d-inline-block mb-4">
                        <h3 class="h4 mb-0 lh-1">
                            <span class="d-block mb-2 fs-base fw-normal">One SIM, 10 Countries</span>
                            Seamless Roaming
                        </h3>
                    </div>

                    <!-- Item -->
                    <div class="mt-md-5 mt-4">
                        <img src="/assets/img/landing/product/benefits/computer-microprocessor.svg" alt="Icon" class="d-inline-block mb-4">
                        <h3 class="h4 mb-0 lh-1">
                            <span class="d-block mb-2 fs-base fw-normal">Access to Creative Hubs</span>
                            Innovation Spaces
                        </h3>
                    </div>

                    <!-- Item -->
                    <div class="mt-md-5 mt-4">
                        <img src="/assets/img/landing/product/benefits/audio.svg" alt="Icon" class="d-inline-block mb-4">
                        <h3 class="h4 mb-0 lh-1">
                            <span class="d-block mb-2 fs-base fw-normal">Unique bundle plan</span>
                            Exclusive Offers
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="bg-secondary pt-5">
        <div class="container pt-2 pt-sm-3 pt-md-4 pt-lg-5">
            <div class="row pt-xl-2 pt-xxl-4 pb-3 pb-sm-4 pb-md-5 mt-2">
                <div class="col-md-6 col-xl-5 col-xxl-4">
                    <h2 class="h1 text-chambray">We offer <span class="text-primary">beneficial conditions</span> for all categories of users</h2>
                </div>
                <div class="col-md-6 col-xl-5 offset-xl-2 offset-xxl-3">
                    <ul class="list-unstyled">
                        <li class="d-flex fs-xl pb-2 mb-1">
                            <i class="bx bx-check-circle text-primary d-flex pe-1 me-2" style="margin-top: .375rem;"></i>
                            Banking transactions are free for you
                        </li>
                        <li class="d-flex fs-xl pb-2 mb-1">
                            <i class="bx bx-check-circle text-primary d-flex pe-1 me-2" style="margin-top: .375rem;"></i>
                            No monthly cash commission
                        </li>
                        <li class="d-flex fs-xl pb-2 mb-1">
                            <i class="bx bx-check-circle text-primary d-flex pe-1 me-2" style="margin-top: .375rem;"></i>
                            Manage payments and transactions online
                        </li>
                        <li class="d-flex fs-xl pb-2 mb-1">
                            <i class="bx bx-check-circle text-primary d-flex pe-1 me-2" style="margin-top: .375rem;"></i>
                            Receive real-time alerts
                        </li>
                        <li class="d-flex fs-xl">
                            <i class="bx bx-check-circle text-primary d-flex pe-1 me-2" style="margin-top: .375rem;"></i>
                            Receive payment from international banks
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-blue-50 pt-5">
        <div class="container">
            <!-- Business category -->
            <div class="row align-items-center justify-content-center py-4 py-md-5">
                <div class="col-10 col-sm-9 col-md-6 col-xl-7 d-flex justify-content-md-end order-md-2 pb-2 pb-md-0 mb-4 mb-md-0">
                    <img src="/assets/img/landing/app-showcase-3/categories/business.png" width="642" alt="Businessman">
                </div>
                <div class="col-md-6 col-xl-5 order-md-1 text-center text-md-start">
                    <h2 class="mb-lg-4 text-chambray">For business services</h2>
                    <p class="fs-lg pb-4 mb-0">Our app simplifies the process of tracking your company's financial health. From cash flow analysis to expense tracking, our app offers a wide range of tools that help you make informed decisions about your business finances. Stay on top of your financial performance.</p>
                    <a href="javascript:" class="btn btn-primary mt-1">
                        Learn more
                        <i class="bx bx-chevron-right fs-lg ms-2 me-n2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-chambray pt-5">
        <div class="container">
            <!-- Sturtups category -->
            <div class="row align-items-center justify-content-center py-4 py-md-5 my-1 my-sm-3 my-md-0 my-xl-3">
                <div class="col-10 col-sm-9 col-md-6 col-xl-7 pb-2 pb-md-0 mb-4 mb-md-0">
                    <div class="pe-md-4 pe-xl-0">
                        <img src="/assets/img/landing/app-showcase-3/categories/startups.png" width="636" alt="Startupper">
                    </div>
                </div>
                <div class="col-md-6 col-xl-5 text-center text-md-start">
                    <h2 class="mb-lg-4 text-blue-50">Offer for startups</h2>
                    <p class="fs-lg pb-4 mb-0 text-white">Starting a new business is a challenging venture, and managing your finances can be overwhelming. Our app offers a range of features designed specifically for startups, from budget tracking to financial planning. It helps you make informed decisions, and focus on growing your business.</p>
                    <a href="javascript:" class="btn btn-primary mt-1">
                        Learn more
                        <i class="bx bx-chevron-right fs-lg ms-2 me-n2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light pt-5">
        <div class="container">
            <!-- Students category -->
            <div class="row align-items-center justify-content-center py-4 py-md-5 my-1 my-sm-3 my-md-0 my-xl-3">
                <div class="col-10 col-sm-9 col-md-6 col-xl-7 d-flex justify-content-md-end order-md-2 pb-2 pb-md-0 mb-4 mb-md-0">
                    <img src="/assets/img/landing/app-showcase-3/categories/students.png" width="640" alt="Student">
                </div>
                <div class="col-md-6 col-xl-5 order-md-1 text-center text-md-start">
                    <h2 class="mb-lg-4 text-chambray">Benefits for students</h2>
                    <p class="fs-lg pb-4 mb-0">Managing your finances as a student can be difficult, but our app makes it easy. It offers a variety of features that help you track your expenses, set budgets, and save money. Easily monitor your spending habits and make informed decisions about your finances. Start managing your money like a pro!</p>
                    <a href="javascript:" class="btn btn-primary mt-1">
                        Learn more
                        <i class="bx bx-chevron-right fs-lg ms-2 me-n2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary pt-5">
        <div class="container">
            <!-- Stats -->
            <div class="pb-5 pt-2 pt-sm-3 pt-lg-4 pt-xl-5">
                <div class="swiper pb-sm-2 pb-md-4 pb-lg-5 mb-xxl-3 mx-n2" data-swiper-options='{
              "slidesPerView": 1,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "breakpoints": {
                "500": {
                  "slidesPerView": 2,
                  "spaceBetween": 8
                },
                "650": {
                  "slidesPerView": 2,
                  "spaceBetween": 8
                },
                "900": {
                  "slidesPerView": 3,
                  "spaceBetween": 8
                },
                "1100": {
                  "slidesPerView": 4,
                  "spaceBetween": 8
                }
              }
            }'>
                    <div class="swiper-wrapper">

                        <!-- Item -->
                        <div class="swiper-slide h-auto py-3">
                            <div class="card border-0 shadow h-100 text-center text-sm-start p-3 mx-2">
                                <div class="card-body">
                                    <img src="/assets/img/landing/app-showcase-3/features/payment.svg" style="filter: drop-shadow(0px 0.8645132780075073px 4.602016925811768px rgba(99, 102, 241, 0.02)) drop-shadow(0px 2.9037201404571533px 10.33138370513916px rgba(99, 102, 241, 0.05)) drop-shadow(0px 13px 27px rgba(99, 102, 241, 0.17));" alt="Payment icon">
                                    <h3 class="h1 pt-4 mb-1">355 <span class="h4">billions</span></h3>
                                    <p class="fs-lg mb-0">Money spent</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide h-auto py-3">
                            <div class="card border-0 shadow h-100 text-center text-sm-start p-3 mx-2">
                                <div class="card-body">
                                    <img src="/assets/img/landing/app-showcase-3/features/users.svg" style="filter: drop-shadow(0px 0.8645132780075073px 4.602016925811768px rgba(8, 14, 138, 0.02)) drop-shadow(0px 2.9037201404571533px 10.33138370513916px rgba(8, 14, 138, 0.04)) drop-shadow(0px 15px 30px rgba(8, 14, 138, 0.10));" alt="Users icon">
                                    <h3 class="h1 pt-4 mb-1">3.4 <span class="h4">millions</span></h3>
                                    <p class="fs-lg mb-0">Application users</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide h-auto py-3">
                            <div class="card border-0 shadow h-100 text-center text-sm-start p-3 mx-2">
                                <div class="card-body">
                                    <img src="/assets/img/landing/app-showcase-3/features/statistics.svg" style="filter: drop-shadow(0px 0.8645132780075073px 4.602016925811768px rgba(99, 102, 241, 0.02)) drop-shadow(0px 2.9037201404571533px 10.33138370513916px rgba(99, 102, 241, 0.05)) drop-shadow(0px 13px 27px rgba(99, 102, 241, 0.17));" alt="Statistics icon">
                                    <h3 class="h1 pt-4 mb-1">1.2 <span class="h4">billions</span></h3>
                                    <p class="fs-lg mb-0">Transactions a month</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="swiper-slide h-auto py-3">
                            <div class="card border-0 shadow h-100 text-center text-sm-start p-3 mx-2">
                                <div class="card-body">
                                    <img src="/assets/img/landing/app-showcase-3/features/cashback.svg" style="filter: drop-shadow(0px 0.8645132780075073px 4.602016925811768px rgba(8, 14, 138, 0.02)) drop-shadow(0px 2.9037201404571533px 10.33138370513916px rgba(8, 14, 138, 0.04)) drop-shadow(0px 14px 28px rgba(8, 14, 138, 0.10));" alt="Cashback icon">
                                    <h3 class="h1 pt-4 mb-1">1.7 <span class="h4">billions</span></h3>
                                    <p class="fs-lg mb-0">Accrued cashback</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination (bullets) -->
                    <div class="swiper-pagination position-relative pt-2 mt-4"></div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.site>
