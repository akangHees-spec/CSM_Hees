@extends('layouts.landing.app')

@section('title', 'Techira Indonesia')
@section('content')

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                            <div class="company-badge mb-4">
                                <i class="bi bi-gear-fill me-2"></i>
                                Techira Indonesia – Empowering Digital Solutions
                            </div>

                            <h1 class="mb-4">
                                Solusi IT Modern <br>
                                Untuk Bisnis Anda <br>
                                <span class="accent-text">Inovasi Tanpa Batas</span>
                            </h1>

                            <p class="mb-4 mb-md-5">
                                Techira Indonesia menghadirkan layanan pengembangan software, aplikasi, dan sistem IT
                                yang dirancang untuk meningkatkan efisiensi, produktivitas, dan daya saing bisnis Anda.
                                Kami percaya teknologi adalah kunci masa depan.
                            </p>

                            <div class="hero-buttons">
                                <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Mulai Sekarang</a>
                                <a href="https://youtu.be/PgctyrzgkM4?si=Mn1KtBhTsayOYkEo"
                                    class="btn btn-link mt-2 mt-sm-0 glightbox">
                                    <i class="bi bi-play-circle me-1"></i>
                                    Lihat Video
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                            <img src="{{ asset('csm/assets/img/illustration-1.webp') }}" alt="Hero Image" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-trophy"></i>
                            </div>
                            <div class="stat-content">
                                <h4>3x Penghargaan</h4>
                                <p class="mb-0">Inovasi Teknologi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-briefcase"></i>
                            </div>
                            <div class="stat-content">
                                <h4>6.5k Proyek</h4>
                                <p class="mb-0">Software Development</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <div class="stat-content">
                                <h4>80k+ Pengguna</h4>
                                <p class="mb-0">Aplikasi & Sistem</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-award"></i>
                            </div>
                            <div class="stat-content">
                                <h4>6x Sertifikasi</h4>
                                <p class="mb-0">Standar Internasional</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 align-items-center justify-content-between">

                    <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                        <span class="about-meta">TENTANG KAMI</span>
                        <h2 class="about-title">Solusi IT Terpercaya untuk Transformasi Digital Bisnis Anda</h2>
                        <p class="about-description">
                            Techira Indonesia adalah perusahaan teknologi informasi yang berfokus pada pengembangan
                            software berkualitas tinggi. Kami berkomitmen memberikan solusi digital inovatif yang
                            membantu bisnis Anda berkembang di era digital.
                        </p>

                        <!-- Visi -->
                        <div class="vision-mission-box mb-4">
                            <h4 class="vm-title"><i class="bi bi-eye"></i> Visi</h4>
                            <p class="vm-content">
                                Menjadi perusahaan IT Software terdepan di Indonesia yang menghadirkan solusi
                                teknologi inovatif dan terpercaya untuk mendukung transformasi digital bisnis.
                            </p>
                        </div>

                        <!-- Misi -->
                        <div class="vision-mission-box">
                            <h4 class="vm-title"><i class="bi bi-bullseye"></i> Misi</h4>
                            <ul class="mission-list">
                                <li><i class="bi bi-check-circle-fill"></i> Mengembangkan software berkualitas tinggi sesuai
                                    kebutuhan klien</li>
                                <li><i class="bi bi-check-circle-fill"></i> Memberikan layanan support dan maintenance yang
                                    responsif</li>
                                <li><i class="bi bi-check-circle-fill"></i> Terus berinovasi mengikuti perkembangan
                                    teknologi terkini</li>
                                <li><i class="bi bi-check-circle-fill"></i> Membangun kemitraan jangka panjang dengan klien
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="image-wrapper">
                            <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                                <img src="{{ asset('csm/assets/img/about-5.webp') }}" alt="Techira Indonesia Office"
                                    class="img-fluid main-image rounded-4">
                                <img src="{{ asset('csm/assets/img/about-2.webp') }}" alt="Our Team"
                                    class="img-fluid small-image rounded-4">
                            </div>
                            <div class="experience-badge floating">
                                <h3>5+ <span>Tahun</span></h3>
                                <p>Pengalaman dalam IT Software Development</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <!-- Portfolio Section -->
        <section id="features" class="features section">

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
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
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
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
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
                                <img src="{{ asset('csm/assets/img/features-illustration-2.webp') }}"
                                    alt="Cloud Solutions" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab 2 -->

                    <!-- Tab 3 -->
                    <div class="tab-pane fade" id="features-tab-3">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
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

        <!-- Team Section -->
        <section id="team" class="team section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>Meet the amazing people behind our success</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4 gx-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="{{ asset('csm/assets/img/testimonials/testimonials-1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="member-content">
                                <h4>John Doe</h4>
                                <span>Chief Executive Officer</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <img src="{{ asset('csm/assets/img/testimonials/testimonials-2.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="member-content">
                                <h4>Jane Smith</h4>
                                <span>Lead Designer</span>
                                <p>Ut enim ad minima veniam, quis nostrum exercitationem.</p>
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <img src="{{ asset('csm/assets/img/testimonials/testimonials-3.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="member-content">
                                <h4>Michael Brown</h4>
                                <span>Project Manager</span>
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate.</p>
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <img src="{{ asset('csm/assets/img/testimonials/testimonials-4.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="member-content">
                                <h4>Emily Davis</h4>
                                <span>Marketing Specialist</span>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>
            </div>

        </section><!-- /Team Section -->

        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Layanan profesional untuk mendukung transformasi digital bisnis Anda</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-code-slash"></i>
                            </div>
                            <div>
                                <h3>Software Development</h3>
                                <p>Pengembangan aplikasi web, mobile, dan sistem enterprise sesuai kebutuhan bisnis Anda.
                                </p>
                                <a href="service-details.html" class="read-more">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-cloud"></i>
                            </div>
                            <div>
                                <h3>Cloud Solutions</h3>
                                <p>Implementasi dan manajemen cloud (AWS, Azure, GCP) untuk skalabilitas dan keamanan
                                    sistem.</p>
                                <a href="service-details.html" class="read-more">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            <div>
                                <h3>Cybersecurity</h3>
                                <p>Solusi keamanan digital untuk melindungi data dan sistem dari ancaman siber.</p>
                                <a href="service-details.html" class="read-more">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-people"></i>
                            </div>
                            <div>
                                <h3>IT Consulting</h3>
                                <p>Konsultasi teknologi untuk strategi transformasi digital dan efisiensi operasional
                                    perusahaan.</p>
                                <a href="service-details.html" class="read-more">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Faq Section -->
        <section class="faq-9 faq section light-background" id="faq">

            <div class="container">
                <div class="row">

                    <div class="col-lg-5" data-aos="fade-up">
                        <h2 class="faq-title">Ada pertanyaan? Lihat FAQ kami :)</h2>
                        <p class="faq-description">Berikut beberapa pertanyaan umum seputar layanan IT software kami.</p>
                        <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
                            <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>Apa saja layanan utama perusahaan?</h3>
                                <div class="faq-content">
                                    <p>Kami menyediakan pengembangan software custom, solusi cloud, cybersecurity, dan IT
                                        consulting untuk mendukung transformasi digital bisnis Anda.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apakah bisa membuat aplikasi sesuai kebutuhan bisnis?</h3>
                                <div class="faq-content">
                                    <p>Ya, kami mengembangkan aplikasi web, mobile, maupun sistem enterprise yang
                                        disesuaikan dengan kebutuhan spesifik perusahaan Anda.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Teknologi apa saja yang digunakan oleh Techira Indonesia?</h3>
                                <div class="faq-content">
                                    <p>Kami menggunakan berbagai teknologi modern seperti JavaScript (React, Vue, Node.js),
                                        PHP (Laravel), Python, serta platform cloud seperti AWS dan Google Cloud untuk
                                        memastikan performa dan skalabilitas terbaik.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apakah tersedia layanan maintenance dan support?</h3>
                                <div class="faq-content">
                                    <p>Ya, kami menyediakan layanan maintenance, monitoring, dan support berkelanjutan untuk
                                        memastikan sistem Anda tetap optimal, aman, dan selalu up-to-date.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Berapa lama waktu pengerjaan sebuah proyek?</h3>
                                <div class="faq-content">
                                    <p>Durasi pengerjaan tergantung pada kompleksitas proyek. Proyek sederhana dapat selesai
                                        dalam beberapa minggu, sementara sistem yang lebih kompleks bisa memakan waktu
                                        beberapa bulan dengan tahapan yang terstruktur.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Bagaimana cara memulai kerja sama dengan Techira Indonesia?</h3>
                                <div class="faq-content">
                                    <p>Anda dapat menghubungi kami melalui form kontak atau email. Tim kami akan melakukan
                                        konsultasi awal untuk memahami kebutuhan Anda, kemudian memberikan solusi dan
                                        penawaran yang sesuai..</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>
                    </div>

                </div>
            </div>
        </section><!-- /Faq Section -->

        <!-- Call To Action 2 Section -->
        <section id="call-to-action-2" class="call-to-action-2 section dark-background">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Punya Ide Aplikasi atau Sistem?</h3>
                            <p>Wujudkan ide Anda menjadi solusi digital yang powerful bersama tim developer berpengalaman
                                dari Techira Indonesia.</p>
                            <a class="cta-btn" href="contact">Mulai Proyek Anda</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action 2 Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Hubungi Kami</h2>
                <p>Diskusikan kebutuhan software dan solusi digital Anda bersama tim Techira Indonesia</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4 g-lg-5">
                    <div class="col-lg-5">
                        <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                            <h3>Informasi Kontak</h3>
                            <p>Kami siap membantu Anda mengembangkan solusi teknologi yang tepat untuk bisnis Anda. Jangan ragu untuk menghubungi kami.</p>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="content">
                                    <h4>Lokasi</h4>
                                    <p>Indonesia</p>
                                    <p>(Silahkan isi alamat kantor Anda)</p>
                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="content">
                                    <h4>Telepon / WhatsApp</h4>
                                    <p>+1 5589 55488 55</p>
                                    <p>+1 6678 254445 41</p>
                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4>Email</h4>
                                    <p>info@example.com</p>
                                    <p>contact@example.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                            <h3>Konsultasi Gratis</h3>
                            <p>Ceritakan kebutuhan Anda, dan tim kami akan segera menghubungi Anda dengan solusi terbaik.</p>

                            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Your Name" required="">
                                    </div>

                                    <div class="col-md-6 ">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Your Email" required="">
                                    </div>

                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject"
                                            required="">
                                    </div>

                                    <div class="col-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                    </div>

                                    <div class="col-12 text-center">
                                        <div class="loading">Mengirim..</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">>Pesan Anda berhasil dikirim. Terima kasih!</div>

                                        <button type="submit" class="btn">Kirim Pesan</button>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>
@endsection
