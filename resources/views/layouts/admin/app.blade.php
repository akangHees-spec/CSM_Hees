@include('layouts.admin.head')

<!--*******************
        Preloader start
    ********************-->
<div id="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!--*******************
        Preloader end
    ********************-->

<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">

    @include('partials.admin.navbar')
    @include('partials.admin.sidebar')

    @yield('content')

    @include('layouts.admin.footer')
    @include('layouts.admin.script')
    @stack('script')

    </body>

    </html>
