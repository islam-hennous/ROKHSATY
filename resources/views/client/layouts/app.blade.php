<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Favicon -->
    <link rel="icon" href=" {{ URL::asset('client/img/core-img/favicon.ico') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/classy-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/font-awesome.min.css') }}">

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

    <!-- Title -->
    <title>@yield('title')</title>

</head>

<body>
    <!-- Preloader -->
    @include('client.layouts.preloader')
    <!-- end Preloader -->


    <!-- Subscribe Modal -->
    @include('client.layouts.subscribe')
    <!-- end Subscribe Modal -->

    <!-- ##### Header Area Start ##### -->
    @include('client.layouts.header')
    <!-- ##### Header Area End ##### -->

    <!-- ##### body Area Start ##### -->
    @yield('main')
    <!-- ##### body Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('client.layouts.footer')
    <!-- ##### Footer Area End ##### -->



    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src=" {{ URL::asset('client/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ URL::asset('client/js/popper.min.js ') }}"></script>
    <!-- Bootstrap js -->
    <script src=" {{ URL::asset('client/js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
    <script src=" {{ URL::asset('client/js/plugins.js') }}"></script>
    <!-- Active js -->
    <script src=" {{ URL::asset('client/js/active.js') }}"></script>

</body>

</html>
