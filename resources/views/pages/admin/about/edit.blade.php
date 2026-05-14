@extends('layouts.admin.app')
@section('title', 'Company Profile – Edit')

@push('styles')
    <style>
        /* ══════════════════════════════════════════
           VARIABLES
        ══════════════════════════════════════════ */
        :root {
            --accent: #4f46e5;
            --accent-light: #eef2ff;
            --accent-mid: #818cf8;
            --border: #e5e7eb;
            --border-soft: #f3f4f6;
            --surface: #ffffff;
            --bg: #f9fafb;
            --text-primary: #111827;
            --text-secondary: #6b7280;
            --text-hint: #9ca3af;
            --radius: 12px;
            --radius-sm: 8px;
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, .06), 0 1px 2px rgba(0, 0, 0, .04);
            --transition: .2s cubic-bezier(.4, 0, .2, 1);
        }

        /* ══════════════════════════════════════════
           PAGE WRAPPER
        ══════════════════════════════════════════ */
        .cp-page {
            max-width: 860px;
            margin: 0 auto;
            padding-bottom: 48px;
        }

        /* ══════════════════════════════════════════
           PAGE HEADER
        ══════════════════════════════════════════ */
        .cp-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 24px;
            flex-wrap: wrap;
        }

        .cp-header-left {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .cp-header-icon {
            width: 44px;
            height: 44px;
            border-radius: var(--radius-sm);
            background: var(--accent-light);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .cp-header-icon i {
            color: var(--accent);
            font-size: 18px;
        }

        .cp-header-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--text-primary);
            margin: 0 0 2px;
            letter-spacing: -.3px;
            line-height: 1.2;
        }

        .cp-header-sub {
            font-size: 13px;
            color: var(--text-secondary);
            margin: 0;
        }

        /* ══════════════════════════════════════════
           FORM CARD
        ══════════════════════════════════════════ */
        .cp-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            box-shadow: var(--shadow-sm);
            overflow: hidden;
        }

        /* ══════════════════════════════════════════
           SECTION ROW
        ══════════════════════════════════════════ */
        .cp-section {
            display: grid;
            grid-template-columns: 210px 1fr;
        }

        .cp-section+.cp-section {
            border-top: 1px solid var(--border-soft);
        }

        /* Left: label column */
        .cp-section-label {
            padding: 28px 22px;
            border-right: 1px solid var(--border-soft);
            background: #fdfcff;
        }

        .cp-sl-icon {
            width: 34px;
            height: 34px;
            border-radius: 8px;
            background: var(--accent-light);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
        }

        .cp-sl-icon i {
            color: var(--accent);
            font-size: 13px;
        }

        .cp-section-label h6 {
            font-size: 13px;
            font-weight: 700;
            color: var(--text-primary);
            margin: 0 0 6px;
            letter-spacing: -.1px;
        }

        .cp-section-label p {
            font-size: 12px;
            color: var(--text-secondary);
            margin: 0;
            line-height: 1.65;
        }

        /* Right: fields column */
        .cp-section-fields {
            padding: 28px 28px;
        }

        /* ══════════════════════════════════════════
           FIELD
        ══════════════════════════════════════════ */
        .cp-field {
            margin-bottom: 20px;
        }

        .cp-field:last-child {
            margin-bottom: 0;
        }

        .cp-field-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 20px;
        }

        .cp-field-row .cp-field {
            margin-bottom: 0;
        }

        .cp-label {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 11.5px;
            font-weight: 600;
            color: var(--text-secondary);
            letter-spacing: .045em;
            text-transform: uppercase;
            margin-bottom: 7px;
        }

        .cp-label .req {
            color: #ef4444;
            font-size: 13px;
            line-height: 1;
        }

        .cp-label .opt {
            font-size: 10px;
            font-weight: 500;
            color: var(--text-hint);
            background: var(--border-soft);
            padding: 1px 6px;
            border-radius: 99px;
            letter-spacing: 0;
            text-transform: none;
        }

        /* Input / Textarea */
        .cp-input {
            display: block;
            width: 100%;
            padding: 10px 13px;
            font-size: 14px;
            color: var(--text-primary);
            background: var(--bg);
            border: 1.5px solid var(--border);
            border-radius: var(--radius-sm);
            outline: none;
            transition: border-color var(--transition), box-shadow var(--transition), background var(--transition);
            line-height: 1.5;
            font-family: inherit;
        }

        .cp-input::placeholder {
            color: #d1d5db;
        }

        .cp-input:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3.5px rgba(79, 70, 229, .10);
            background: var(--surface);
        }

        .cp-input.is-invalid {
            border-color: #ef4444;
        }

        .cp-input.is-invalid:focus {
            box-shadow: 0 0 0 3.5px rgba(239, 68, 68, .10);
        }

        textarea.cp-input {
            resize: vertical;
            min-height: 110px;
            padding: 11px 13px;
            line-height: 1.65;
        }

        .cp-hint {
            font-size: 11.5px;
            color: var(--text-hint);
            margin: 5px 0 0;
            line-height: 1.5;
        }

        .cp-invalid {
            font-size: 12px;
            color: #ef4444;
            margin: 5px 0 0;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        /* ══════════════════════════════════════════
           VISION / MISSION SIDE-BY-SIDE
        ══════════════════════════════════════════ */
        .cp-vismis-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .cp-vismis-col:first-child {
            padding-right: 10px;
            border-right: 1px solid var(--border-soft);
        }

        .cp-vismis-col:last-child {
            padding-left: 10px;
        }

        /* ══════════════════════════════════════════
           FOOTER
        ══════════════════════════════════════════ */
        .cp-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 16px 28px;
            background: #fdfcff;
            border-top: 1px solid var(--border-soft);
            flex-wrap: wrap;
        }

        .cp-footer-actions {
            display: flex;
            gap: 10px;
        }

        .cp-meta {
            font-size: 12px;
            color: var(--text-hint);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .cp-meta i {
            font-size: 11px;
        }

        /* ══════════════════════════════════════════
           BUTTONS
        ══════════════════════════════════════════ */
        .btn-cp-save {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 9px 20px;
            font-size: 13.5px;
            font-weight: 600;
            color: #fff;
            background: var(--accent);
            border: none;
            border-radius: var(--radius-sm);
            cursor: pointer;
            transition: background var(--transition), box-shadow var(--transition), transform var(--transition);
            box-shadow: 0 1px 4px rgba(79, 70, 229, .25);
            font-family: inherit;
        }

        .btn-cp-save:hover {
            background: #4338ca;
            box-shadow: 0 4px 12px rgba(79, 70, 229, .28);
            transform: translateY(-1px);
        }

        .btn-cp-save:active {
            transform: translateY(0);
        }

        .btn-cp-cancel {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 9px 18px;
            font-size: 13.5px;
            font-weight: 500;
            color: var(--text-secondary);
            background: transparent;
            border: 1.5px solid var(--border);
            border-radius: var(--radius-sm);
            cursor: pointer;
            text-decoration: none;
            transition: border-color var(--transition), color var(--transition), background var(--transition);
        }

        .btn-cp-cancel:hover {
            border-color: #d1d5db;
            color: var(--text-primary);
            background: var(--bg);
            text-decoration: none;
        }

        .btn-cp-view {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 8px 16px;
            font-size: 13px;
            font-weight: 500;
            color: var(--accent);
            background: var(--accent-light);
            border: none;
            border-radius: var(--radius-sm);
            cursor: pointer;
            text-decoration: none;
            transition: background var(--transition), color var(--transition);
        }

        .btn-cp-view:hover {
            background: #e0e7ff;
            color: #3730a3;
            text-decoration: none;
        }

        /* ══════════════════════════════════════════
           ALERT
        ══════════════════════════════════════════ */
        .cp-alert {
            display: flex;
            gap: 12px;
            padding: 14px 16px;
            background: #fef2f2;
            border: 1px solid #fecaca;
            border-radius: var(--radius-sm);
            margin-bottom: 20px;
        }

        .cp-alert>i {
            color: #ef4444;
            font-size: 14px;
            flex-shrink: 0;
            margin-top: 1px;
        }

        .cp-alert-body {
            font-size: 13px;
            color: #b91c1c;
        }

        .cp-alert-body strong {
            font-weight: 700;
        }

        .cp-alert-body ul {
            margin: 6px 0 0;
            padding-left: 16px;
        }

        /* ══════════════════════════════════════════
           RESPONSIVE
        ══════════════════════════════════════════ */
        @media (max-width: 768px) {
            .cp-section {
                grid-template-columns: 1fr;
            }

            .cp-section-label {
                border-right: none;
                border-bottom: 1px solid var(--border-soft);
                padding: 20px 20px 16px;
                background: var(--bg);
            }

            .cp-section-fields {
                padding: 20px;
            }

            .cp-field-row,
            .cp-vismis-grid {
                grid-template-columns: 1fr;
            }

            .cp-vismis-col:first-child {
                border-right: none;
                padding-right: 0;
                padding-bottom: 20px;
                border-bottom: 1px solid var(--border-soft);
            }

            .cp-vismis-col:last-child {
                padding-left: 0;
                padding-top: 20px;
            }

            .cp-footer {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
@endpush

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="cp-page">

                {{-- Breadcrumb --}}
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admino.about.index') }}">Company Profile</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
                    </ol>
                </div>

                {{-- Page Header --}}
                <div class="cp-header">
                    <div class="cp-header-left">
                        <div class="cp-header-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div>
                            <h1 class="cp-header-title">Edit Company Profile</h1>
                            <p class="cp-header-sub">Kelola informasi umum, visi, dan misi perusahaan.</p>
                        </div>
                    </div>
                    <a href="{{ route('admino.about.index') }}" class="btn-cp-view">
                        <i class="fas fa-eye"></i> Lihat Profil
                    </a>
                </div>

                {{-- Validation Alert --}}
                @if ($errors->any())
                    <div class="cp-alert">
                        <i class="fas fa-exclamation-circle"></i>
                        <div class="cp-alert-body">
                            <strong>Terdapat kesalahan pada form:</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                {{-- FORM --}}
                <form action="{{ route('admino.about.store') }}" method="POST">
                    @csrf

                    <div class="cp-card">

                        {{-- ───────────────────────────────────
                         Section 1 · General Information
                    ─────────────────────────────────── --}}
                        <div class="cp-section">

                            <div class="cp-section-label">
                                <div class="cp-sl-icon">
                                    <i class="fas fa-info-circle"></i>
                                </div>
                                <h6>General Information</h6>
                                <p>Identitas dasar perusahaan yang tampil di halaman publik.</p>
                            </div>

                            <div class="cp-section-fields">

                                {{-- Company Name + Tagline --}}
                                <div class="cp-field-row">
                                    <div class="cp-field">
                                        <label class="cp-label" for="company_name">
                                            Company Name <span class="req">*</span>
                                        </label>
                                        <input type="text" id="company_name" name="company_name"
                                            class="cp-input @error('company_name') is-invalid @enderror"
                                            value="{{ old('company_name', $companyProfile->company_name) }}"
                                            placeholder="PT. Nama Perusahaan">
                                        @error('company_name')
                                            <p class="cp-invalid"><i class="fas fa-circle-exclamation"></i> {{ $message }}
                                            </p>
                                        @enderror
                                        <p class="cp-hint">Nama resmi sesuai dokumen legal.</p>
                                    </div>

                                    <div class="cp-field">
                                        <label class="cp-label" for="tagline">
                                            Tagline <span class="opt">Opsional</span>
                                        </label>
                                        <input type="text" id="tagline" name="tagline"
                                            class="cp-input @error('tagline') is-invalid @enderror"
                                            value="{{ old('tagline', $companyProfile->tagline) }}"
                                            placeholder="Inovasi Tanpa Batas">
                                        @error('tagline')
                                            <p class="cp-invalid"><i class="fas fa-circle-exclamation"></i> {{ $message }}
                                            </p>
                                        @enderror
                                        <p class="cp-hint">Slogan singkat, maks 8 kata.</p>
                                    </div>
                                </div>

                                {{-- Description --}}
                                <div class="cp-field" style="margin-bottom:0">
                                    <label class="cp-label" for="description">
                                        Description <span class="req">*</span>
                                    </label>
                                    <textarea id="description" name="description" rows="5" class="cp-input @error('description') is-invalid @enderror"
                                        placeholder="Tuliskan deskripsi singkat yang menggambarkan perusahaan Anda...">{{ old('description', $companyProfile->description) }}</textarea>
                                    @error('description')
                                        <p class="cp-invalid"><i class="fas fa-circle-exclamation"></i> {{ $message }}</p>
                                    @enderror
                                    <p class="cp-hint">Paragraf pengenalan, idealnya 2–4 kalimat yang informatif.</p>
                                </div>

                            </div>
                        </div>

                        {{-- ───────────────────────────────────
                         Section 2 · Vision & Mission
                    ─────────────────────────────────── --}}
                        <div class="cp-section">

                            <div class="cp-section-label">
                                <div class="cp-sl-icon">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <h6>Vision &amp; Mission</h6>
                                <p>Arah strategis dan langkah konkret yang ingin dicapai perusahaan.</p>
                            </div>

                            <div class="cp-section-fields">
                                <div class="cp-vismis-grid">

                                    {{-- Vision --}}
                                    <div class="cp-vismis-col">
                                        <div class="cp-field" style="margin-bottom:0">
                                            <label class="cp-label" for="vision">
                                                Vision <span class="req">*</span>
                                            </label>
                                            <textarea id="vision" name="vision" rows="8" class="cp-input @error('vision') is-invalid @enderror"
                                                placeholder="Gambaran besar tujuan jangka panjang perusahaan...">{{ old('vision', $companyProfile->vision) }}</textarea>
                                            @error('vision')
                                                <p class="cp-invalid"><i class="fas fa-circle-exclamation"></i>
                                                    {{ $message }}</p>
                                            @enderror
                                            <p class="cp-hint">1–2 kalimat yang kuat dan inspiratif.</p>
                                        </div>
                                    </div>

                                    {{-- Mission --}}
                                    <div class="cp-vismis-col">
                                        <div class="cp-field" style="margin-bottom:0">
                                            <label class="cp-label" for="mision">
                                                Mission <span class="req">*</span>
                                            </label>
                                            <textarea id="mision" name="mision" rows="8" class="cp-input @error('mision') is-invalid @enderror"
                                                placeholder="Langkah-langkah konkret untuk mewujudkan visi...">{{ old('mision', $companyProfile->mision) }}</textarea>
                                            @error('mision')
                                                <p class="cp-invalid"><i class="fas fa-circle-exclamation"></i>
                                                    {{ $message }}</p>
                                            @enderror
                                            <p class="cp-hint">Bisa berupa poin-poin atau paragraf singkat.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- ───────────────────────────────────
                         Form Footer
                    ─────────────────────────────────── --}}
                        <div class="cp-footer">
                            <div class="cp-footer-actions">
                                <a href="{{ route('admino.about.index') }}" class="btn-cp-cancel">
                                    <i class="fas fa-times"></i> Batal
                                </a>
                                <button type="submit" class="btn-cp-save">
                                    <i class="fas fa-save"></i> Simpan Perubahan
                                </button>
                            </div>
                            @if ($companyProfile->exists)
                                <div class="cp-meta">
                                    <i class="fas fa-clock"></i>
                                    Last updated: {{ $companyProfile->updated_at?->format('d M Y, H:i') ?? '–' }}
                                </div>
                            @endif
                        </div>

                    </div>{{-- /cp-card --}}
                </form>

            </div>{{-- /cp-page --}}
        </div>
    </div>
@endsection
