@extends('layouts.admin.app')

@section('title', 'Home – Edit Hero Section')

@push('styles')
    <style>
        .hm-form-card {
            background: #fff;
            border-radius: 1rem;
            box-shadow: 0 4px 24px rgba(98, 89, 202, .07);
            overflow: hidden;
            margin-bottom: 1.875rem;
        }

        .hm-form-header {
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
            gap: .6rem;
        }

        .hm-form-header i {
            color: #6259ca;
            font-size: 1.05rem;
        }

        .hm-form-header h5 {
            margin: 0;
            font-size: 1rem;
            font-weight: 600;
            color: #3d4461;
        }

        .hm-form-body {
            padding: 1.75rem 1.5rem;
        }

        /* Banner Preview */
        .banner-preview-wrap {
            position: relative;
            border-radius: .75rem;
            overflow: hidden;
            background: #f8f7ff;
            min-height: 140px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px dashed #d3cef5;
            margin-bottom: 1rem;
            cursor: pointer;
            transition: border-color .2s;
        }

        .banner-preview-wrap:hover {
            border-color: #6259ca;
        }

        .banner-preview-wrap img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: .65rem;
        }

        .banner-placeholder {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: .4rem;
            color: #b0a8e6;
            font-size: .85rem;
            padding: 2rem;
        }

        .banner-placeholder i {
            font-size: 2rem;
        }

        .hm-label {
            font-size: .8rem;
            font-weight: 600;
            color: #6b7280;
            letter-spacing: .03em;
            text-transform: uppercase;
            margin-bottom: .4rem;
            display: block;
        }

        .hm-hint {
            font-size: .76rem;
            color: #9ca3af;
            margin-top: .3rem;
        }

        .hm-divider {
            border: none;
            border-top: 1px solid #f0f0f0;
            margin: 1.5rem 0;
        }

        .hm-form-footer {
            padding: 1.25rem 1.5rem;
            background: #fafafa;
            border-top: 1px solid #f0f0f0;
            display: flex;
            justify-content: flex-end;
            gap: .75rem;
        }
    </style>
@endpush

