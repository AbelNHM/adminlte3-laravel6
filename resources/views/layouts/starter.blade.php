<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="AdminLTE3 and Laravel 6">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset(config('assets.plugin.font-awesome.css')) }}" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    @yield('page-stylesheet')
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    @include('include.navbar')
    @include('include.aside-starter')
    @yield('content')
    @include('include.footer')
    @include('include.control2')
    
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset(config('assets.plugin.popper.js')) }}"></script>
<script src="{{ asset(config('assets.plugin.jquery.js')) }}"></script>
<script src="{{ asset(config('assets.plugin.jquery-ui.js')) }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset(config('assets.plugin.bootstrap.js')) }}"></script>

@yield('extra-scripts')
</body>
</html>
