<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Kaaf Admin Dashboard">
    <meta name="Author" content="Quality-Solutions">

    @include('layouts.head')
    @livewireStyles
</head>

<body class="main-body app sidebar-mini">
<!-- Loader -->
<div id="global-loader">
    <img src="{{URL::asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->
@include('layouts.main-sidebar')
<!-- main-content -->
<div class="main-content app-content">
    @include('layouts.main-header')
    <!-- container -->
    <div class="container-fluid">
        @yield('page-header')
        {{ $slot }}
        @include('layouts.sidebar')
        @include('layouts.models')
        @include('layouts.footer')
        @include('layouts.footer-scripts')
        @stack("modals")
        @stack("css")
        @stack("js")
        @livewireScripts
</body>
</html>
