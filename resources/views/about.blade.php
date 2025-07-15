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

    <section class="pt-lg-5">
        <div class="container pt-3 pb-5">
    <!-- Use case -->
    <div class="row align-items-center justify-content-center justify-content-md-start py-4 py-md-5 my-2 my-sm-3 my-md-0 my-xl-3">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 pb-2 pb-sm-3 pb-md-0 mb-4 mb-md-0">
            <div class="parallax" style="max-width: 636px;">
                <div class="parallax-layer" data-depth="0.05">
                    <img src="assets/img/landing/saas-5/use-cases/task-automation/circle-1.png" alt="Circle 1">
                </div>
                <div class="parallax-layer" data-depth="0.1">
                    <img src="assets/img/landing/saas-5/use-cases/task-automation/circle-2.png" alt="Circle 2">
                </div>
                <div class="parallax-layer" data-depth="0.15">
                    <img src="assets/img/landing/saas-5/use-cases/task-automation/circle-3.png" alt="Circle 3">
                </div>
                <div class="parallax-layer" data-depth="0.2">
                    <div class="position-absolute top-50 start-50 translate-middle bg-primary rounded-circle shadow-primary p-4">
                        <div class="h1 text-white lh-1 p-sm-1 p-lg-3 m-1">AI</div>
                    </div>
                </div>
                <div class="parallax-layer" style="padding-right: 28.7%; padding-left: 57%;" data-depth="0.3">
                    <div class="position-relative">
                        <div class="ratio ratio-1x1"></div>
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-circle d-dark-mode-none" style="box-shadow: 0 12px 48px -8px rgba(189, 196, 221, .35);"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-circle d-none d-dark-mode-block" style="background-color: #212435;"></span>
                        <svg class="position-absolute top-0 start-0 zindex-2 text-dark" viewBox="0 0 92 91" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M46.4935 24.9077C34.8988 24.9077 25.4961 34.3472 25.4961 45.9917C25.4961 55.3052 31.5126 63.2065 39.8601 65.9968C40.9101 66.1911 41.2933 65.5401 41.2933 64.981C41.2933 64.4796 41.275 63.154 41.2645 61.3952C35.4238 62.6683 34.1901 58.5681 34.1901 58.5681C33.2372 56.1321 31.8591 55.4837 31.8591 55.4837C29.9507 54.1765 32.0008 54.2027 32.0008 54.2027C34.1087 54.3523 35.2165 56.3762 35.2165 56.3762C37.0907 59.5971 40.1331 58.6678 41.3301 58.1271C41.5191 56.7647 42.0625 55.8355 42.6636 55.3078C38.0016 54.775 33.0981 52.9663 33.0981 44.8892C33.0981 42.5871 33.9171 40.705 35.2611 39.2297C35.0432 38.6968 34.324 36.5522 35.4658 33.6516C35.4658 33.6516 37.2298 33.0846 41.2408 35.812C42.9156 35.3447 44.7111 35.1111 46.4987 35.1032C48.2811 35.1137 50.0792 35.3447 51.7566 35.8146C55.765 33.0872 57.5263 33.6542 57.5263 33.6542C58.6708 36.5575 57.9516 38.6995 57.7363 39.2323C59.083 40.7076 59.8941 42.5897 59.8941 44.8918C59.8941 52.99 54.9853 54.7723 50.3076 55.2947C51.061 55.9457 51.733 57.232 51.733 59.1981C51.733 62.0173 51.7067 64.2906 51.7067 64.981C51.7067 65.5453 52.0847 66.2016 53.1505 65.9942C61.4848 63.2012 67.4961 55.3026 67.4961 45.9917C67.4961 34.3472 58.0933 24.9077 46.4935 24.9077Z"/></svg>
                    </div>
                </div>
                <div class="parallax-layer" style="padding-right: 60%; padding-left: 27.6%;" data-depth="0.45">
                    <div class="position-relative" style="top: 13.3%;">
                        <div class="ratio ratio-1x1"></div>
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-circle d-dark-mode-none" style="box-shadow: 0 12px 48px -8px rgba(189, 196, 221, .35);"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-circle d-none d-dark-mode-block" style="background-color: #212435;"></span>
                        <svg class="position-absolute top-0 start-0 zindex-2" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg" fill="none"><path d="M24.233 52.279l1.671 2.898c.347.61.847 1.09 1.434 1.439l5.993-4.249.011-6.1-5.98-2.694-5.99 2.673c-.001.675.172 1.35.519 1.96l2.343 4.074z" fill="#06d"/><path d="M40.392 34.091l.313-7.946-6.279-2.424c-.588.347-1.09.825-1.439 1.434l-11.09 19.133c-.349.609-.525 1.283-.526 1.958l11.97.021 7.052-12.175z" fill="#00ad3c"/><path d="M40.392 34.091l5.752-3.094.251-7.254c-.587-.349-1.261-.525-1.958-.526l-8.053-.014c-.696-.001-1.371.193-1.96.519l5.967 10.37z" fill="#00831e"/><path d="M47.401 46.292l-14.059-.025-6.004 10.349c.587.349 1.261.525 1.958.526l22.112.039c.697.001 1.371-.193 1.96-.519l.023-6.951-5.99-3.419z" fill="#0084ff"/><path d="M53.367 56.662c.588-.347 1.09-.825 1.439-1.434l.699-1.196 3.34-5.761c.349-.609.525-1.283.526-1.958l-6.919-3.641-5.03 3.619 5.945 10.37z" fill="#ff4131"/><path d="M53.341 34.768l-5.511-9.586c-.347-.61-.847-1.09-1.434-1.439l-6.004 10.349 7.008 12.2 11.949.021c.001-.675-.172-1.35-.519-1.96l-5.489-9.586z" fill="#ffba00"/></svg>
                    </div>
                </div>
                <div class="parallax-layer" style="padding-right: 85.8%;" data-depth="0.3">
                    <div class="position-relative" style="top: 32.7%;">
                        <div class="ratio ratio-1x1"></div>
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-circle d-dark-mode-none" style="box-shadow: 0 12px 48px -8px rgba(189, 196, 221, .35);"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-circle d-none d-dark-mode-block" style="background-color: #212435;"></span>
                        <svg class="position-absolute top-0 start-0 zindex-2" viewBox="0 0 92 92" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#D)"><path d="M65.381 38.179c-.097-2.129-.435-3.583-.93-4.855a9.8 9.8 0 0 0-2.307-3.543c-.999-1.017-2.208-1.805-3.542-2.308-1.272-.494-2.726-.832-4.855-.929l-8.246-.121-8.246.12c-2.129.097-3.582.435-4.855.93a9.8 9.8 0 0 0-3.542 2.307c-1.017.999-1.805 2.208-2.307 3.542-.494 1.272-.832 2.726-.929 4.855l-.121 8.246.121 8.246c.097 2.129.435 3.582.93 4.855a9.8 9.8 0 0 0 2.307 3.542 9.8 9.8 0 0 0 3.543 2.307c1.272.495 2.726.833 4.855.93l8.246.12 8.246-.12c2.129-.097 3.582-.435 4.855-.93 2.686-1.039 4.81-3.163 5.849-5.849.495-1.272.832-2.726.93-4.855l.12-8.246-.12-8.246zm-3.6 16.328c-.089 1.95-.415 3.009-.688 3.714-.673 1.744-2.051 3.123-3.796 3.796-.705.274-1.764.6-3.714.688l-8.082.117c-5.341 0-5.973-.02-8.082-.117-1.95-.089-3.009-.415-3.714-.688a6.2 6.2 0 0 1-2.3-1.496c-.664-.645-1.175-1.431-1.496-2.3-.274-.705-.6-1.764-.688-3.714l-.117-8.082.117-8.082c.089-1.95.415-3.009.688-3.714a6.2 6.2 0 0 1 1.496-2.3c.645-.664 1.431-1.176 2.3-1.496.705-.274 1.764-.6 3.714-.689l8.082-.116h0l8.082.117c1.95.089 3.009.415 3.714.689a6.2 6.2 0 0 1 2.299 1.496 6.19 6.19 0 0 1 1.496 2.3c.274.705.6 1.764.689 3.714l.117 8.082-.117 8.082z" fill="url(#A)"/><path d="M45.501 36.155c-5.672 0-10.27 4.598-10.27 10.27s4.598 10.27 10.27 10.27 10.27-4.598 10.27-10.27-4.598-10.27-10.27-10.27zm0 16.937a6.67 6.67 0 0 1-6.666-6.667 6.67 6.67 0 0 1 6.667-6.666 6.67 6.67 0 0 1 6.666 6.666 6.67 6.67 0 0 1-6.667 6.667z" fill="url(#B)"/><path d="M58.577 35.749a2.4 2.4 0 0 1-4.8 0 2.4 2.4 0 1 1 4.8 0z" fill="url(#C)"/></g><defs><linearGradient id="A" x1="28.858" y1="63.068" x2="62.144" y2="29.782" gradientUnits="userSpaceOnUse"><stop stop-color="#ffd600"/><stop offset=".5" stop-color="#ff0100"/><stop offset="1" stop-color="#d800b9"/></linearGradient><linearGradient id="B" x1="38.239" y1="53.687" x2="52.763" y2="39.163" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6400"/><stop offset=".5" stop-color="#ff0100"/><stop offset="1" stop-color="#fd0056"/></linearGradient><linearGradient id="C" x1="54.48" y1="37.446" x2="57.874" y2="34.052" gradientUnits="userSpaceOnUse"><stop stop-color="#f30072"/><stop offset="1" stop-color="#e50097"/></linearGradient><clipPath id="D"><path fill="#fff" transform="translate(25.501 26.425)" d="M0 0h40v40H0z"/></clipPath></defs></svg>
                    </div>
                </div>
                <div class="parallax-layer" style="padding-left: 85.8%;" data-depth="0.25">
                    <div class="position-relative" style="top: 35.5%;">
                        <div class="ratio ratio-1x1"></div>
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-circle d-dark-mode-none" style="box-shadow: 0 12px 48px -8px rgba(189, 196, 221, .35);"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-circle d-none d-dark-mode-block" style="background-color: #212435;"></span>
                        <svg class="position-absolute top-0 start-0 zindex-2" viewBox="0 0 92 92" xmlns="http://www.w3.org/2000/svg"><path d="M34.921 50.845a4.211 4.211 0 1 1-4.21-4.211h4.211v4.211zm2.105 0a4.211 4.211 0 1 1 8.421 0v10.526a4.211 4.211 0 0 1-8.421 0V50.845z" fill="#ff185b"/><path d="M41.236 34.003a4.211 4.211 0 1 1 4.211-4.21v4.211h-4.211zm0 2.105a4.211 4.211 0 1 1 0 8.421H30.71a4.211 4.211 0 1 1 0-8.421h10.526z" fill="#00c5f1"/><path d="M58.079 40.319a4.211 4.211 0 1 1 4.21 4.211h-4.211v-4.211zm-2.106 0a4.211 4.211 0 1 1-8.421 0V29.793a4.211 4.211 0 1 1 8.421 0v10.526z" fill="#00b67b"/><path d="M51.763 57.161a4.21 4.21 0 1 1-4.211 4.211v-4.211h4.211zm0-2.105a4.211 4.211 0 1 1 0-8.421h10.526a4.211 4.211 0 1 1 0 8.421H51.763z" fill="#ffb20f"/></svg>
                    </div>
                </div>
                <div class="parallax-layer" style="padding-right: 27.8%; padding-left: 62.9%;" data-depth="0.35">
                    <div class="position-relative" style="top: 30.7%;">
                        <div class="ratio ratio-1x1"></div>
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-circle d-dark-mode-none" style="box-shadow: 0 12px 48px -8px rgba(189, 196, 221, .45);"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-circle d-none d-dark-mode-block" style="background-color: #212435;"></span>
                        <svg class="position-absolute top-0 start-0 zindex-2" viewBox="0 0 62 62" fill="#03a9f4" xmlns="http://www.w3.org/2000/svg"><path d="M44.73 22.4611C43.6887 22.9178 42.5792 23.2206 41.4225 23.3676C42.6125 22.6571 43.5207 21.5406 43.9477 20.1948C42.8382 20.8563 41.6132 21.3236 40.3077 21.5843C39.2542 20.4626 37.7527 19.7678 36.1147 19.7678C32.9367 19.7678 30.3782 22.3473 30.3782 25.5096C30.3782 25.9646 30.4167 26.4021 30.5112 26.8186C25.739 26.5858 21.5162 24.2986 18.6795 20.8143C18.1842 21.6736 17.8937 22.6571 17.8937 23.7158C17.8937 25.7038 18.9175 27.4661 20.4435 28.4863C19.5212 28.4688 18.6165 28.2011 17.85 27.7793C17.85 27.7968 17.85 27.8196 17.85 27.8423C17.85 30.6318 19.8397 32.9488 22.449 33.4826C21.9817 33.6103 21.4725 33.6716 20.944 33.6716C20.5765 33.6716 20.2055 33.6506 19.8572 33.5736C20.601 35.8468 22.7115 37.5181 25.221 37.5723C23.268 39.1001 20.7882 40.0206 18.1037 40.0206C17.633 40.0206 17.1815 39.9996 16.73 39.9418C19.2727 41.5816 22.2862 42.5178 25.536 42.5178C36.099 42.5178 41.874 33.7678 41.874 26.1833C41.874 25.9296 41.8652 25.6846 41.853 25.4413C42.9922 24.6328 43.9495 23.6231 44.73 22.4611Z"/></svg>
                    </div>
                </div>
                <div class="parallax-layer" style="padding-right: 45%; padding-left: 45%;" data-depth="0.45">
                    <div class="position-relative" style="top: 73.5%;">
                        <div class="ratio ratio-1x1"></div>
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-circle d-dark-mode-none" style="box-shadow: 0 12px 48px -8px rgba(189, 196, 221, .45);"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-circle d-none d-dark-mode-block" style="background-color: #212435;"></span>
                        <svg class="position-absolute top-0 start-0 zindex-2" viewBox="0 0 61 62" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M38.7451 44.777H22.1996C21.1496 44.777 20.2905 43.9179 20.2905 42.8679V18.6861C20.2905 17.6361 21.1496 16.777 22.1996 16.777H33.6542L40.6542 23.777V42.8679C40.6542 43.9179 39.7951 44.777 38.7451 44.777Z" fill="#00ad3c"/><path d="M33.6543 16.777L40.6543 23.777H33.6543V16.777Z" fill="#00831e"/><path d="M24.1089 27.7543V36.6634H36.8361V27.7543H24.1089ZM29.6771 35.0724H25.6999V33.0043H29.6771V35.0724ZM29.6771 31.4134H25.6999V29.3452H29.6771V31.4134ZM35.2453 35.0724H31.268V33.0043H35.2453V35.0724ZM35.2453 31.4134H31.268V29.3452H35.2453V31.4134Z" fill="#fbffff"/></svg>
                    </div>
                </div>
                <div class="parallax-layer" style="padding-right: 73.3%; padding-left: 11.1%;" data-depth="0.25">
                    <div class="position-relative" style="top: 78.8%;">
                        <div class="ratio ratio-1x1"></div>
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-circle d-dark-mode-none" style="box-shadow: 0 12px 48px -8px rgba(189, 196, 221, .35);"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-circle d-none d-dark-mode-block" style="background-color: #212435;"></span>
                        <svg class="position-absolute top-0 start-0 zindex-2" viewBox="0 0 102 102" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M33.1883 66.9909H39.8702V50.7636L35.4948 43.1234L30.3247 43.6045V64.1273C30.3247 65.7094 31.6062 66.9909 33.1883 66.9909Z" fill="#0085f7"/><path d="M62.7793 66.9909H69.4612C71.0433 66.9909 72.3248 65.7094 72.3248 64.1273V43.6045L67.1621 43.1234L62.7794 50.7636V66.9909H62.7793Z" fill="#00a94b"/><path d="M62.7794 38.3545L58.8545 45.8442L62.7794 50.7636L72.3249 43.6045V39.7863C72.3249 36.2473 68.2848 34.2261 65.4522 36.35L62.7794 38.3545Z" fill="#ffbc00"/><path fill-rule="evenodd" clip-rule="evenodd" d="M39.8704 50.7636L36.1304 42.8632L39.8704 38.3545L51.3249 46.9454L62.7795 38.3545V50.7636L51.3249 59.3545L39.8704 50.7636Z" fill="#ff4131"/><path d="M30.3247 39.7863V43.6045L39.8702 50.7636V38.3545L37.1974 36.35C34.3648 34.2261 30.3247 36.2473 30.3247 39.7863Z" fill="#e51c19"/></svg>
                    </div>
                </div>
                <div class="parallax-layer" style="padding-right: 68.2%; padding-left: 21%;" data-depth="0.4">
                    <div class="position-relative" style="top: 52.9%;">
                        <div class="ratio ratio-1x1"></div>
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-circle d-dark-mode-none" style="box-shadow: 0 12px 48px -8px rgba(189, 196, 221, .4);"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-circle d-none d-dark-mode-block" style="background-color: #212435;"></span>
                        <svg class="position-absolute top-0 start-0 zindex-2" viewBox="0 0 72 71" xmlns="http://www.w3.org/2000/svg" fill="#0061ff"><path d="M35.8477 27.045L27.8477 32.1402L35.8477 37.2356L27.8477 42.3308L19.8477 37.2356L27.8477 32.1402L19.8477 27.045L27.8477 21.9498L35.8477 27.045Z"/><path d="M27.8237 44.0212L35.8237 38.926L43.8237 44.0212L35.8237 49.1164L27.8237 44.0212Z"/><path d="M35.8477 37.2356L43.8477 32.1402L35.8477 27.045L43.8477 21.9498L51.8477 27.045L43.8477 32.1402L51.8477 37.2356L43.8477 42.3308L35.8477 37.2356Z"/></svg>
                    </div>
                </div>
                <div class="parallax-layer" style="padding-right: 16%; padding-left: 71.4%;" data-depth="0.3">
                    <div class="position-relative" style="top: 67.6%;">
                        <div class="ratio ratio-1x1"></div>
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-circle d-dark-mode-none" style="box-shadow: 0 12px 48px -8px rgba(189, 196, 221, .35);"></span>
                        <span class="position-absolute top-0 start-0 w-100 h-100 rounded-circle d-none d-dark-mode-block" style="background-color: #212435;"></span>
                        <svg class="position-absolute top-0 start-0 zindex-2" viewBox="0 0 82 81" fill="#5865f2" xmlns="http://www.w3.org/2000/svg"><path d="M55.3042 27.7464C52.7547 26.5766 50.0208 25.7147 47.1623 25.2211C47.1103 25.2115 47.0582 25.2354 47.0314 25.2829C46.6798 25.9083 46.2903 26.7241 46.0176 27.3654C42.9431 26.905 39.8844 26.905 36.873 27.3654C36.6002 26.7099 36.1966 25.9083 35.8434 25.2829C35.8166 25.2369 35.7645 25.2131 35.7125 25.2211C32.8556 25.7131 30.1217 26.575 27.5706 27.7464C27.5485 27.7559 27.5296 27.7718 27.5171 27.7924C22.3314 35.5397 20.9108 43.0965 21.6077 50.5597C21.6108 50.5961 21.6313 50.6311 21.6597 50.6533C25.081 53.1659 28.3953 54.6912 31.6478 55.7023C31.6999 55.7182 31.755 55.6992 31.7881 55.6563C32.5575 54.6056 33.2434 53.4977 33.8314 52.3326C33.8661 52.2644 33.833 52.1834 33.762 52.1565C32.6742 51.7438 31.6383 51.2406 30.6418 50.6693C30.563 50.6233 30.5567 50.5105 30.6292 50.4565C30.8389 50.2994 31.0487 50.1359 31.2489 49.9708C31.2852 49.9407 31.3356 49.9343 31.3782 49.9533C37.9245 52.9422 45.0116 52.9422 51.4806 49.9533C51.5231 49.9327 51.5736 49.9391 51.6114 49.9692C51.8117 50.1343 52.0214 50.2993 52.2327 50.4565C52.3052 50.5104 52.3004 50.6232 52.2217 50.6692C51.2252 51.2517 50.1893 51.7437 49.0999 52.1548C49.0289 52.1818 48.9974 52.2643 49.0321 52.3325C49.6328 53.496 50.3187 54.6039 51.0738 55.6547C51.1054 55.6991 51.1621 55.7182 51.2142 55.7022C54.4825 54.6912 57.7967 53.1658 61.2181 50.6532C61.2481 50.6311 61.267 50.5977 61.2701 50.5612C62.1042 41.933 59.8731 34.4381 55.356 27.794C55.3451 27.7718 55.3262 27.7559 55.3042 27.7464ZM34.8092 46.0154C32.8383 46.0154 31.2143 44.206 31.2143 41.9838C31.2143 39.7617 32.8067 37.9522 34.8092 37.9522C36.8272 37.9522 38.4355 39.7775 38.4039 41.9838C38.4039 44.206 36.8114 46.0154 34.8092 46.0154ZM48.1003 46.0154C46.1296 46.0154 44.5056 44.206 44.5056 41.9838C44.5056 39.7617 46.098 37.9522 48.1003 37.9522C50.1185 37.9522 51.7267 39.7775 51.6952 41.9838C51.6952 44.206 50.1185 46.0154 48.1003 46.0154Z"/></svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-xl-4 offset-lg-1 text-center text-md-start">
            <h3 class="h2 mb-lg-4">Tasks automation</h3>
            <p class="fs-lg pb-lg-2 mb-4">Integrate our smart AI with the tools you already know and use. 10x times increase your productivity and efficiency of your team.</p>
            <a href="landing-saas-v5.html#" class="btn btn-outline-primary rounded-pill">
                Learn more
                <i class="bx bx-right-arrow-alt fs-lg ms-2 me-n1"></i>
            </a>
        </div>
    </div>
        </div>
    </section>

    <!-- Video -->
    <section class="position-relative py-5">
        <span class="position-absolute top-0 start-0 w-100 h-100 d-dark-mode-none" style="background: linear-gradient(360deg, #fff 5.39%, #f3f6ff 78.66%);"></span>
        <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-dark-mode-block" style="background: linear-gradient(360deg, #0b0f19 5.39%, rgba(255, 255, 255, .04) 78.66%);"></span>
        <div class="container position-relative zindex-2 py-2 py-sm-3 py-sm-4 py-md-5">
            <div class="row align-items-center py-lg-2 py-xl-3 my-xl-1 my-xxl-3">
                <div class="col-md-5 col-xl-4">
                    <h2 class="h1 pb-2 pb-sm-3 mb-md-0">Learn <span class="text-gradient-primary">how Lebara works</span> in a nutshell. Watch a short introductory video</h2>
                </div>
                <div class="col-md-7 offset-xl-1">
                    <div class="position-relative">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center zindex-5">
                            <a href="https://www.youtube.com/watch?v=nCGuEywZvAw" class="btn btn-video btn-icon btn-xl stretched-link bg-white" data-bs-toggle="video" aria-label="Play video">
                                <i class="bx bx-play"></i>
                            </a>
                        </div>
                        <img src="{{ asset('we-are-lebara.jpg') }}" class="d-dark-mode-none rounded-3" alt="Video cover">
                        <img src="{{ asset('we-are-lebara.jpg') }}" class="d-none d-dark-mode-block rounded-3" alt="Video cover">
                    </div>
                </div>
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
