@extends('layouts.landing.app')
@section('title', 'Techira Indonesia')
@section('content')
        <section id="hero" class="hero section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                            <div class="company-badge mb-4">
                                <i class="bi bi-gear-fill me-2"></i>
                                {{ $home->name ?? 'Tidak ada data' }}
                            </div>

                            <h1 class="mb-4">
                                {{ $home->headline ?? 'Tidak ada data' }} <br>
                                <span class="accent-text">{{ $home->highlight ?? 'Tidak ada data' }}</span>
                            </h1>

                            <p class="mb-4 mb-md-5">
                                {{ $home->description ?? 'Tidak ada data' }}
                            </p>

                            <div class="hero-buttons">
                                <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Mulai Sekarang</a>
                                <a href="{{ $home->video ?? 'https://youtu.be/PgctyrzgkM4?si=Mn1KtBhTsayOYkEo' }}"
                                    class="btn btn-link mt-2 mt-sm-0 glightbox">
                                    <i class="bi bi-play-circle me-1"></i>
                                    Lihat Video
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                            @if($home && $home->banner)
                                <img src=" {{ asset('storage/' . $home->banner) }}" alt="">
                            @else
                                <img src="{{ asset('csm/assets/img/illustration-1.webp') }}" alt="Hero Image" class="img-fluid">
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </section>
@endsection
