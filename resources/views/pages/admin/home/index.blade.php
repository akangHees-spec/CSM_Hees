@extends('layouts.admin.app')

@section('title', 'Home - Company Profile')

@section('content')
    <style>
        /* ─── Base ───────────────────────────────────────── */
        .cp-page {
            padding-bottom: 2.5rem;
        }

        /* ─── Hero Card (Banner) ─────────────────────────── */
        .cp-hero {
            position: relative;
            border-radius: 1.5rem;
            overflow: hidden;
            margin-bottom: 1.875rem;
            min-height: 260px;
            display: flex;
            align-items: flex-end;
            background: linear-gradient(135deg, #886CC0 0%, #5d44a2 100%);
            box-shadow: 0 0.625rem 1.25rem 0 rgba(0, 0, 0, 0.08);
        }

        .cp-hero-img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        .cp-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(30, 10, 60, 0.80) 0%, rgba(30, 10, 60, 0.25) 55%, transparent 100%);
            z-index: 2;
        }

        .cp-hero-body {
            position: relative;
            z-index: 3;
            padding: 2rem 2.25rem;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .cp-hero-body .cp-company-name {
            font-size: 1.75rem;
            font-weight: 700;
            color: #fff;
            margin: 0 0 4px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
        }

        .cp-hero-body .cp-title-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(6px);
            color: #fff;
            border-radius: 2rem;
            padding: 4px 14px;
            font-size: 0.8rem;
            font-weight: 500;
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        .cp-hero-body .cp-tagline {
            color: rgba(255, 255, 255, 0.82);
            font-size: 0.9rem;
            font-style: italic;
            margin-top: 6px;
        }

        .cp-hero-no-banner {
            position: relative;
            z-index: 3;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 3rem 2rem;
            text-align: center;
        }

        .cp-hero-no-banner i {
            font-size: 2.5rem;
            color: rgba(255, 255, 255, 0.35);
            margin-bottom: 12px;
        }

        .cp-hero-no-banner p {
            color: rgba(255, 255, 255, 0.6);
            margin: 0;
            font-size: 0.9rem;
        }

        /* ─── Fillow-style Card ──────────────────────────── */
        .cp-card {
            background: #fff;
            border-radius: 1.25rem;
            box-shadow: 0 0.625rem 1.25rem 0 rgba(0, 0, 0, 0.05);
            margin-bottom: 1.875rem;
            border: 0;
            overflow: hidden;
        }

        .cp-card-header {
            padding: 1.1rem 1.75rem;
            border-bottom: 1px solid #f0f1f3;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }

        .cp-card-header-left {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .cp-card-header i {
            color: #886CC0;
            font-size: 1rem;
        }

        .cp-card-header h5 {
            margin: 0;
            font-size: 0.95rem;
            font-weight: 600;
            color: #000;
        }

        .cp-card-body {
            padding: 1.75rem;
        }

        /* ─── Info Table ─────────────────────────────────── */
        .cp-info-table {
            width: 100%;
            border-collapse: collapse;
        }

        .cp-info-table tr {
            border-bottom: 1px solid #f5f6f8;
        }

        .cp-info-table tr:last-child {
            border-bottom: 0;
        }

        .cp-info-table th {
            padding: 0.75rem 0;
            font-size: 0.8rem;
            font-weight: 600;
            color: #9ca3af;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            width: 38%;
            vertical-align: top;
        }

        .cp-info-table td {
            padding: 0.75rem 0;
            font-size: 0.875rem;
            color: #3d4461;
            vertical-align: top;
        }

        .cp-info-table td strong {
            color: #000;
            font-weight: 600;
        }

        /* ─── Badge ──────────────────────────────────────── */
        .cp-badge {
            display: inline-block;
            background: #f0ebff;
            color: #886CC0;
            border-radius: 2rem;
            padding: 3px 12px;
            font-size: 0.78rem;
            font-weight: 600;
        }

        .cp-badge-gray {
            background: #f0f1f5;
            color: #717579;
        }

        /* ─── Description block ──────────────────────────── */
        .cp-desc-block {
            background: #f8f9fc;
            border-radius: 1rem;
            padding: 1.25rem 1.5rem;
            font-size: 0.875rem;
            color: #717579;
            line-height: 1.85;
            border-left: 3px solid #886CC0;
        }

        /* ─── Stat Grid ──────────────────────────────────── */
        .cp-stat-box {
            border: 1px solid #EBEEF2;
            border-radius: 1.25rem;
            padding: 1.5rem 1.25rem;
            text-align: center;
            background: #fff;
            height: 100%;
            transition: box-shadow 0.2s, transform 0.2s;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }

        .cp-stat-box:hover {
            box-shadow: 0 8px 24px rgba(136, 108, 192, 0.12);
            transform: translateY(-2px);
        }

        .cp-stat-icon-circle {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: #f0ebff;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            flex-shrink: 0;
        }

        .cp-stat-icon-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .cp-stat-icon-circle i {
            color: #886CC0;
            font-size: 1.4rem;
        }

        .cp-stat-big {
            font-size: 2rem;
            font-weight: 700;
            color: #886CC0;
            line-height: 1;
        }

        .cp-stat-label {
            font-size: 0.82rem;
            font-weight: 600;
            color: #3d4461;
        }

        .cp-stat-sub {
            font-size: 0.75rem;
            color: #9ca3af;
        }

        .cp-stat-value {
            font-size: 0.875rem;
            color: #3d4461;
            font-weight: 500;
        }

        .cp-stat-caption {
            font-size: 0.75rem;
            color: #9ca3af;
            margin-top: 2px;
        }

        /* ─── Timestamp row ──────────────────────────────── */
        .cp-timestamps {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
            padding: 1rem 1.75rem;
            background: #fafbfc;
            border-top: 1px solid #f0f1f3;
        }

        .cp-timestamps .cp-ts-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.78rem;
            color: #9ca3af;
        }

        .cp-timestamps .cp-ts-item i {
            color: #886CC0;
            font-size: 0.75rem;
        }

        .cp-timestamps .cp-ts-item span {
            color: #3d4461;
            font-weight: 500;
        }

        /* ─── Edit Button ────────────────────────────────── */
        .btn-fillow {
            background: #886CC0;
            color: #fff;
            border-radius: 0.75rem;
            border: none;
            padding: 0.5rem 1.25rem;
            font-weight: 500;
            font-size: 0.85rem;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            text-decoration: none;
        }

        .btn-fillow:hover {
            background: #6e52a4;
            color: #fff;
        }

        /* ─── Empty state ────────────────────────────────── */
        .cp-empty {
            text-align: center;
            padding: 3rem 2rem;
            color: #9ca3af;
        }

        .cp-empty i {
            font-size: 2.5rem;
            margin-bottom: 12px;
            opacity: 0.4;
            display: block;
        }

        .cp-empty p {
            margin: 0;
            font-size: 0.875rem;
        }
    </style>

    <div class="content-body cp-page">
        <div class="container-fluid">

            {{-- Breadcrumb --}}
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Company Profile</a></li>
                </ol>
            </div>

            {{-- Alert Success --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" style="border-radius: 0.75rem;" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    <strong>Berhasil!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if ($profile)

                {{-- ── Hero / Banner ── --}}
                <div class="cp-hero">
                    @if ($profile->banner)
                        <img src="{{ asset('storage/' . $profile->banner) }}" alt="Banner" class="cp-hero-img">
                        <div class="cp-hero-overlay"></div>
                        <div class="cp-hero-body">
                            <div>
                                <h2 class="cp-company-name">{{ $profile->company_name }}</h2>
                                @if ($profile->title)
                                    <span class="cp-title-badge">{{ $profile->title }}</span>
                                @endif
                                @if ($profile->tagline)
                                    <p class="cp-tagline"><i class="fas fa-quote-left fa-xs me-1"
                                            style="opacity:.5;"></i>{{ $profile->tagline }}</p>
                                @endif
                            </div>
                        </div>
                    @else
                        <div class="cp-hero-no-banner">
                            <i class="fas fa-image"></i>
                            <p>Belum ada banner — <a href="{{ route('sigma.company-profile.edit') }}"
                                    style="color:rgba(255,255,255,0.8); text-decoration:underline;">tambahkan sekarang</a>
                            </p>
                        </div>
                        <div class="cp-hero-body" style="padding-top:0;">
                            <div></div>
                            <a href="{{ route('sigma.company-profile.edit') }}" class="btn-fillow">
                                <i class="fas fa-edit"></i> Edit Profil
                            </a>
                        </div>
                    @endif
                </div>

                {{-- ── Row: Info + Deskripsi ── --}}
                <div class="row">

                    {{-- Informasi Perusahaan --}}
                    <div class="col-xl-5 col-lg-6">
                        <div class="cp-card">
                            <div class="cp-card-header">
                                <div class="cp-card-header-left">
                                    <i class="fas fa-building"></i>
                                    <h5>Informasi Perusahaan</h5>
                                </div>
                            </div>
                            <div class="cp-card-body">
                                <table class="cp-info-table">
                                    <tbody>
                                        <tr>
                                            <th>Nama Perusahaan</th>
                                            <td><strong>{{ $profile->company_name ?? '-' }}</strong></td>
                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td>{{ $profile->title ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tagline</th>
                                            <td><em>{{ $profile->tagline ?: '-' }}</em></td>
                                        </tr>
                                        <tr>
                                            <th>Urutan Tampil</th>
                                            <td>
                                                <span class="cp-badge">{{ $profile->order ?? 0 }}</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            {{-- Timestamps --}}
                            <div class="cp-timestamps">
                                <div class="cp-ts-item">
                                    <i class="fas fa-calendar-plus"></i>
                                    Dibuat:
                                    <span>{{ $profile->created_at ? $profile->created_at->format('d M Y, H:i') : '-' }}</span>
                                </div>
                                <div class="cp-ts-item">
                                    <i class="fas fa-calendar-check"></i>
                                    Diperbarui:
                                    <span>{{ $profile->updated_at ? $profile->updated_at->format('d M Y, H:i') : '-' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Deskripsi --}}
                    <div class="col-xl-7 col-lg-6">
                        <div class="cp-card" style="height: calc(100% - 1.875rem);">
                            <div class="cp-card-header">
                                <div class="cp-card-header-left">
                                    <i class="fas fa-align-left"></i>
                                    <h5>Deskripsi Perusahaan</h5>
                                </div>
                            </div>
                            <div class="cp-card-body">
                                @if ($profile->description)
                                    <div class="cp-desc-block">
                                        {{ $profile->description }}
                                    </div>
                                @else
                                    <div class="cp-empty">
                                        <i class="fas fa-file-alt"></i>
                                        <p>Deskripsi belum diisi.</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>

                {{-- ── Statistik & Visual ── --}}
                <div class="cp-card">
                    <div class="cp-card-header">
                        <div class="cp-card-header-left">
                            <i class="fas fa-chart-bar"></i>
                            <h5>Statistik & Visual</h5>
                        </div>
                    </div>
                    <div class="cp-card-body">
                        <div class="row g-3">

                            {{-- Count --}}
                            <div class="col-lg-4 col-md-6">
                                <div class="cp-stat-box">
                                    <div class="cp-stat-icon-circle">
                                        <i class="fas fa-hashtag"></i>
                                    </div>
                                    <div>
                                        <div class="cp-stat-big">{{ $profile->count ?: '—' }}</div>
                                        <div class="cp-stat-label">Count / Angka Statistik</div>
                                        <div class="cp-stat-caption">Nilai numerik yang ditampilkan</div>
                                    </div>
                                </div>
                            </div>

                            {{-- Icon Title --}}
                            <div class="col-lg-4 col-md-6">
                                <div class="cp-stat-box">
                                    <div class="cp-stat-icon-circle">
                                        <i class="fas fa-tag"></i>
                                    </div>
                                    <div>
                                        <div class="cp-stat-label">Icon Title</div>
                                        <div class="cp-stat-value">{{ $profile->icon_title ?: '-' }}</div>
                                        <div class="cp-stat-caption">Label utama statistik</div>
                                    </div>
                                </div>
                            </div>

                            {{-- Icon Subtitle --}}
                            <div class="col-lg-4 col-md-6">
                                <div class="cp-stat-box">
                                    <div class="cp-stat-icon-circle">
                                        <i class="fas fa-info"></i>
                                    </div>
                                    <div>
                                        <div class="cp-stat-label">Icon Subtitle</div>
                                        <div class="cp-stat-value">{{ $profile->icon_subtitle ?: '-' }}</div>
                                        <div class="cp-stat-caption">Sub-label statistik</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- ── Bottom Edit Button ── --}}
                <div class="d-flex justify-content-end mb-2">
                    <a href="{{ route('sigma.company-profile.edit') }}" class="btn-fillow px-4">
                        <i class="fas fa-edit"></i> Edit Semua Data
                    </a>
                </div>
            @else
                {{-- State kosong: belum ada data --}}
                <div class="cp-card">
                    <div class="cp-card-body">
                        <div class="cp-empty" style="padding: 4rem 2rem;">
                            <i class="fas fa-building"
                                style="font-size:3rem; color:#886CC0; opacity:.3; margin-bottom:1rem; display:block;"></i>
                            <h5 style="color:#3d4461; font-weight:600; margin-bottom:8px;">Belum Ada Data Company Profile
                            </h5>
                            <p style="color:#9ca3af; margin-bottom: 1.5rem;">Tambahkan informasi perusahaan Anda untuk
                                ditampilkan di halaman publik.</p>
                            <a href="{{ route('sigma.company-profile.edit') }}" class="btn-fillow px-5">
                                <i class="fas fa-plus me-1"></i> Tambah Data Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
