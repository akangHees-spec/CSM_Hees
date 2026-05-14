<section id="hero" class="hero section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">

            {{-- ── Kiri: Teks ── --}}
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

            {{-- ── Kanan: Banner ── --}}
            <div class="col-lg-6">
                <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">

                    {{-- Wrapper posisi relatif --}}
                    <div class="position-relative d-inline-block w-100">

                        {{-- Ring dekoratif tipis (menggunakan accent-color) --}}
                        <div class="position-absolute top-0 start-0 end-0 bottom-0"
                            style="border: 2px dashed color-mix(in srgb, var(--accent-color), transparent 65%);
                                    border-radius: 24px;
                                    transform: translate(-8px, -8px);
                                    pointer-events: none;
                                    z-index: 0;">
                        </div>


                        {{-- Gambar utama --}}
                        @if ($home && $home->banner)
                            <img src="{{ asset('storage/' . $home->banner) }}" alt="Banner Techira"
                                class="img-fluid position-relative"
                                style="border-radius: 20px;
                                        box-shadow: 0 10px 40px rgba(0,0,0,0.12);
                                        border: 4px solid var(--surface-color);
                                        z-index: 1;
                                        width: 100%;
                                        object-fit: cover;
                                        aspect-ratio: 4/3;">
                        @else
                            <img src="{{ asset('csm/assets/img/illustration-1.webp') }}" alt="Hero Image"
                                class="img-fluid position-relative"
                                style="border-radius: 20px;
                                        box-shadow: 0 10px 40px rgba(0,0,0,0.12);
                                        border: 4px solid var(--surface-color);
                                        z-index: 1;
                                        width: 100%;
                                        object-fit: cover;
                                        aspect-ratio: 4/3;">
                        @endif

                        {{-- customers-badge — class PERSIS dari main.css --}}
                        <div class="customers-badge">
                            <div class="customer-avatars">
                                <img class="avatar" src="{{ asset('csm/assets/img/testimonials/testimonials-1.jpg') }}"
                                    alt="">
                                <img class="avatar" src="{{ asset('csm/assets/img/testimonials/testimonials-2.jpg') }}"
                                    alt="">
                                <img class="avatar" src="{{ asset('csm/assets/img/testimonials/testimonials-3.jpg') }}"
                                    alt="">
                                <div class="avatar more">+50</div>
                            </div>
                            <p class="mb-0">50+ Klien mempercayai kami</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
