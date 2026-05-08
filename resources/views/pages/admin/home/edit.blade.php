@extends('layouts.admin.app')
@section('title', 'Home – Edit Hero Section')

@push('styles')
    <style>
        /* ── Grid Layout ── */
        .hm-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            align-items: start;
        }

        .hm-grid .full {
            grid-column: 1 / -1;
        }

        @media (max-width: 991px) {
            .hm-grid {
                grid-template-columns: 1fr;
            }
        }

        /* ── Card ── */
        .hm-card {
            background: #fff;
            border-radius: 14px;
            border: 1px solid #ebebf0;
            overflow: hidden;
            margin-bottom: 0;
        }

        .hm-card-header {
            padding: 15px 20px;
            border-bottom: 1px solid #f0f0f5;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .hm-card-header .hch-icon {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background: #f0eeff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hm-card-header .hch-icon i {
            color: #6259ca;
            font-size: 14px;
        }

        .hm-card-header h5 {
            margin: 0;
            font-size: 14px;
            font-weight: 600;
            color: #1e2a3b;
        }

        .hm-card-body {
            padding: 20px;
        }

        /* Pastikan textarea bisa memanjang sesuai atribut rows */
        .hm-field textarea.form-control {
            height: auto;
            min-height: 120px;
            /* Opsional: supaya ada tinggi minimal yang enak dilihat */
            padding: 12px;
            /* Supaya teks tidak terlalu mepet ke border */
            line-height: 1.6;
            /* Biar enak dibaca kalau paragrafnya panjang */
        }

        /* ── Form Fields ── */
        .hm-field {
            margin-bottom: 18px;
        }

        .hm-field:last-child {
            margin-bottom: 0;
        }

        .hm-label {
            display: block;
            font-size: 11.5px;
            font-weight: 600;
            color: #6b7280;
            letter-spacing: .04em;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .hm-hint {
            font-size: 11.5px;
            color: #9ca3af;
            margin-top: 5px;
        }

        .hm-field .form-control,
        .hm-field .form-control:focus {
            border-radius: 9px;
            border: 1.5px solid #e5e7eb;
            font-size: 14px;
            background: #fafafa;
            transition: border-color .2s, box-shadow .2s;
        }

        .hm-field .form-control:focus {
            border-color: #6259ca;
            box-shadow: 0 0 0 3px rgba(98, 89, 202, .10);
            background: #fff;
        }

        /* Input group override */
        .hm-field .input-group .form-control {
            border-left: none;
            border-radius: 0 9px 9px 0;
        }

        .hm-field .input-group-text {
            background: #f4f5f7;
            border: 1.5px solid #e5e7eb;
            border-right: none;
            border-radius: 9px 0 0 9px;
            color: #9ca3af;
        }

        /* ── Drag & Drop Zone ── */
        .hm-drop-zone {
            border: 2px dashed #d3cef5;
            border-radius: 12px;
            background: #f8f7ff;
            min-height: 200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: border-color .25s, background .25s;
            position: relative;
            overflow: hidden;
            text-align: center;
            padding: 24px;
        }

        .hm-drop-zone.dragover {
            border-color: #6259ca;
            background: #ede9ff;
        }

        .hm-drop-zone.has-preview {
            border-style: solid;
            border-color: #d3cef5;
            padding: 0;
            min-height: auto;
            cursor: default;
        }

        /* Default state */
        .dz-default-state {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .dz-icon {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: #ede9ff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
        }

        .dz-icon i {
            color: #6259ca;
            font-size: 22px;
        }

        .dz-title {
            font-size: 14px;
            font-weight: 600;
            color: #3d4461;
            margin-bottom: 4px;
        }

        .dz-sub {
            font-size: 12px;
            color: #9aa5b4;
        }

        .dz-sub a {
            color: #6259ca;
            text-decoration: underline;
            cursor: pointer;
        }

        /* Preview image */
        #banner-preview-img {
            width: 100%;
            aspect-ratio: 16 / 9;
            object-fit: cover;
            border-radius: 10px;
            display: none;
        }

        /* Overlay on hover */
        .dz-preview-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, .45);
            display: none;
            align-items: center;
            justify-content: center;
            gap: 10px;
            border-radius: 10px;
        }

        .hm-drop-zone.has-preview:hover .dz-preview-overlay {
            display: flex;
        }

        .dz-overlay-btn {
            background: rgba(255, 255, 255, .15);
            border: 1.5px solid rgba(255, 255, 255, .6);
            color: #fff;
            border-radius: 7px;
            padding: 7px 14px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            backdrop-filter: blur(6px);
            transition: background .2s;
        }

        .dz-overlay-btn:hover {
            background: rgba(255, 255, 255, .28);
        }

        .dz-overlay-btn.danger {
            border-color: rgba(239, 68, 68, .6);
            color: #fca5a5;
        }

        /* File info pill */
        .hm-file-info {
            display: none;
            align-items: center;
            gap: 8px;
            margin-top: 10px;
            background: #f0eeff;
            border-radius: 8px;
            padding: 8px 12px;
        }

        .hm-file-info.show {
            display: flex;
        }

        .hm-file-info i {
            color: #6259ca;
            font-size: 13px;
            flex-shrink: 0;
        }

        .hm-file-info .fi-name {
            font-size: 12px;
            color: #3d4461;
            font-weight: 500;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            flex: 1;
        }

        .hm-file-info .fi-remove {
            cursor: pointer;
            color: #9ca3af;
            font-size: 12px;
            flex-shrink: 0;
        }

        .hm-file-info .fi-remove:hover {
            color: #ef4444;
        }

        /* Existing banner warning */
        .hm-existing-note {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            padding: 10px 12px;
            background: #fef3f2;
            border: 1px solid #fca5a5;
            border-radius: 8px;
            margin-top: 12px;
        }

        .hm-existing-note i {
            color: #dc2626;
            font-size: 12px;
            margin-top: 1px;
            flex-shrink: 0;
        }

        .hm-existing-note p {
            font-size: 11.5px;
            color: #dc2626;
            margin: 0;
        }

        /* Tips box */
        .hm-tips {
            background: #f8f7ff;
            border-radius: 10px;
            padding: 14px 16px;
            margin: 0 20px 20px;
        }

        .hm-tips p {
            font-size: 12px;
            color: #6259ca;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .hm-tips ul {
            font-size: 11.5px;
            color: #6b7280;
            padding-left: 16px;
            margin: 0;
            line-height: 1.9;
        }

        /* ── Footer ── */
        .hm-footer {
            padding: 15px 20px;
            background: #fafafa;
            border-top: 1px solid #f0f0f5;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
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

                <div class="hm-grid">

                    {{-- ── Kolom Kiri: Informasi Hero ── --}}
                    <div class="hm-card">
                        <div class="hm-card-header">
                            <div class="hch-icon"><i class="fas fa-home"></i></div>
                            <h5>Informasi Hero</h5>
                        </div>
                        <div class="hm-card-body">

                            <div class="hm-field">
                                <label class="hm-label" for="name">Nama / Brand <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="name" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', $home?->name) }}" placeholder="contoh: Techira Indonesia">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <p class="hm-hint">Nama brand yang tampil di badge hero section.</p>
                            </div>

                            <div class="hm-field">
                                <label class="hm-label" for="headline">Headline <span class="text-danger">*</span></label>
                                <input type="text" id="headline" name="headline"
                                    class="form-control @error('headline') is-invalid @enderror"
                                    value="{{ old('headline', $home?->headline) }}"
                                    placeholder="contoh: Solusi IT Modern Untuk Bisnis Anda">
                                @error('headline')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <p class="hm-hint">Kalimat utama yang tampil besar di hero.</p>
                            </div>

                            <div class="hm-field">
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

                            <div class="hm-field">
                                <label class="hm-label" for="description">Deskripsi <span
                                        class="text-danger">*</span></label>
                                <textarea id="description" name="description" rows="8"
                                    class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Tuliskan deskripsi singkat perusahaan Anda...">{{ old('description', $home?->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <p class="hm-hint">Paragraf singkat di bawah headline.</p>
                            </div>

                            <div class="hm-field">
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
                                <p class="hm-hint">Link YouTube untuk tombol "Lihat Video" (opsional).</p>
                            </div>

                        </div>
                    </div>

                    {{-- ── Kolom Kanan: Banner ── --}}
                    <div class="hm-card">
                        <div class="hm-card-header">
                            <div class="hch-icon"><i class="fas fa-image"></i></div>
                            <h5>Banner / Thumbnail</h5>
                        </div>
                        <div class="hm-card-body">

                            {{-- Drop Zone --}}
                            <div class="hm-drop-zone" id="dropZone">
                                {{-- Default state --}}
                                <div class="dz-default-state" id="dzDefault">
                                    <div class="dz-icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                    <p class="dz-title">Drag & drop gambar ke sini</p>
                                    <p class="dz-sub">atau <a onclick="document.getElementById('bannerInput').click()">klik
                                            untuk pilih file</a></p>
                                    <p class="dz-sub mt-2">JPG, PNG, WebP · maks 2 MB</p>
                                </div>

                                {{-- Preview (hidden by default, shown after upload) --}}
                                @if ($home?->banner)
                                    <img id="banner-preview-img" src="{{ asset('storage/' . $home->banner) }}"
                                        alt="Preview Banner" style="display:block">
                                @else
                                    <img id="banner-preview-img" alt="Preview Banner">
                                @endif

                                {{-- Overlay on hover --}}
                                <div class="dz-preview-overlay" id="previewOverlay">
                                    <button type="button" class="dz-overlay-btn"
                                        onclick="document.getElementById('bannerInput').click()">
                                        <i class="fas fa-sync-alt me-1"></i> Ganti
                                    </button>
                                    <button type="button" class="dz-overlay-btn danger" id="removeBtn">
                                        <i class="fas fa-trash me-1"></i> Hapus
                                    </button>
                                </div>
                            </div>

                            {{-- File info pill --}}
                            <div class="hm-file-info {{ $home?->banner ? 'show' : '' }}" id="fileInfo">
                                <i class="fas fa-file-image"></i>
                                <span class="fi-name" id="fileName">
                                    {{ $home?->banner ? basename($home->banner) : '' }}
                                </span>
                                <span class="fi-remove" id="removePill"><i class="fas fa-times"></i></span>
                            </div>

                            {{-- Existing banner warning --}}
                            @if ($home?->banner)
                                <div class="hm-existing-note" id="existingNote">
                                    <i class="fas fa-info-circle"></i>
                                    <p>Upload gambar baru akan menggantikan banner yang ada.</p>
                                </div>
                            @endif

                            {{-- Hidden file input --}}
                            <input type="file" id="bannerInput" name="banner"
                                accept="image/jpg,image/jpeg,image/png,image/webp"
                                class="d-none @error('banner') is-invalid @enderror">
                            @error('banner')
                                <div class="text-danger mt-1" style="font-size:.8rem;">{{ $message }}</div>
                            @enderror

                            <p class="hm-hint mt-3">
                                Rekomendasi: <strong>1200 × 500 px</strong> · Rasio 16:9 ideal untuk hero.
                            </p>

                        </div>

                        {{-- Tips --}}
                        <div class="hm-tips">
                            <p><i class="fas fa-lightbulb me-1"></i> Tips Banner</p>
                            <ul>
                                <li>Gunakan gambar resolusi tinggi agar tidak pecah</li>
                                <li>Hindari teks penting di tepi gambar</li>
                                <li>Format WebP disarankan untuk performa terbaik</li>
                            </ul>
                        </div>
                    </div>

                    {{-- ── Footer Actions (full width) ── --}}
                    <div class="hm-card full">
                        <div class="hm-footer">
                            <a href="{{ route('admino.home.index') }}" class="btn btn-outline-secondary px-4">
                                <i class="fas fa-times me-1"></i> Batal
                            </a>
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="fas fa-save me-1"></i> Simpan Perubahan
                            </button>
                        </div>
                    </div>

                </div>{{-- end .hm-grid --}}
            </form>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        (function() {
            const dropZone = document.getElementById('dropZone');
            const bannerInput = document.getElementById('bannerInput');
            const previewImg = document.getElementById('banner-preview-img');
            const dzDefault = document.getElementById('dzDefault');
            const fileInfo = document.getElementById('fileInfo');
            const fileName = document.getElementById('fileName');
            const removeBtn = document.getElementById('removeBtn');
            const removePill = document.getElementById('removePill');

            // Init: jika sudah ada banner dari server
            @if ($home?->banner)
                setHasPreview(true);
            @endif

            function setHasPreview(state) {
                if (state) {
                    previewImg.style.display = 'block';
                    dzDefault.style.display = 'none';
                    dropZone.classList.add('has-preview');
                } else {
                    previewImg.style.display = 'none';
                    dzDefault.style.display = '';
                    dropZone.classList.remove('has-preview', 'dragover');
                }
            }

            function showPreview(file) {
                const reader = new FileReader();
                reader.onload = e => {
                    previewImg.src = e.target.result;
                    setHasPreview(true);
                    fileInfo.classList.add('show');
                    fileName.textContent = file.name;
                };
                reader.readAsDataURL(file);
            }

            function resetPreview() {
                previewImg.src = '';
                setHasPreview(false);
                fileInfo.classList.remove('show');
                bannerInput.value = '';
            }

            // Klik zona (hanya saat belum ada preview)
            dropZone.addEventListener('click', () => {
                if (!dropZone.classList.contains('has-preview')) bannerInput.click();
            });

            // File input change
            bannerInput.addEventListener('change', () => {
                if (bannerInput.files[0]) showPreview(bannerInput.files[0]);
            });

            // Drag events
            dropZone.addEventListener('dragover', e => {
                e.preventDefault();
                dropZone.classList.add('dragover');
            });
            dropZone.addEventListener('dragleave', () => dropZone.classList.remove('dragover'));
            dropZone.addEventListener('drop', e => {
                e.preventDefault();
                dropZone.classList.remove('dragover');
                const file = e.dataTransfer.files[0];
                if (file && file.type.startsWith('image/')) {
                    const dt = new DataTransfer();
                    dt.items.add(file);
                    bannerInput.files = dt.files;
                    showPreview(file);
                }
            });

            // Remove buttons
            [removeBtn, removePill].forEach(el => el.addEventListener('click', e => {
                e.stopPropagation();
                resetPreview();
            }));
        })();
    </script>
@endpush