@section('content')
    <div class="content-body">
        <div class="container-fluid">

            {{-- Breadcrumb --}}
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Admin</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admino.home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Edit</a></li>
                </ol>
            </div>

            {{-- Validation Errors --}}
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    <strong>Terdapat kesalahan:</strong>
                    <ul class="mb-0 mt-1 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <form action="{{ route('admino.home.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    {{-- ── Kolom Kiri: Form Utama ── --}}
                    <div class="col-xl-8">

                        {{-- Informasi Utama --}}
                        <div class="hm-form-card">
                            <div class="hm-form-header">
                                <i class="fas fa-home"></i>
                                <h5>Informasi Hero</h5>
                            </div>
                            <div class="hm-form-body">

                                {{-- Nama --}}
                                <div class="mb-4">
                                    <label class="hm-label" for="name">
                                        Nama / Brand <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="name" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $home?->name) }}" placeholder="contoh: Techira Indonesia">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <p class="hm-hint">Nama perusahaan atau brand yang ditampilkan di hero section.</p>
                                </div>

                                {{-- Headline --}}
                                <div class="mb-4">
                                    <label class="hm-label" for="headline">
                                        Headline <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" id="headline" name="headline"
                                        class="form-control @error('headline') is-invalid @enderror"
                                        value="{{ old('headline', $home?->headline) }}"
                                        placeholder="contoh: Solusi IT Modern Untuk Bisnis Anda">
                                    @error('headline')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <p class="hm-hint">Kalimat utama yang ditampilkan besar di hero.</p>
                                </div>

                                {{-- Highlight --}}
                                <div class="mb-4">
                                    <label class="hm-label" for="highlight">Highlight / Accent Text</label>
                                    <input type="text" id="highlight" name="highlight"
                                        class="form-control @error('highlight') is-invalid @enderror"
                                        value="{{ old('highlight', $home?->highlight) }}"
                                        placeholder="contoh: Inovasi Tanpa Batas">
                                    @error('highlight')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <p class="hm-hint">Teks berwarna aksen di bawah headline (opsional).</p>
                                </div>

                                <hr class="hm-divider">

                                {{-- Deskripsi --}}
                                <div class="mb-0">
                                    <label class="hm-label" for="description">
                                        Deskripsi <span class="text-danger">*</span>
                                    </label>
                                    <textarea id="description" name="description" rows="5"
                                        class="form-control @error('description') is-invalid @enderror"
                                        placeholder="Tuliskan deskripsi singkat perusahaan Anda...">{{ old('description', $home?->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <p class="hm-hint">Paragraf penjelasan singkat yang muncul di bawah headline.</p>
                                </div>

                            </div>
                        </div>

                        {{-- Video --}}
                        <div class="hm-form-card">
                            <div class="hm-form-header">
                                <i class="fas fa-video"></i>
                                <h5>Link Video</h5>
                            </div>
                            <div class="hm-form-body">
                                <div class="mb-0">
                                    <label class="hm-label" for="video">URL Video</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                                        <input type="url" id="video" name="video"
                                            class="form-control @error('video') is-invalid @enderror"
                                            value="{{ old('video', $home?->video) }}" placeholder="https://youtu.be/...">
                                        @error('video')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <p class="hm-hint">
                                        URL YouTube atau link video lain untuk tombol "Lihat Video" (opsional).
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- ── Kolom Kanan: Banner ── --}}
                    <div class="col-xl-4">
                        <div class="hm-form-card">
                            <div class="hm-form-header">
                                <i class="fas fa-image"></i>
                                <h5>Banner / Thumbnail</h5>
                            </div>
                            <div class="hm-form-body">

                                <div class="banner-preview-wrap" onclick="document.getElementById('banner').click()">
                                    @if ($home?->banner)
                                        <img src="{{ asset('storage/' . $home->banner) }}" alt="Banner"
                                            id="banner-preview">
                                    @else
                                        <div class="banner-placeholder" id="banner-placeholder">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <span>Klik untuk upload gambar</span>
                                        </div>
                                        <img src="" alt="" id="banner-preview" style="display:none;">
                                    @endif
                                </div>

                                <input type="file" id="banner" name="banner"
                                    accept="image/jpg,image/jpeg,image/png,image/webp"
                                    class="d-none @error('banner') is-invalid @enderror" onchange="previewBanner(this)">
                                @error('banner')
                                    <div class="text-danger" style="font-size:.8rem;">{{ $message }}</div>
                                @enderror

                                <button type="button" class="btn btn-outline-primary btn-sm w-100 mt-2"
                                    onclick="document.getElementById('banner').click()">
                                    <i class="fas fa-upload me-1"></i>
                                    {{ $home?->banner ? 'Ganti Banner' : 'Upload Banner' }}
                                </button>

                                <p class="hm-hint mt-2">
                                    Format: JPG, PNG, WebP. Maks: 2MB.<br>
                                    Rekomendasi ukuran: 1200 × 500 px.
                                </p>

                                @if ($home?->banner)
                                    <div class="mt-3 p-2 rounded" style="background:#fef3f2;border:1px solid #fca5a5;">
                                        <p class="mb-0" style="font-size:.76rem;color:#dc2626;">
                                            <i class="fas fa-info-circle me-1"></i>
                                            Upload gambar baru akan menggantikan banner yang ada.
                                        </p>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>

                </div>

                {{-- ── Footer Actions ── --}}
                <div class="hm-form-card">
                    <div class="hm-form-footer">
                        <a href="{{ route('admino.home.index') }}" class="btn btn-outline-secondary px-4">
                            <i class="fas fa-times me-1"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary px-4">
                            <i class="fas fa-save me-1"></i> Simpan Perubahan
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function previewBanner(input) {
            const preview = document.getElementById('banner-preview');
            const placeholder = document.getElementById('banner-placeholder');

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                    if (placeholder) placeholder.style.display = 'none';
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
