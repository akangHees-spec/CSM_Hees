@extends('layouts.admin.app')
@section('title', 'Company Profile Edit')
@section('content')
    <div class="content-body">
        <div class="container-fluid">

            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admino.about.index') }}">Company Profile</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
                </ol>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            {{-- SIDEBAR --}}
                            <div class="email-left-box px-0 mb-3">
                                <div class="p-0">
                                    <a href="{{ route('admino.about.index') }}" class="btn btn-primary btn-block">
                                        <i class="fa fa-eye me-1"></i> View Profile
                                    </a>
                                </div>
                                <div class="mail-list rounded overflow-hidden mt-4">
                                    <div class="intro-title d-flex justify-content-between my-0">
                                        <h5>Section</h5>
                                        <i class="fa fa-chevron-down"></i>
                                    </div>
                                    <a href="#section-general" class="list-group-item active">
                                        <span class="icon-primary"><i class="fa fa-circle"></i></span> General
                                    </a>
                                    <a href="#section-vismis" class="list-group-item">
                                        <span class="icon-success"><i class="fa fa-circle"></i></span> Vision & Mission
                                    </a>
                                </div>
                            </div>

                            {{-- MAIN CONTENT --}}
                            <div class="email-right-box ms-0 ms-sm-4 ms-sm-0">
                                <div class="compose-content">

                                    {{-- Form selalu POST ke store (upsert) --}}
                                    <form action="{{ route('admino.about.store') }}" method="POST">
                                        @csrf

                                        {{-- General Information --}}
                                        <div class="mb-3" id="section-general">
                                            <div class="p-3 rounded" style="background:#f8f9fb; border:1px solid #e8eaf0;">
                                                <h6 class="mb-3 fw-bold text-primary">
                                                    <i class="fa fa-building me-2"></i>General Information
                                                </h6>

                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label fw-bold" style="font-size:11px; text-transform:uppercase; letter-spacing:.5px; color:#5e72e4;">
                                                            Company Name
                                                        </label>
                                                        <input type="text" name="company_name"
                                                            class="form-control bg-transparent @error('company_name') is-invalid @enderror"
                                                            value="{{ old('company_name', $companyProfile->company_name) }}"
                                                            placeholder="Nama perusahaan...">
                                                        @error('company_name')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label fw-bold" style="font-size:11px; text-transform:uppercase; letter-spacing:.5px; color:#5e72e4;">
                                                            Tagline
                                                        </label>
                                                        <input type="text" name="tagline"
                                                            class="form-control bg-transparent @error('tagline') is-invalid @enderror"
                                                            value="{{ old('tagline', $companyProfile->tagline) }}"
                                                            placeholder="Tagline perusahaan...">
                                                        @error('tagline')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-0">
                                                    <label class="form-label fw-bold" style="font-size:11px; text-transform:uppercase; letter-spacing:.5px; color:#5e72e4;">
                                                        Description
                                                    </label>
                                                    <textarea name="description" rows="4"
                                                        class="form-control bg-transparent @error('description') is-invalid @enderror"
                                                        placeholder="Deskripsi singkat perusahaan...">{{ old('description', $companyProfile->description) }}</textarea>
                                                    @error('description')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Vision & Mission --}}
                                        <div class="mb-3" id="section-vismis">
                                            <div class="p-3 rounded" style="background:#f8f9fb; border:1px solid #e8eaf0;">
                                                <h6 class="mb-3 fw-bold text-primary">
                                                    <i class="fa fa-bullseye me-2"></i>Vision & Mission
                                                </h6>

                                                <div class="row mb-0">
                                                    <div class="col-md-6 mb-3 mb-md-0">
                                                        <label class="form-label fw-bold" style="font-size:11px; text-transform:uppercase; letter-spacing:.5px; color:#5e72e4;">
                                                            Vision
                                                        </label>
                                                        <textarea name="vision" rows="5"
                                                            class="form-control bg-transparent @error('vision') is-invalid @enderror"
                                                            placeholder="Visi perusahaan...">{{ old('vision', $companyProfile->vision) }}</textarea>
                                                        @error('vision')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="form-label fw-bold" style="font-size:11px; text-transform:uppercase; letter-spacing:.5px; color:#5e72e4;">
                                                            Mission
                                                        </label>
                                                        <textarea name="mision" rows="5"
                                                            class="form-control bg-transparent @error('mision') is-invalid @enderror"
                                                            placeholder="Misi perusahaan...">{{ old('mision', $companyProfile->mision) }}</textarea>
                                                        @error('mision')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Action Buttons --}}
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-3">
                                            <div class="d-flex gap-2">
                                                <button type="submit" class="btn btn-primary btn-sl-sm">
                                                    <i class="fa fa-save me-2"></i>Save Changes
                                                </button>
                                                <a href="{{ route('admino.about.index') }}" class="btn btn-danger light btn-sl-sm">
                                                    <i class="fa fa-times me-2"></i>Cancel
                                                </a>
                                            </div>
                                            @if ($companyProfile->exists)
                                                <span style="font-size:12px; color:#8898aa;">
                                                    <i class="fa fa-clock me-1"></i>
                                                    Last updated: {{ $companyProfile->updated_at?->format('d M Y, H:i') ?? '-' }}
                                                </span>
                                            @endif
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection