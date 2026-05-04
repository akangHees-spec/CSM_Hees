@extends('layouts.landing.app')

@section('title', 'Techira Indonesia')
@section('content')

    <main class="main">

        <!-- Hero Section -->
        @include('pages.landing.home.index')
        <!-- /Hero Section -->

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
