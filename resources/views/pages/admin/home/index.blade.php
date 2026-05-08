@extends('layouts.admin.app')

@section('title', 'Home – Hero Section')

@section('content')
    <div class="content-body">
        <div class="container-fluid">

            {{-- Breadcrumb --}}
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Admin</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>

            {{-- Alert Success --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    <strong>Berhasil!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if ($home)

                {{-- ── Profile / Hero Header ── --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    {{-- Banner sebagai cover photo --}}
                                    <div class="cover-photo rounded"
                                        @if ($home->banner) style="background-image: url('{{ asset('storage/' . $home->banner) }}'); background-size: cover; background-position: center;" @endif>
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <div class="profile-photo">
                                        <div class="img-fluid rounded-circle d-flex align-items-center justify-content-center"
                                            style="width:80px;height:80px;background:linear-gradient(135deg,#6259ca,#9b59b6);">
                                            <i class="fas fa-home text-white" style="font-size:1.8rem;"></i>
                                        </div>
                                    </div>
                                    <div class="profile-details">
                                        <div class="profile-name px-3 pt-2">
                                            <h4 class="text-primary mb-0">{{ $home->name }}</h4>
                                            <p>{{ $home->headline }}</p>
                                        </div>
                                        <div class="profile-email px-2 pt-2">
                                            <h4 class="text-muted mb-0">{{ $home->highlight ?: '-' }}</h4>
                                            <p>Highlight</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ── Row Konten ── --}}
                <div class="row">

                    {{-- Kolom Kiri --}}
                    <div class="col-xl-4">
                        <div class="row">

                            {{-- Status Konten --}}
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="profile-statistics">
                                            <div class="text-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <h3 class="m-b-0">
                                                            @if ($home->banner)
                                                                <i class="fas fa-check-circle text-success"></i>
                                                            @else
                                                                <i class="fas fa-times-circle text-danger"></i>
                                                            @endif
                                                        </h3>
                                                        <span>Banner</span>
                                                    </div>
                                                    <div class="col">
                                                        <h3 class="m-b-0">
                                                            @if ($home->video)
                                                                <i class="fas fa-check-circle text-success"></i>
                                                            @else
                                                                <i class="fas fa-times-circle text-danger"></i>
                                                            @endif
                                                        </h3>
                                                        <span>Video</span>
                                                    </div>
                                                    <div class="col">
                                                        <h3 class="m-b-0">
                                                            @if ($home->highlight)
                                                                <i class="fas fa-check-circle text-success"></i>
                                                            @else
                                                                <i class="fas fa-times-circle text-danger"></i>
                                                            @endif
                                                        </h3>
                                                        <span>Highlight</span>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="{{ route('admino.home.edit') }}" class="btn btn-primary mb-1">
                                                        <i class="fas fa-edit me-1"></i> Edit Data
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Banner Preview --}}
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-primary d-inline">Banner Preview</h5>
                                        @if ($home->banner)
                                            <img src="{{ asset('storage/' . $home->banner) }}" alt="Banner"
                                                class="img-fluid mt-4 mb-4 w-100 rounded">
                                        @else
                                            <div class="mt-4 mb-4 d-flex align-items-center justify-content-center rounded"
                                                style="height:140px;background:#f8f7ff;border:2px dashed #d3cef5;">
                                                <div class="text-center text-muted">
                                                    <i class="fas fa-image" style="font-size:2rem;opacity:.4;"></i>
                                                    <p class="mb-0 mt-2" style="font-size:.82rem;">Belum ada banner</p>
                                                </div>
                                            </div>
                                        @endif
                                        <h5>{{ $home->name }}</h5>
                                        <p class="mb-0">{{ Str::limit($home->description, 100) }}</p>
                                    </div>
                                </div>
                            </div>

                            {{-- Video --}}
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-primary d-inline">Link Video</h5>
                                        @if ($home->video)
                                            <div class="media pt-3 pb-3">
                                                <div class="d-flex align-items-center justify-content-center me-3 rounded"
                                                    style="width:50px;height:50px;background:linear-gradient(135deg,#6259ca,#9b59b6);flex-shrink:0;">
                                                    <i class="fas fa-play text-white"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="m-b-5">Video Hero</h5>
                                                    <a href="{{ $home->video }}" target="_blank"
                                                        style="font-size:.8rem;word-break:break-all;">
                                                        {{ Str::limit($home->video, 50) }}
                                                    </a>
                                                </div>
                                            </div>
                                        @else
                                            <p class="text-muted mt-3 mb-0" style="font-size:.85rem;">
                                                <i class="fas fa-info-circle me-1"></i> Belum ada link video.
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Kolom Kanan --}}
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a href="#hero-detail" data-bs-toggle="tab"
                                                    class="nav-link active show">Detail</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#hero-description" data-bs-toggle="tab"
                                                    class="nav-link">Deskripsi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#hero-info" data-bs-toggle="tab" class="nav-link">Info</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content">

                                            {{-- Tab: Detail --}}
                                            <div id="hero-detail" class="tab-pane fade active show">
                                                <div class="pt-4">
                                                    <div class="profile-personal-info">
                                                        <h4 class="text-primary mb-4">Informasi Hero Section</h4>

                                                        <div class="row mb-2">
                                                            <div class="col-sm-3 col-5">
                                                                <h5 class="f-w-500">Nama <span class="pull-end">:</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-sm-9 col-7">
                                                                <span>{{ $home->name }}</span>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-2">
                                                            <div class="col-sm-3 col-5">
                                                                <h5 class="f-w-500">Headline <span
                                                                        class="pull-end">:</span></h5>
                                                            </div>
                                                            <div class="col-sm-9 col-7">
                                                                <span>{{ $home->headline }}</span>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-2">
                                                            <div class="col-sm-3 col-5">
                                                                <h5 class="f-w-500">Highlight <span
                                                                        class="pull-end">:</span></h5>
                                                            </div>
                                                            <div class="col-sm-9 col-7">
                                                                @if ($home->highlight)
                                                                    <span
                                                                        class="badge badge-primary light">{{ $home->highlight }}</span>
                                                                @else
                                                                    <span class="text-muted">-</span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="row mb-2">
                                                            <div class="col-sm-3 col-5">
                                                                <h5 class="f-w-500">Video <span class="pull-end">:</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-sm-9 col-7">
                                                                @if ($home->video)
                                                                    <a href="{{ $home->video }}" target="_blank"
                                                                        class="text-primary"
                                                                        style="word-break:break-all;font-size:.875rem;">
                                                                        {{ $home->video }}
                                                                    </a>
                                                                @else
                                                                    <span class="text-muted">-</span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="row mb-2">
                                                            <div class="col-sm-3 col-5">
                                                                <h5 class="f-w-500">Banner <span class="pull-end">:</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-sm-9 col-7">
                                                                @if ($home->banner)
                                                                    <span class="badge badge-success light">
                                                                        <i class="fas fa-check me-1"></i>Tersedia
                                                                    </span>
                                                                @else
                                                                    <span class="badge badge-warning light">
                                                                        <i class="fas fa-exclamation me-1"></i>Belum ada
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Tab: Deskripsi --}}
                                            <div id="hero-description" class="tab-pane fade">
                                                <div class="profile-about-me">
                                                    <div class="pt-4 border-bottom-1 pb-3">
                                                        <h4 class="text-primary">Deskripsi Hero</h4>
                                                        @if ($home->description)
                                                            <p class="mb-2">{{ $home->description }}</p>
                                                        @else
                                                            <p class="text-muted">Deskripsi belum diisi.</p>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="profile-skills mb-5 pt-4">
                                                    <h4 class="text-primary mb-2">Konten Aktif</h4>
                                                    @if ($home->name)
                                                        <span class="btn btn-primary light btn-xs mb-1">Nama</span>
                                                    @endif
                                                    @if ($home->headline)
                                                        <span class="btn btn-primary light btn-xs mb-1">Headline</span>
                                                    @endif
                                                    @if ($home->highlight)
                                                        <span class="btn btn-success light btn-xs mb-1">Highlight</span>
                                                    @endif
                                                    @if ($home->description)
                                                        <span class="btn btn-primary light btn-xs mb-1">Deskripsi</span>
                                                    @endif
                                                    @if ($home->video)
                                                        <span class="btn btn-info light btn-xs mb-1">Video</span>
                                                    @endif
                                                    @if ($home->banner)
                                                        <span class="btn btn-warning light btn-xs mb-1">Banner</span>
                                                    @endif
                                                </div>
                                            </div>

                                            {{-- Tab: Info --}}
                                            <div id="hero-info" class="tab-pane fade">
                                                <div class="pt-4">
                                                    <div class="profile-personal-info">
                                                        <h4 class="text-primary mb-4">Informasi Sistem</h4>

                                                        <div class="row mb-2">
                                                            <div class="col-sm-4 col-5">
                                                                <h5 class="f-w-500">ID Record <span
                                                                        class="pull-end">:</span></h5>
                                                            </div>
                                                            <div class="col-sm-8 col-7">
                                                                <span>#{{ $home->id }}</span>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-2">
                                                            <div class="col-sm-4 col-5">
                                                                <h5 class="f-w-500">Dibuat <span class="pull-end">:</span>
                                                                </h5>
                                                            </div>
                                                            <div class="col-sm-8 col-7">
                                                                <span>{{ $home->created_at?->format('d M Y, H:i') ?? '-' }}</span>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-2">
                                                            <div class="col-sm-4 col-5">
                                                                <h5 class="f-w-500">Diperbarui <span
                                                                        class="pull-end">:</span></h5>
                                                            </div>
                                                            <div class="col-sm-8 col-7">
                                                                <span>{{ $home->updated_at?->format('d M Y, H:i') ?? '-' }}</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @else
                {{-- State kosong --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body text-center" style="padding:4rem 2rem;">
                                <i class="fas fa-home"
                                    style="font-size:3rem;color:#6259ca;opacity:.3;display:block;margin-bottom:1rem;"></i>
                                <h5 style="color:#3d4461;font-weight:600;margin-bottom:8px;">
                                    Belum Ada Data Hero Section
                                </h5>
                                <p style="color:#9ca3af;margin-bottom:1.5rem;">
                                    Tambahkan konten hero untuk ditampilkan di halaman utama website.
                                </p>
                                <a href="{{ route('admino.home.edit') }}" class="btn btn-primary px-5">
                                    <i class="fas fa-plus me-1"></i> Tambah Data Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            @endif

        </div>
    </div>
@endsection
