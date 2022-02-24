<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @hasSection('title')
            @yield('title')
        @endif
    </title>
    @hasSection('meta_description')
        @yield('meta_description')
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- font---------------------------------------->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/icofont.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/rtl.css')}}">

    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    @stack('styles')
</head>
<body>

<div class="loader-content">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>
</div>


<div class="header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="header-left">
                    <ul>
                        <li>
                            <a href="/cdn-cgi/l/email-protection#1b737e7777745b7d72637a35787476">
                                <i class="icofont-ui-message"></i>
                                <span class="__cf_email__" data-cfemail="cea6aba2a2a18ea8a7b6afe0ada1a3">[email&#160;protected]</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+10235415654">
                                <i class="icofont-phone"></i>
                                +10235415654
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="header-right">
                    <ul class="header-social">
                        <li>
                            <a href="#" target="_blank">
                                <i class="icofont-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="icofont-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="icofont-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="icofont-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="navbar-area">

    <div class="mobile-nav">
        <a class="logo" href="index.html">
            <img alt="logo" src="assets/img/logo.png">
        </a>
    </div>

    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                @include('partials/language_switcher')
                <div id="navbarSupportedContent" class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('FrontEnd.pages.contact-us')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

@yield('content')

<div class="top-btn">
    <i class="icofont-scroll-bubble-up"></i>
</div>


<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

<script src="{{asset('assets/js/form-validator.min.js')}}"></script>

<script src="{{asset('assets/js/contact-form-script.js')}}"></script>

<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('assets/js/wow.min.js')}}"></script>

<script src="{{asset('assets/js/meanmenu.js')}}"></script>

<script src="{{asset('assets/js/custom.js')}}"></script>

</body>


@stack('scripts')

</html>
