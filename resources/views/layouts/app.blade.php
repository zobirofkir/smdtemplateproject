<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title ?? config("app.name") }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets/img/logo/logo.png") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap-5.0.5-alpha.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/LineIcons.2.0.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/glightbox.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/selectr.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/date.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/animate.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/tiny-slider.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/ripple.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/actualities.css") }}">
    <link rel="stylesheet" href="{{asset("assets/css/login.css")}}">
    <link rel="stylesheet" href="{{ asset("assets/css/galery.css") }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset("assets/css/main.css") }}">
</head>

<body>
    <div class="slider-wrapper">

        @include('components.header')

        <main>
            {{ $slot }}
        </main>

        <a href="#" class="scroll-top">
            <i class="lni lni-arrow-up"></i>
        </a>

        @include('components.footer')
    </div>


    <script src="{{ asset('assets/js/bootstrap.bundle-5.0.0.alpha-min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form.js') }}"></script>
    <script src="{{ asset('assets/js/selectr.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/date.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
	<script src="{{ asset('assets/js/ripple.js') }}"></script>
    <script src="{{ asset('assets/js/galery.js') }}"></script>
</body>
</html>
