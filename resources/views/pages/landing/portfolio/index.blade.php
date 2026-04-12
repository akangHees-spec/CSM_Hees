 <!-- Portfolio Section -->
 <section id="portfolio" class="features section">

     <!-- Section Title -->
     <div class="container section-title" data-aos="fade-up">
         <h2>Portfolio</h2>
         <p>Produk dan layanan unggulan perusahaan IT Software kami</p>
     </div><!-- End Section Title -->

     <div class="container">

         <div class="d-flex justify-content-center">
             <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                 <li class="nav-item">
                     <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                         <h4>Software Development</h4>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                         <h4>Cloud Solutions</h4>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                         <h4>IT Consulting</h4>
                     </a>
                 </li>
             </ul>
         </div>

         <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

             <!-- Tab 1 -->
             <div class="tab-pane fade active show" id="features-tab-1">
                 <div class="row">
                     <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                         <h3>Custom Software Development</h3>
                         <p class="fst-italic">
                             Layanan pengembangan aplikasi sesuai kebutuhan bisnis Anda, mulai dari web, mobile,
                             hingga sistem enterprise.
                         </p>
                         <ul>
                             <li><i class="bi bi-check2-all"></i> <span>Aplikasi web modern dengan teknologi
                                     terbaru.</span></li>
                             <li><i class="bi bi-check2-all"></i> <span>Pengembangan aplikasi mobile Android &
                                     iOS.</span></li>
                             <li><i class="bi bi-check2-all"></i> <span>Integrasi sistem untuk meningkatkan
                                     efisiensi operasional.</span></li>
                         </ul>
                     </div>
                     <div class="col-lg-6 order-1 order-lg-2 text-center">
                         <img src="{{ asset('csm/assets/img/features-illustration-1.webp') }}"
                             alt="Software Development" class="img-fluid">
                     </div>
                 </div>
             </div><!-- End Tab 1 -->

             <!-- Tab 2 -->
             <div class="tab-pane fade" id="features-tab-2">
                 <div class="row">
                     <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                         <h3>Cloud Infrastructure & Solutions</h3>
                         <p class="fst-italic">
                             Solusi berbasis cloud untuk mendukung skalabilitas, keamanan, dan fleksibilitas bisnis
                             Anda.
                         </p>
                         <ul>
                             <li><i class="bi bi-check2-all"></i> <span>Deployment aplikasi di cloud (AWS, Azure,
                                     GCP).</span></li>
                             <li><i class="bi bi-check2-all"></i> <span>Manajemen server dan database berbasis
                                     cloud.</span></li>
                             <li><i class="bi bi-check2-all"></i> <span>Optimasi biaya dan performa cloud
                                     infrastructure.</span></li>
                         </ul>
                     </div>
                     <div class="col-lg-6 order-1 order-lg-2 text-center">
                         <img src="{{ asset('csm/assets/img/features-illustration-2.webp') }}" alt="Cloud Solutions"
                             class="img-fluid">
                     </div>
                 </div>
             </div><!-- End Tab 2 -->

             <!-- Tab 3 -->
             <div class="tab-pane fade" id="features-tab-3">
                 <div class="row">
                     <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                         <h3>IT Consulting & Support</h3>
                         <ul>
                             <li><i class="bi bi-check2-all"></i> <span>Analisis kebutuhan teknologi bisnis.</span>
                             </li>
                             <li><i class="bi bi-check2-all"></i> <span>Strategi transformasi digital.</span></li>
                             <li><i class="bi bi-check2-all"></i> <span>Dukungan teknis dan maintenance
                                     sistem.</span></li>
                         </ul>
                         <p class="fst-italic">
                             Konsultasi dan dukungan IT untuk membantu transformasi digital perusahaan Anda.
                         </p>
                     </div>
                     <div class="col-lg-6 order-1 order-lg-2 text-center">
                         <img src="{{ asset('csm/assets/img/features-illustration-3.webp') }}" alt="IT Consulting"
                             class="img-fluid">
                     </div>
                 </div>
             </div><!-- End Tab 3 -->

         </div>

     </div>

 </section><!-- /Portfolio Section -->

 <!-- Portfolio Cards Section -->
 <section id="portfolio-cards" class="features-cards section">

     <div class="container">

         <div class="row gy-4">

             <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                 <div class="feature-box orange">
                     <i class="bi bi-code-slash"></i>
                     <h4>Custom Software</h4>
                     <p>Pengembangan aplikasi web & mobile sesuai kebutuhan bisnis Anda.</p>
                 </div>
             </div><!-- End Portfolio Card -->

             <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                 <div class="feature-box blue">
                     <i class="bi bi-cloud"></i>
                     <h4>Cloud Solutions</h4>
                     <p>Solusi berbasis cloud untuk skalabilitas, keamanan, dan fleksibilitas.</p>
                 </div>
             </div><!-- End Portfolio Card -->

             <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                 <div class="feature-box green">
                     <i class="bi bi-shield-lock"></i>
                     <h4>Cybersecurity</h4>
                     <p>Perlindungan data dan sistem dari ancaman digital.</p>
                 </div>
             </div><!-- End Portfolio Card -->

             <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                 <div class="feature-box red">
                     <i class="bi bi-people"></i>
                     <h4>IT Consulting</h4>
                     <p>Konsultasi teknologi untuk mendukung transformasi digital perusahaan.</p>
                 </div>
             </div><!-- End Portfolio Card -->

         </div>

     </div>

 </section><!-- /Portfolio Cards Section -->


 <!-- Portfolio Showcase Section -->
 <section id="portfolio-showcase" class="features-2 section">

     <div class="container" data-aos="fade-up" data-aos-delay="100">

         <div class="row align-items-center">

             <div class="col-lg-4">
                 <div class="feature-item text-end mb-5" data-aos="fade-right" data-aos-delay="200">
                     <div class="d-flex align-items-center justify-content-end gap-4">
                         <div class="feature-content">
                             <h3>Enterprise Solutions</h3>
                             <p>Sistem ERP & CRM untuk meningkatkan efisiensi operasional perusahaan.</p>
                         </div>
                         <div class="feature-icon flex-shrink-0">
                             <i class="bi bi-building"></i>
                         </div>
                     </div>
                 </div>
                 <div class="feature-item text-end mb-5" data-aos="fade-right" data-aos-delay="300">
                     <div class="d-flex align-items-center justify-content-end gap-4">
                         <div class="feature-content">
                             <h3>Mobile Apps</h3>
                             <p>Aplikasi Android & iOS dengan desain modern dan performa optimal.</p>
                         </div>
                         <div class="feature-icon flex-shrink-0">
                             <i class="bi bi-phone"></i>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                 <div class="phone-mockup text-center">
                     <img src="{{ asset('csm/assets/img/phone-app-screen.webp') }}" alt="Portfolio Mockup"
                         class="img-fluid">
                 </div>
             </div><!-- End Mockup -->

             <div class="col-lg-4">
                 <div class="feature-item mb-5" data-aos="fade-left" data-aos-delay="200">
                     <div class="d-flex align-items-center gap-4">
                         <div class="feature-icon flex-shrink-0">
                             <i class="bi bi-bar-chart"></i>
                         </div>
                         <div class="feature-content">
                             <h3>Data Analytics</h3>
                             <p>Analisis data untuk mendukung pengambilan keputusan bisnis.</p>
                         </div>
                     </div>
                 </div>
                 <div class="feature-item mb-5" data-aos="fade-left" data-aos-delay="300">
                     <div class="d-flex align-items-center gap-4">
                         <div class="feature-icon flex-shrink-0">
                             <i class="bi bi-globe"></i>
                         </div>
                         <div class="feature-content">
                             <h3>Web Solutions</h3>
                             <p>Website profesional dengan performa tinggi dan SEO friendly.</p>
                         </div>
                     </div>
                 </div>
             </div>

         </div>

     </div>

 </section><!-- /Portfolio Showcase Section -->

 <!-- Clients Section -->
 <section id="clients" class="clients section">

     <div class="container" data-aos="fade-up" data-aos-delay="100">

         <div class="swiper init-swiper">
             <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
             <div class="swiper-wrapper align-items-center">
                 <div class="swiper-slide"><img src="{{ asset('csm/assets/img/clients/client-1.png') }}"
                         class="img-fluid" alt=""></div>
                 <div class="swiper-slide"><img src="{{ asset('csm/assets/img/clients/client-2.png') }}"
                         class="img-fluid" alt=""></div>
                 <div class="swiper-slide"><img src="{{ asset('csm/assets/img/clients/client-3.png') }}"
                         class="img-fluid" alt=""></div>
                 <div class="swiper-slide"><img src="{{ asset('csm/assets/img/clients/client-4.png') }}"
                         class="img-fluid" alt=""></div>
                 <div class="swiper-slide"><img src="{{ asset('csm/assets/img/clients/client-5.png') }}"
                         class="img-fluid" alt=""></div>
                 <div class="swiper-slide"><img src="{{ asset('csm/assets/img/clients/client-6.png') }}"
                         class="img-fluid" alt=""></div>
                 <div class="swiper-slide"><img src="{{ asset('csm/assets/img/clients/client-7.png') }}"
                         class="img-fluid" alt=""></div>
                 <div class="swiper-slide"><img src="{{ asset('csm/assets/img/clients/client-8.png') }}"
                         class="img-fluid" alt=""></div>
             </div>
             <div class="swiper-pagination"></div>
         </div>

     </div>

 </section><!-- /Clients Section -->
