@extends('layouts.admin.app')
@section('title', 'Company Profile')
@section('content')
    <div class="content-body">
        <div class="container-fluid">

            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Company Profile</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Detail</a></li>
                </ol>
            </div>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    <strong>Berhasil!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if (!$companyProfile->exists)

                {{-- State Kosong --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body text-center" style="padding:4rem 2rem;">
                                <i class="fa fa-building"
                                    style="font-size:3rem;color:#6259ca;opacity:.3;display:block;margin-bottom:1rem;"></i>
                                <h5 style="color:#3d4461;font-weight:600;margin-bottom:8px;">
                                    Belum Ada Data Company Profile (About Us)
                                </h5>
                                <p style="color:#9ca3af;margin-bottom:1.5rem;">
                                    Tambahkan informasi perusahaan untuk ditampilkan di website.
                                </p>
                                <a href="{{ route('admino.about.edit') }}" class="btn btn-primary px-5">
                                    <i class="fas fa-plus me-1"></i> Tambah Data Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                {{-- Profile Header --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo rounded"></div>
                                </div>
                                <div class="profile-info">
                                    <div class="profile-photo">
                                        <div class="img-fluid rounded-circle d-flex align-items-center justify-content-center"
                                            style="width:80px;height:80px;background:linear-gradient(135deg,#6259ca,#9b59b6);">
                                            <i class="fa fa-building text-white" style="font-size:1.8rem;"></i>
                                        </div>
                                    </div>
                                    <div class="profile-details">
                                        <div class="profile-name px-3 pt-2">
                                            <h4 class="text-primary mb-0">{{ $companyProfile->company_name }}</h4>
                                            <p>{{ $companyProfile->tagline }}</p>
                                        </div>
                                        <div class="profile-email px-2 pt-2">
                                            <h4 class="text-muted mb-0">
                                                {{ Str::limit($companyProfile->description, 60) ?: '-' }}</h4>
                                            <p>Description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Row Konten --}}
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
                                                            @if ($companyProfile->vision)
                                                                <i class="fas fa-check-circle text-success"></i>
                                                            @else
                                                                <i class="fas fa-times-circle text-danger"></i>
                                                            @endif
                                                        </h3>
                                                        <span>Vision</span>
                                                    </div>
                                                    <div class="col">
                                                        <h3 class="m-b-0">
                                                            @if ($companyProfile->mision)
                                                                <i class="fas fa-check-circle text-success"></i>
                                                            @else
                                                                <i class="fas fa-times-circle text-danger"></i>
                                                            @endif
                                                        </h3>
                                                        <span>Mission</span>
                                                    </div>
                                                    <div class="col">
                                                        <h3 class="m-b-0">
                                                            @if ($companyProfile->description)
                                                                <i class="fas fa-check-circle text-success"></i>
                                                            @else
                                                                <i class="fas fa-times-circle text-danger"></i>
                                                            @endif
                                                        </h3>
                                                        <span>Description</span>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="{{ route('admino.about.edit') }}" class="btn btn-primary mb-1">
                                                        <i class="fas fa-edit me-1"></i> Edit Data
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Info Sistem --}}
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-primary mb-3">Info Sistem</h5>
                                        <div class="row mb-2">
                                            <div class="col-5">
                                                <h6 class="f-w-500" style="font-size:13px;">ID Record</h6>
                                            </div>
                                            <div class="col-7">
                                                <span style="font-size:13px;">#{{ $companyProfile->id }}</span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-5">
                                                <h6 class="f-w-500" style="font-size:13px;">Dibuat</h6>
                                            </div>
                                            <div class="col-7">
                                                <span
                                                    style="font-size:13px;">{{ $companyProfile->created_at?->format('d M Y, H:i') ?? '-' }}</span>
                                            </div>
                                        </div>
                                        <div class="row mb-0">
                                            <div class="col-5">
                                                <h6 class="f-w-500" style="font-size:13px;">Diperbarui</h6>
                                            </div>
                                            <div class="col-7">
                                                <span
                                                    style="font-size:13px;">{{ $companyProfile->updated_at?->format('d M Y, H:i') ?? '-' }}</span>
                                            </div>
                                        </div>
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
                                                <a href="#about-general" data-bs-toggle="tab"
                                                    class="nav-link active show">General</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#about-vismis" data-bs-toggle="tab" class="nav-link">Vision &
                                                    Mission</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content">

                                            {{-- Tab: General --}}
                                            <div id="about-general" class="tab-pane fade active show">
                                                <div class="pt-4">
                                                    <div class="profile-personal-info">
                                                        <h4 class="text-primary mb-4">Informasi Perusahaan</h4>

                                                        <div class="row mb-2">
                                                            <div class="col-sm-3 col-5">
                                                                <h5 class="f-w-500">Company Name <span
                                                                        class="pull-end">:</span></h5>
                                                            </div>
                                                            <div class="col-sm-9 col-7">
                                                                <span>{{ $companyProfile->company_name ?? '-' }}</span>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-2">
                                                            <div class="col-sm-3 col-5">
                                                                <h5 class="f-w-500">Tagline <span
                                                                        class="pull-end">:</span></h5>
                                                            </div>
                                                            <div class="col-sm-9 col-7">
                                                                <span>{{ $companyProfile->tagline ?? '-' }}</span>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-2">
                                                            <div class="col-sm-3 col-5">
                                                                <h5 class="f-w-500">Description <span
                                                                        class="pull-end">:</span></h5>
                                                            </div>
                                                            <div class="col-sm-9 col-7">
                                                                <span>{{ $companyProfile->description ?? '-' }}</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Tab: Vision & Mission --}}
                                            <div id="about-vismis" class="tab-pane fade">
                                                <div class="pt-4">
                                                    <div class="profile-personal-info">
                                                        <h4 class="text-primary mb-4">Visi & Misi</h4>

                                                        <div class="mb-4">
                                                            <h5 class="f-w-500 mb-2">Vision</h5>
                                                            @if ($companyProfile->vision)
                                                                <p class="mb-0" style="white-space:pre-line;">
                                                                    {{ $companyProfile->vision }}</p>
                                                            @else
                                                                <p class="text-muted mb-0">Visi belum diisi.</p>
                                                            @endif
                                                        </div>

                                                        <div class="mb-0">
                                                            <h5 class="f-w-500 mb-2">Mission</h5>
                                                            @if ($companyProfile->mision)
                                                                <p class="mb-0" style="white-space:pre-line;">
                                                                    {{ $companyProfile->mision }}</p>
                                                            @else
                                                                <p class="text-muted mb-0">Misi belum diisi.</p>
                                                            @endif
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

            @endif

        </div>
    </div>
@endsection
