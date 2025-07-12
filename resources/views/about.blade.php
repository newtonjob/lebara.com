<x-layouts.site>
    <section>
        <img src="/about.png" alt="header">
    </section>

    <nav class="container py-4 mb-2 my-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
    </nav>

    <section class="container pb-5 mb-md-2 mb-lg-4">
        <h1 class="border-bottom pb-4 text-chambray-900">We are Lebara</h1>
        <div class="row pt-2 pt-md-3">
            <div class="col-md-6">
                <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">Beyond top-tier telecommunications, we have forged strategic partnerships to offer financial services designed to empower the creative industry. Through microloans, device funding, near free internet hubs, and culture-shaping events to boost the Art and tourism sector, we are committed to driving innovation, inclusion, and economic growth.
                </p>
            </div>
            <div class="col-md-6">
                <p class="fs-lg ps-lg-4 mb-1 mb-lg-4">
                    At Lebara Nigeria, our mission is to make staying connected easier and more affordable for Nigerians at home and abroad. We understand the importance of keeping in touch with loved ones, whether across cities or across borders.
                    We are dedicated to breaking communication barriers for communities worldwide. Now in Nigeria, we are committed to empowering individuals, families, and businesses to stay connected effortlessly.
                </p>
            </div>
        </div>
    </section>

    @if (false)
        <!-- Brands (carousel on screens < 1100px) -->
        <section class="container border-bottom-lg pt-sm-2">
            <div class="swiper mx-n2"
                 data-swiper-options='{
              "slidesPerView": 2,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "breakpoints": {
                "500": {
                  "slidesPerView": 3,
                  "spaceBetween": 8
                },
                "650": {
                  "slidesPerView": 4,
                  "spaceBetween": 8
                },
                "850": {
                  "slidesPerView": 5,
                  "spaceBetween": 8
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 8
                }
              }
            }'
            >
                <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide py-2">
                        <a href="javascript:" class="px-2 mx-2">
                            <img src="/assets/img/brands/01.svg" class="d-block mx-auto my-2" width="155" alt="Brand">
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-2">
                        <a href="javascript:" class="px-2 mx-2">
                            <img src="/assets/img/brands/02.svg" class="d-block mx-auto my-2" width="155" alt="Brand">
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-2">
                        <a href="javascript:" class="px-2 mx-2">
                            <img src="/assets/img/brands/03.svg" class="d-block mx-auto my-2" width="155" alt="Brand">
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-2">
                        <a href="javascript:" class="px-2 mx-2">
                            <img src="/assets/img/brands/04.svg" class="d-block mx-auto my-2" width="155" alt="Brand">
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-2">
                        <a href="javascript:" class="px-2 mx-2">
                            <img src="/assets/img/brands/05.svg" class="d-block mx-auto my-2" width="155" alt="Brand">
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-2">
                        <a href="javascript:" class="px-2 mx-2">
                            <img src="/assets/img/brands/06.svg" class="d-block mx-auto my-2" width="155" alt="Brand">
                        </a>
                    </div>
                </div>

                <!-- Pagination (bullets) -->
                <div class="swiper-pagination position-relative pt-3"></div>
            </div>
        </section>
    @endif

    <section class="pt-lg-5 bg-blue-50" id="benefits">
        <div class="container pt-3 pb-5">
            <div class="swiper pt-3 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                 data-swiper-options="{
          &quot;slidesPerView&quot;: 1,
          &quot;pagination&quot;: {
            &quot;el&quot;: &quot;.swiper-pagination&quot;,
            &quot;clickable&quot;: true
          },
          &quot;breakpoints&quot;: {
            &quot;500&quot;: {
              &quot;slidesPerView&quot;: 2
            },
            &quot;991&quot;: {
              &quot;slidesPerView&quot;: 3
            }
          }
        }">
                <div class="swiper-wrapper pt-4" id="swiper-wrapper-3100144cdbd8fbf97" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">

                    <!-- Item -->
                    <div class="swiper-slide border-end-lg px-2 swiper-slide-active" role="group" aria-label="1 / 3" style="width: 329.667px;">
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet-cards-icon lucide-wallet-cards text-primary d-block mb-4 mx-auto"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2"/><path d="M3 11h3c.8 0 1.6.3 2.1.9l1.1.9c1.6 1.6 4.1 1.6 5.7 0l1.1-.9c.5-.5 1.3-.9 2.1-.9H21"/></svg>

                            <h4 class="mb-2 pb-1 text-chambray">Affordable</h4>
                            <p class="mx-auto text-chambray" style="max-width: 336px;">
                                Feel free to focus on your connection while we focus on giving you the best value for your money, whether locally or internationally.
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide border-end-lg px-2 swiper-slide-next" role="group" aria-label="2 / 3" style="width: 329.667px;">
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-biceps-flexed-icon lucide-biceps-flexed text-primary d-block mb-4 mx-auto"><path d="M12.409 13.017A5 5 0 0 1 22 15c0 3.866-4 7-9 7-4.077 0-8.153-.82-10.371-2.462-.426-.316-.631-.832-.62-1.362C2.118 12.723 2.627 2 10 2a3 3 0 0 1 3 3 2 2 0 0 1-2 2c-1.105 0-1.64-.444-2-1"/><path d="M15 14a5 5 0 0 0-7.584 2"/><path d="M9.964 6.825C8.019 7.977 9.5 13 8 15"/></svg>
                            <h4 class="mb-2 pb-1 text-chambray">Reliable</h4>
                            <p class="mx-auto text-chambray" style="max-width: 336px;">
                                The era of “can you hear me” is gone. We sabi what works and we offer you uninterrupted connectivity. whenever you need it. We keep you connected, always.
                            </p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide px-2" role="group" aria-label="3 / 3" style="width: 329.667px;">
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-laugh-icon lucide-laugh text-primary d-block mb-4 mx-auto"><circle cx="12" cy="12" r="10"/><path d="M18 13a6 6 0 0 1-6 5 6 6 0 0 1-6-5h12Z"/><line x1="9" x2="9.01" y1="9" y2="9"/><line x1="15" x2="15.01" y1="9" y2="9"/></svg>

                            <h4 class="mb-2 pb-1 text-chambray">Quality Service</h4>
                            <p class="mx-auto text-chambray" style="max-width: 336px;">
                                Because you deserve to be treated like royalty, we are dedicated to offering you just that. From quick support, seamless service, and a brand that listens. For us, If we can give you coffee over the phone while you wait, we would.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Pagination (bullets) -->
                <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4 swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    </section>

    <section class="pb-5 bg-blue-50">
        <div class="container text-center mt-n2 mt-md-0 mb-md-2 mb-lg-4">
            <div class="position-relative rounded-3 overflow-hidden">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center zindex-5">
                    <a href="https://youtu.be/nCGuEywZvAw" class="btn btn-video btn-icon btn-xl stretched-link bg-white" data-bs-toggle="video" aria-label="Play video" data-lg-id="830de4e4-41be-47d4-a517-673606aa8c43">
                        <i class="bx bx-play"></i>
                    </a>
                </div>
                <span class="position-absolute top-0 start-0 w-100 h-100"></span>
                <img src="{{ asset('we-are-lebara.jpg') }}" class="d-block w-100" alt="Cover image">
            </div>
        </div>
    </section>

    <section class="bg-secondary">

        <div class="position-relative py-lg-4 py-xl-5">

            <!-- Swiper tabs -->
            <div class="swiper-tabs position-absolute top-0 start-0 w-100 h-100">
                <div id="image-1" class="jarallax position-absolute top-0 start-0 w-100 h-100 swiper-tab active" data-jarallax data-speed="0.4">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
                    <div class="jarallax-img" style="background-image: url('{{ asset('mou.jpg') }}');"></div>
                </div>
                <div id="image-2" class="jarallax position-absolute top-0 start-0 w-100 h-100 swiper-tab" data-jarallax data-speed="0.4">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
                    <div class="jarallax-img" style="background-image: url('{{ asset('more-value.jpeg') }}');"></div>
                </div>
                <div id="image-3" class="jarallax position-absolute top-0 start-0 w-100 h-100 swiper-tab" data-jarallax data-speed="0.4">
                    <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
                    <div class="jarallax-img" style="background-image: url('{{ asset('networking.jpg') }}');"></div>
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
                                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-handshake-icon lucide-handshake text-primary mb-3"><path d="m11 17 2 2a1 1 0 1 0 3-3"/><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"/><path d="m21 3 1 11h-2"/><path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"/><path d="M3 4h8"/></svg>

                                            <h3 class="mb-2">Partnership</h3>
                                            <p class="mb-2 pb-lg-3">At our core is the desire to provide great customer experiences, that’s why we have partnered with financial and government institutions to enhance your experience.
                                            </p>
                                            <p class="mb-4 pb-lg-3">By owning a Lebara sim, <span style="filter: blur(5px)">you automatically get a prefunded wallet</span>, which grants you access to micro loans, device funding, discounted internet offer at designated creative hubs and access to exclusive events by our partners.
                                            </p>
                                            <p class="mb-4 pb-lg-3">
                                                For partnership enquiries, send an email to
                                                <a href="mailto:partnerships@lebara.ng" class="">partnerships@lebara.ng</a>
                                            </p>
                                        </div>

                                        <!-- Item -->
                                        <div class="swiper-slide" data-swiper-tab="#image-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-boxes-icon lucide-boxes text-primary mb-3"><path d="M2.97 12.92A2 2 0 0 0 2 14.63v3.24a2 2 0 0 0 .97 1.71l3 1.8a2 2 0 0 0 2.06 0L12 19v-5.5l-5-3-4.03 2.42Z"/><path d="m7 16.5-4.74-2.85"/><path d="m7 16.5 5-3"/><path d="M7 16.5v5.17"/><path d="M12 13.5V19l3.97 2.38a2 2 0 0 0 2.06 0l3-1.8a2 2 0 0 0 .97-1.71v-3.24a2 2 0 0 0-.97-1.71L17 10.5l-5 3Z"/><path d="m17 16.5-5-3"/><path d="m17 16.5 4.74-2.85"/><path d="M17 16.5v5.17"/><path d="M7.97 4.42A2 2 0 0 0 7 6.13v4.37l5 3 5-3V6.13a2 2 0 0 0-.97-1.71l-3-1.8a2 2 0 0 0-2.06 0l-3 1.8Z"/><path d="M12 8 7.26 5.15"/><path d="m12 8 4.74-2.85"/><path d="M12 13.5V8"/></svg>

                                            <h3 class="mb-2">More Value</h3>
                                            <p class="mb-2 pb-lg-3">We are about adding value, that’s why our product are designed to make you enjoy your interactions with family. friends or business partners.
                                            </p>
                                            <p class="mb-4 pb-lg-3">At Lebara we have a bundle that is designed just for you at an affordable price.
                                            </p>
                                        </div>

                                        <div class="swiper-slide" data-swiper-tab="#image-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-network-icon lucide-network text-primary mb-3"><rect x="16" y="16" width="6" height="6" rx="1"/><rect x="2" y="16" width="6" height="6" rx="1"/><rect x="9" y="2" width="6" height="6" rx="1"/><path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3"/><path d="M12 12V8"/></svg>

                                            <h3 class="mb-2">Networking</h3>
                                            <p class="mb-2 pb-lg-3">We are a network provider, who says your networking game can’t be our business, that’s why with a Lebara sim and the right bundle, you have access to government and creative hubs across the nation at subsidized rate.
                                            </p>
                                            <p class="mb-2 pb-lg-3"> Na who sabi go enjoy!</p>
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
</x-layouts.site>
