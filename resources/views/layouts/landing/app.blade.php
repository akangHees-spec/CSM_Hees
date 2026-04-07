<!DOCTYPE html>
<html lang="en">

@include('layouts.landing.head')

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div
            class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">iLanding</h1>
            </a>

            @include('partials.landing.navbar')

            <a class="btn-getstarted" href="index.html#about">Get Started</a>

        </div>
    </header>

    @yield('content')
    @include('layouts.landing.footer')
    @include('layouts.landing.script')

</html>
