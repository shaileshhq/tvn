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
    <style>
        #global-modal .modal-dialog {
            max-width: 400px;
            margin: 40px auto;
        }

        #global-modal .modal-content {
            background: transparent;
            border: none;
            box-shadow: none;
            position: relative;
        }

        #global-modal .btn-close-modal {
            position: absolute;
            top: -15px;
            right: -15px;
            background: #ff0000;
            color: white !important;
            border: 2px solid #fff;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            font-size: 22px;
            line-height: 31px;
            text-align: center;
            z-index: 1051;
            cursor: pointer;
            opacity: 1;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
        }

        #global-modal .btn-close-modal:hover {
            background: #cc0000;
            transform: scale(1.1);
        }

        #global-modal img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.5);
            display: block;
        }

        @media (max-width: 768px) {
            #global-modal .modal-dialog {
                width: 85%;
            }
        }
    </style>
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

    <!-- Global Modal -->
    @php
        $modalImage = websiteSetupValue('modal_image');
        $endDate = websiteSetupValue('end_date');
        $isHomePage = request()->routeIs('front.index');
        $shouldShow = $isHomePage && $modalImage && (!$endDate || $endDate >= date('Y-m-d'));
    @endphp

    @if ($shouldShow)
        <div class="modal fade" id="global-modal" role="dialog" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="btn-close-modal" data-dismiss="modal">×</button>
                    <a href="{{ websiteSetupValue('modal_url') ?: '#' }}" target="_blank">
                        <img src="{{ asset('storage/website_setup/' . websiteSetupValue('modal_image')) }}"
                            alt="Announcement">
                    </a>
                </div>
            </div>
        </div>
    @endif

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/slick.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.counterup.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        $(document).ready(function() {
            @if ($shouldShow)
                setTimeout(function() {
                    $('#global-modal').modal('show');
                }, 1000);
            @endif
        });
        $('.btn-close-modal').click(function() {
            $('#global-modal').modal('hide');
        });
    </script>
</body>
