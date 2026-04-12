@extends('layouts.admin.app')

@section('title', 'Index Home')
@section('content')

    <div
        class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            {{-- Breadcrumb --}}
            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Company Profile</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li
                        class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Home</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Company Profile
                    </li>
                </ul>
            </div>

            <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">

                {{-- LEFT COLUMN: Logo & Info Singkat --}}
                <div class="xl:col-span-4">
                    <div class="sticky top-[calc(theme('spacing.header')_*_1.3)] mb-5">

                        {{-- Card Logo Perusahaan --}}
                        <div class="card">
                            <div class="card-body">
                                <div class="grid grid-cols-1 gap-5 md:grid-cols-12">
                                    {{-- Logo utama (besar) --}}
                                    <div
                                        class="rounded-md md:col-span-12 bg-slate-100 dark:bg-zink-600 flex items-center justify-center p-8">
                                        @if ($profile->logo)
                                            <img src="{{ asset('storage/' . $profile->logo) }}"
                                                alt="Logo {{ $profile->company_name }}"
                                                class="max-h-40 object-contain">
                                        @else
                                            <div
                                                class="flex items-center justify-center w-24 h-24 rounded-full bg-custom-100 dark:bg-custom-500/20">
                                                <i data-lucide="building-2" class="text-custom-500 size-12"></i>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                {{-- Tombol Edit --}}
                                <div class="flex gap-2 mt-4 shrink-0">
                                    <a href="{{ route('home.edit') }}"
                                        class="w-full bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20">
                                        <i data-lucide="file-edit"
                                            class="inline-block align-middle size-3 ltr:mr-1 rtl:ml-1"></i>
                                        <span class="align-middle">Edit Profile</span>
                                    </a>
                                </div>

                                {{-- Link Tambahan --}}
                                <div class="flex items-center gap-3 mt-3 justify-evenly">
                                    <a href="#section-vision"
                                        class="transition-all duration-300 ease-linear hover:text-custom-500">
                                        <i data-lucide="eye" class="inline-block align-middle size-3 ltr:mr-1 rtl:ml-1"></i>
                                        <span class="align-middle">Visi</span>
                                    </a>
                                    <a href="#section-mission"
                                        class="transition-all duration-300 ease-linear hover:text-custom-500">
                                        <i data-lucide="target"
                                            class="inline-block align-middle size-3 ltr:mr-1 rtl:ml-1"></i>
                                        <span class="align-middle">Misi</span>
                                    </a>
                                    <a href="#section-description"
                                        class="transition-all duration-300 ease-linear hover:text-custom-500">
                                        <i data-lucide="info"
                                            class="inline-block align-middle size-3 ltr:mr-1 rtl:ml-1"></i>
                                        <span class="align-middle">Tentang</span>
                                    </a>
                                </div>
                            </div>
                        </div><!--end card-->

                        {{-- Card Info Singkat Perusahaan --}}
                        <div class="card">
                            <div class="border-b card-body border-slate-200 dark:border-zink-500">
                                <div class="flex">
                                    <h6 class="grow text-15">
                                        <i data-lucide="building-2" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i>
                                        <span class="align-middle">{{ $profile->company_name }}</span>
                                    </h6>
                                    <div class="shrink-0">
                                        <span
                                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-sky-100 border-sky-100 text-sky-500 dark:bg-sky-400/20 dark:border-transparent">Active</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="flex">
                                    <h6 class="grow text-15">
                                        <i data-lucide="quote"
                                            class="inline-block text-orange-500 size-4 ltr:mr-1 rtl:ml-1"></i>
                                        <span
                                            class="align-middle text-slate-500 dark:text-zink-200 font-normal italic">"{{ $profile->tagline }}"</span>
                                    </h6>
                                </div>
                            </div>
                        </div><!--end card-->

                    </div>
                </div><!--end col-->

                {{-- RIGHT COLUMN: Detail Company Profile --}}
                <div class="xl:col-span-8">
                    <div class="card">
                        <div class="card-body">

                            {{-- Dropdown Edit / Delete (pojok kanan atas) --}}
                            <div class="relative ltr:float-right rtl:float-left dropdown">
                                <button
                                    class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                    id="companyProfileMenu" data-bs-toggle="dropdown">
                                    <i data-lucide="more-horizontal" class="size-3"></i>
                                </button>
                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                    aria-labelledby="companyProfileMenu">
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ route('home.edit') }}">
                                            <i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i>
                                            <span class="align-middle">Edit</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            {{-- Badge & Nama Perusahaan --}}
                            <span
                                class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-sky-100 border-sky-100 text-sky-500 dark:bg-sky-400/20 dark:border-transparent">Company
                                Profile</span>
                            <h5 class="mt-3 mb-1">{{ $profile->company_name }}</h5>
                            <ul class="flex flex-wrap items-center gap-4 mb-5 text-slate-500 dark:text-zink-200">
                                <li><i data-lucide="tag" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="font-medium italic">"{{ $profile->tagline }}"</span></li>
                            </ul>

                            {{-- Section: Deskripsi --}}
                            <div class="mt-5" id="section-description">
                                <h6 class="mb-3 text-15">Tentang Perusahaan:</h6>
                                <p class="mb-2 text-slate-500 dark:text-zink-200">
                                    {{ $profile->description }}
                                </p>
                            </div>

                            {{-- Section: Visi --}}
                            <div class="mt-5" id="section-vision">
                                <h6 class="mb-3 text-15">Visi:</h6>
                                <div
                                    class="flex items-start gap-3 p-4 border rounded-md border-slate-200 dark:border-zink-500">
                                    <div class="flex items-center justify-center shrink-0">
                                        <i data-lucide="eye"
                                            class="w-6 h-6 text-custom-500 fill-custom-100 dark:fill-custom-500/20"></i>
                                    </div>
                                    <p class="text-slate-500 dark:text-zink-200">{{ $profile->vision }}</p>
                                </div>
                            </div>

                            {{-- Section: Misi --}}
                            <div class="mt-5" id="section-mission">
                                <h6 class="mb-3 text-15">Misi:</h6>
                                <div
                                    class="flex items-start gap-3 p-4 border rounded-md border-slate-200 dark:border-zink-500">
                                    <div class="flex items-center justify-center shrink-0">
                                        <i data-lucide="target"
                                            class="w-6 h-6 text-custom-500 fill-custom-100 dark:fill-custom-500/20"></i>
                                    </div>
                                    <p class="text-slate-500 dark:text-zink-200">{{ $profile->mission }}</p>
                                </div>
                            </div>

                            {{-- Section: Tabel Detail --}}
                            <div class="mt-5">
                                <h6 class="mb-3 text-15">Detail Informasi:</h6>
                                <div class="overflow-x-auto">
                                    <table class="w-full">
                                        <tbody>
                                            <tr>
                                                <th
                                                    class="px-3.5 py-2.5 font-semibold border-b border-transparent w-64 ltr:text-left rtl:text-right text-slate-500 dark:text-zink-200">
                                                    Nama Perusahaan</th>
                                                <td class="px-3.5 py-2.5 border-b border-transparent">
                                                    {{ $profile->company_name }}</td>
                                            </tr>
                                            <tr>
                                                <th
                                                    class="px-3.5 py-2.5 font-semibold border-b border-transparent w-64 ltr:text-left rtl:text-right text-slate-500 dark:text-zink-200">
                                                    Tagline</th>
                                                <td class="px-3.5 py-2.5 border-b border-transparent">
                                                    {{ $profile->tagline }}</td>
                                            </tr>
                                            <tr>
                                                <th
                                                    class="px-3.5 py-2.5 font-semibold border-b border-transparent w-64 ltr:text-left rtl:text-right text-slate-500 dark:text-zink-200">
                                                    Visi</th>
                                                <td class="px-3.5 py-2.5 border-b border-transparent">
                                                    {{ $profile->vision }}</td>
                                            </tr>
                                            <tr>
                                                <th
                                                    class="px-3.5 py-2.5 font-semibold border-b border-transparent w-64 ltr:text-left rtl:text-right text-slate-500 dark:text-zink-200">
                                                    Misi</th>
                                                <td class="px-3.5 py-2.5 border-b border-transparent">
                                                    {{ $profile->mission }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div><!--end card-->
                </div><!--end col-->

            </div><!--end grid-->
        </div>
        <!-- container-fluid -->
    </div>

@endsection
