<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

{{-- <title>Sales Admin | CORK - Multipurpose Bootstrap Dashboard Template </title> --}}
<title>{{ config('app.name', 'INCIDENCIAS') }} - @yield('title')</title>

{{-- <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/> --}}
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}"/>

{{-- <link href="assets/css/loader.css" rel="stylesheet" type="text/css" /> --}}
<link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />

{{-- <script src="assets/js/loader.js"></script> --}}
<script src="{{ asset('assets/js/loader.js') }}"></script>



<!-- BEGIN GLOBAL MANDATORY STYLES -->

<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

{{-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> --}}
<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

{{-- <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" /> --}}
<link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />

<!-- END GLOBAL MANDATORY STYLES -->




<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

{{-- <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css"> --}}
<link href="{{ asset('plugins/apex/apexcharts.css" rel="stylesheet') }}" type="text/css">
{{-- <link href="assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" /> --}}
<link href="{{ asset('assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />

@yield('styles')

<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->