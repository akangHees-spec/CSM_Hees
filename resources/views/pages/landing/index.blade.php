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
        @include('pages.landing.about.index')
        <!-- /About Section -->

        <!-- Portfolio Section -->
        @include('pages.landing.portfolio.index')
        <!-- /Portfolio Section -->

        <!-- Team Section -->
        @include('pages.landing.team.index')
        <!-- /Team Section -->

        <!-- Services Section -->
        @include('pages.landing.services.index')
        <!-- /Services Section -->

        <!-- Faq Section -->
        @include('pages.landing.faq.index')
        <!-- /Faq Section -->

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
        @include('pages.landing.contact.index')
        <!-- /Contact Section -->

    </main>
@endsection
