<!DOCTYPE html>
<html lang="en" class="light scroll-smooth group" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg"
    data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sign In | StarCode & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="StarCode Kh" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">
    <!-- Layout config Js -->
    <script src="{{ asset('admin/assets/js/layout.js') }}"></script>
    <!-- Icons CSS -->

    <!-- StarCode CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/starcode2.css') }}">
</head>

<body
    class="text-base bg-body-bg text-body font-public dark:text-zink-100 dark:bg-zink-800 group-data-[skin=bordered]:bg-body-bordered group-data-[skin=bordered]:dark:bg-zink-700">

    @yield('content')

    <script src="{{ asset('admin/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/%40popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/tippy.js/tippy-bundle.umd.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/prismjs/prism.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/lucide/umd/lucide.js') }}"></script>
    <script src="{{ asset('admin/assets/js/starcode.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/auth-login.init.js') }}"></script>
</body>

</html>
