@extends('layouts.admin.app')

@section('title', 'Edit - Company Profile')

@section('content')
    <style>
        /* ─── Drop Zone ───────────────────────────────── */
        .dz-wrap {
            position: relative;
            border: 2px dashed #EBEEF2;
            border-radius: 1.25rem;
            background: #f8f9fc;
            transition: border-color .2s, background .2s;
            overflow: hidden;
            cursor: pointer;
        }

        .dz-wrap:hover,
        .dz-wrap.dragover {
            border-color: #886CC0;
            background: #f4f0ff;
        }

        /* ✅ FIX DOUBLE-CLICK: hide input, trigger via <label for="..."> instead */
        .dz-wrap input[type="file"] {
            display: none;
        }

        /* Banner */
        .dz-banner {
            height: 220px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dz-banner .dz-body {
            text-align: center;
            pointer-events: none;
            z-index: 1;
        }

        .dz-banner .dz-preview {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 1.25rem;
            z-index: 2;
            pointer-events: none;
        }

        .dz-banner .dz-overlay {
            position: absolute;
            bottom: 15px;
            right: 15px;
            background: rgba(136, 108, 192, 0.8);
            color: #fff;
            font-size: 11px;
            padding: 5px 15px;
            border-radius: 0.75rem;
            z-index: 4;
            pointer-events: none;
            display: none;
        }

        .dz-banner.has-image .dz-overlay {
            display: block;
        }

        .dz-banner.has-image .dz-body {
            display: none;
        }

        /* ─── Cards ───────────────────────────────────── */
        .ec-card {
            background: #fff;
            border: 0 solid transparent;
            border-radius: 1.25rem;
            box-shadow: 0 0.625rem 1.25rem 0 rgba(0, 0, 0, 0.05);
            margin-bottom: 1.875rem;
        }

        .ec-card-header {
            padding: 1.25rem 1.875rem;
            border-bottom: 1px solid #f0f1f3;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .ec-card-header i {
            color: #886CC0;
            font-size: 1.1rem;
        }

        .ec-card-header h5 {
            margin: 0;
            font-size: 1rem;
            font-weight: 600;
            color: #000;
        }

        .ec-card-body {
            padding: 1.875rem;
        }

        /* ─── Form controls ───────────────────────────── */
        .ec-label {
            font-size: 0.875rem;
            font-weight: 500;
            color: #3d4461;
            margin-bottom: 0.5rem;
            display: block;
        }

        .ec-label .req {
            color: #ff5e5e;
        }

        .ec-input {
            width: 100%;
            border: 1px solid #EBEEF2;
            border-radius: 0.75rem;
            padding: 0.75rem 1rem;
            font-size: 0.875rem;
            color: #717579;
            background: #fff;
            transition: all 0.3s;
            outline: none;
        }

        .ec-input:focus {
            border-color: #886CC0;
            box-shadow: none;
        }

        .ec-input.is-invalid {
            border-color: #ff5e5e;
        }

        textarea.ec-input {
            resize: vertical;
        }

        .ec-hint {
            font-size: 0.75rem;
            color: #9ca3af;
            margin-top: 5px;
        }

        /* ─── Stat card ───────────────────────────────── */
        .stat-item {
            border: 1px solid #EBEEF2;
            border-radius: 1.25rem;
            padding: 20px;
            background: #fff;
            height: 100%;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .stat-item-top {
            text-align: center;
        }

        .count-big {
            font-size: 2rem;
            font-weight: 700;
            color: #886CC0;
            line-height: 1;
        }

        .count-sub {
            font-size: .75rem;
            color: #7e7e7e;
            margin-top: 4px;
        }

        /* ─── Preview box ─────────────────────────────── */
        .preview-box {
            background: linear-gradient(135deg, #886CC0 0%, #5d44a2 100%);
            border-radius: 1.25rem;
            padding: 40px 25px;
            text-align: center;
            color: #fff;
        }

        .preview-box h2 {
            color: #fff;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .preview-box h5 {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 400;
            margin-bottom: 8px;
        }

        .preview-box .pv-tagline {
            color: rgba(255, 255, 255, 0.8);
            font-style: italic;
            margin-bottom: 15px;
            font-size: 0.9rem;
        }

        .preview-box .pv-desc {
            color: rgba(255, 255, 255, 0.75);
            font-size: 0.85rem;
            max-width: 560px;
            margin: 0 auto 25px;
        }

        .preview-box .pv-count {
            font-size: 1.8rem;
            font-weight: 700;
            color: #fff;
        }

        /* ─── Buttons ─────────────────────────────────── */
        .btn-fillow {
            background: #886CC0;
            color: #fff;
            border-radius: 0.75rem;
            border: none;
            padding: 0.6rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-fillow:hover {
            background: #6e52a4;
            color: #fff;
        }

        .btn-cancel {
            background: #f0f1f5;
            color: #3d4461;
            border-radius: 0.75rem;
            padding: 0.6rem 1.5rem;
            border: none;
        }
    </style>

    <div class="content-body">
        <div class="container-fluid">

            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('sigma.company-profile.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" style="border-radius: 0.75rem;">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                        fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                        <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                        <line x1="15" y1="9" x2="9" y2="15"></line>
                        <line x1="9" y1="9" x2="15" y2="15"></line>
                    </svg>
                    <strong>Gagal!</strong> Periksa kembali inputan Anda.
                    <ul class="mb-0 mt-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <form action="{{ route('sigma.company-profile.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- ── Action Header ── --}}
                <div class="ec-card">
                    <div class="ec-card-body d-flex justify-content-between align-items-center py-3">
                        <h4 class="mb-0 fw-bold" style="font-size:1.1rem; color:#000;">
                            <i class="fas fa-edit me-2" style="color:#886CC0;"></i>Edit Profil Perusahaan
                        </h4>
                        <div class="d-flex gap-2">
                            <a href="{{ route('sigma.company-profile.index') }}" class="btn btn-sm btn-cancel">
                                <i class="fas fa-arrow-left me-1"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-sm btn-fillow">
                                <i class="fas fa-save me-1"></i> Simpan
                            </button>
                        </div>
                    </div>
                </div>

                {{-- ── Banner — DB col #3, varchar(255) ── --}}
                <div class="ec-card">
                    <div class="ec-card-header">
                        <i class="fas fa-image"></i>
                        <h5>Banner Utama</h5>
                    </div>
                    <div class="ec-card-body">
                        {{-- ✅ <label for="bannerInput"> sebagai satu-satunya trigger klik --}}
                        <label for="bannerInput" style="display:block; margin:0;">
                            <div id="bannerZone"
                                class="dz-wrap dz-banner {{ $profile && $profile->banner ? 'has-image' : '' }}">

                                <input type="file" id="bannerInput" name="banner"
                                    accept="image/jpg,image/jpeg,image/png,image/webp" onchange="onBannerChange(this)">

                                <div class="dz-body">
                                    <i class="fas fa-cloud-upload-alt fa-2x mb-2" style="color:#886CC0;opacity:.7;"></i>
                                    <p class="mb-1 fw-semibold" style="color:#3d4461; font-size:.9rem;">Tarik gambar banner
                                        ke sini</p>
                                    <p class="mb-2" style="color:#717579; font-size:.8rem;">atau klik untuk menelusuri</p>
                                    <span
                                        style="background:#EBEEF2; border-radius:0.5rem; padding:4px 12px; font-size:.75rem; color:#717579;">
                                        JPG, PNG, WEBP &nbsp;|&nbsp; Maks. 2MB
                                    </span>
                                </div>

                                <img id="bannerImg" class="dz-preview"
                                    src="{{ $profile && $profile->banner ? asset('storage/' . $profile->banner) : '' }}"
                                    style="{{ $profile && $profile->banner ? '' : 'display:none;' }}" alt="Banner">

                                <span class="dz-overlay"><i class="fas fa-pencil-alt me-1"></i> Ganti Banner</span>
                            </div>
                        </label>
                        <p class="ec-hint mt-2 mb-0">
                            <i class="fas fa-info-circle me-1"></i>
                            Biarkan kosong jika tidak ingin memperbarui banner.
                        </p>
                    </div>
                </div>

                {{-- ── Main Info ── --}}
                <div class="row">
                    <div class="col-xl-6">
                        <div class="ec-card">
                            <div class="ec-card-header">
                                <i class="fas fa-building"></i>
                                <h5>Informasi Umum</h5>
                            </div>
                            <div class="ec-card-body d-flex flex-column" style="gap:20px;">

                                {{-- company_name — DB col #2 --}}
                                <div>
                                    <label class="ec-label" for="iName">Nama Perusahaan <span
                                            class="req">*</span></label>
                                    <input type="text" name="company_name" id="iName"
                                        class="ec-input @error('company_name') is-invalid @enderror"
                                        value="{{ old('company_name', $profile->company_name ?? '') }}"
                                        placeholder="Contoh: Fillow Corp" oninput="liveUpdate()">
                                    @error('company_name')
                                        <span style="color:#ff5e5e; font-size:.75rem;">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- title — DB col #4 --}}
                                <div>
                                    <label class="ec-label" for="iTitle">Judul Halaman (Title)</label>
                                    <input type="text" name="title" id="iTitle"
                                        class="ec-input @error('title') is-invalid @enderror"
                                        value="{{ old('title', $profile->title ?? '') }}"
                                        placeholder="Tagline utama di banner" oninput="liveUpdate()">
                                    @error('title')
                                        <span style="color:#ff5e5e; font-size:.75rem;">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- tagline — DB col #5 --}}
                                <div>
                                    <label class="ec-label" for="iTagline">Tagline Pendek</label>
                                    <input type="text" name="tagline" id="iTagline"
                                        class="ec-input @error('tagline') is-invalid @enderror"
                                        value="{{ old('tagline', $profile->tagline ?? '') }}"
                                        placeholder="Slogan singkat" oninput="liveUpdate()">
                                    @error('tagline')
                                        <span style="color:#ff5e5e; font-size:.75rem;">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- order — DB col #10, int, default 0 --}}
                                <div>
                                    <label class="ec-label" for="iOrder">Urutan Tampil (Order)</label>
                                    <input type="number" name="order" id="iOrder" class="ec-input"
                                        value="{{ old('order', $profile->order ?? 0) }}" min="0">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="ec-card" style="height: calc(100% - 1.875rem);">
                            <div class="ec-card-header">
                                <i class="fas fa-align-left"></i>
                                <h5>Deskripsi</h5>
                            </div>
                            <div class="ec-card-body d-flex flex-column" style="height: calc(100% - 65px);">
                                {{-- description — DB col #6, text --}}
                                <label class="ec-label" for="iDesc">Tentang Perusahaan <span
                                        class="req">*</span></label>
                                <textarea name="description" id="iDesc" rows="10"
                                    class="ec-input flex-grow-1 @error('description') is-invalid @enderror"
                                    placeholder="Tulis sejarah atau visi misi perusahaan..." oninput="liveUpdate()">{{ old('description', $profile->description ?? '') }}</textarea>
                                @error('description')
                                    <span style="color:#ff5e5e; font-size:.75rem;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ── Visual & Statistik ── --}}
                <div class="ec-card">
                    <div class="ec-card-header">
                        <i class="fas fa-chart-line"></i>
                        <h5>Visual & Statistik</h5>
                    </div>
                    <div class="ec-card-body">
                        <div class="row g-4">

                            {{-- icon_title — DB col #8, varchar(255) --}}
                            <div class="col-lg-4 col-md-6">
                                <div class="stat-item">
                                    <div class="stat-item-top">
                                        <i class="fas fa-tag fa-2x" style="color:#886CC0; opacity:.5;"></i>
                                        <div class="count-sub mt-2">label statistik</div>
                                    </div>
                                    <label class="ec-label mb-0" for="iIconTitle">Icon Title</label>
                                    <input type="text" name="icon_title" id="iIconTitle" class="ec-input"
                                        value="{{ old('icon_title', $profile->icon_title ?? '') }}"
                                        placeholder="Contoh: Klien Aktif" oninput="liveUpdate()">
                                    @error('icon_title')
                                        <span style="color:#ff5e5e; font-size:.75rem;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- icon_subtitle — DB col #9, varchar(255) --}}
                            <div class="col-lg-4 col-md-6">
                                <div class="stat-item">
                                    <div class="stat-item-top">
                                        <i class="fas fa-info fa-2x" style="color:#886CC0; opacity:.5;"></i>
                                        <div class="count-sub mt-2">sub-label statistik</div>
                                    </div>
                                    <label class="ec-label mb-0" for="iIconSubtitle">Icon Subtitle</label>
                                    <input type="text" name="icon_subtitle" id="iIconSubtitle" class="ec-input"
                                        value="{{ old('icon_subtitle', $profile->icon_subtitle ?? '') }}"
                                        placeholder="Contoh: Di seluruh Indonesia" oninput="liveUpdate()">
                                    @error('icon_subtitle')
                                        <span style="color:#ff5e5e; font-size:.75rem;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- count — DB col #13, varchar(255) --}}
                            <div class="col-lg-4 col-md-6">
                                <div class="stat-item">
                                    <div class="stat-item-top">
                                        <div class="count-big" id="countDisplay">
                                            {{ old('count', $profile->count ?? '0') }}</div>
                                        <div class="count-sub">angka statistik</div>
                                    </div>
                                    <label class="ec-label mb-0" for="iCount">Count</label>
                                    <input type="text" name="count" id="iCount" class="ec-input"
                                        value="{{ old('count', $profile->count ?? '') }}" placeholder="Contoh: 500+"
                                        oninput="document.getElementById('countDisplay').textContent = this.value||'0'; liveUpdate()">
                                    @error('count')
                                        <span style="color:#ff5e5e; font-size:.75rem;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @stack('script')
    <script>
        /* ─── Drag & Drop ─────────────────────────────── */
        function setupDrop(zoneId, inputId, onFile) {
            const zone = document.getElementById(zoneId);
            if (!zone) return;
            zone.addEventListener('dragover', e => {
                e.preventDefault();
                zone.classList.add('dragover');
            });
            zone.addEventListener('dragleave', () => zone.classList.remove('dragover'));
            zone.addEventListener('drop', e => {
                e.preventDefault();
                zone.classList.remove('dragover');
                const file = e.dataTransfer.files[0];
                if (!file) return;
                const dt = new DataTransfer();
                dt.items.add(file);
                document.getElementById(inputId).files = dt.files;
                onFile(document.getElementById(inputId));
            });
        }

        function onBannerChange(input) {
            if (!input.files || !input.files[0]) return;
            const reader = new FileReader();
            reader.onload = e => {
                const img = document.getElementById('bannerImg');
                img.src = e.target.result;
                img.style.display = '';
                document.getElementById('bannerZone').classList.add('has-image');
            };
            reader.readAsDataURL(input.files[0]);
        }
        setupDrop('bannerZone', 'bannerInput', onBannerChange);

        /* ─── Live Preview ────────────────────────────── */
        function g(id) {
            return document.getElementById(id);
        }

        function liveUpdate() {
            const desc = g('iDesc').value;
            g('pvName').textContent = g('iName').value || 'Company Name';
            g('pvTitle').textContent = g('iTitle').value || 'Main Title';
            g('pvTagline').textContent = g('iTagline').value || 'Tagline perusahaan';
            g('pvDesc').textContent = desc.length > 150 ? desc.substring(0, 150) + '...' : (desc ||
                'Deskripsi belum diisi.');
            g('pvCount').textContent = g('countDisplay').textContent || '0';
            g('pvIconTitle').textContent = g('iIconTitle').value || 'Label';
            g('pvIconSub').textContent = g('iIconSubtitle').value || 'Sub-label';
        }
    </script>
@endsection
