<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('app_name') }}</title>
    <!-- Favicon -->
    @if (websiteSetupValue('favicon'))
        <link rel="shortcut icon" href="{{ asset('storage/website_setup/' . websiteSetupValue('favicon')) }}" />
    @else
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">
    @endif
    <!-- Font awesome -->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <!-- Main style sheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet'
        type='text/css'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- END SCROLL TOP BUTTON -->

    @include('frontend.layout.header')
    @yield('content')
    @include('frontend.layout.footer')
    @stack('scripts')
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/slick.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#global-modal').modal('show');
            }, 1000);
        });
        $('.btn-close').click(function() {
            $('#global-modal').modal('hide');
        });
    </script>
</body>
