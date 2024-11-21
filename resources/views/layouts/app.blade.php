<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{config("app.name")}}</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
	<link rel="stylesheet" href="{{asset("assets/css/bootstrap-5.0.5-alpha.min.css")}}">
	<link rel="stylesheet" href="{{asset("assets/css/LineIcons.2.0.css")}}">
	<link rel="stylesheet" href="{{asset("assets/css/glightbox.min.css")}}">
	<link rel="stylesheet" href="{{asset("assets/css/selectr.css")}}">
	<link rel="stylesheet" href="{{asset("assets/css/date.css")}}">
	<link rel="stylesheet" href="{{asset("assets/css/animate.css")}}">
	<link rel="stylesheet" href="{{asset("assets/css/tiny-slider.css")}}">
	<link rel="stylesheet" href="{{asset("assets/css/ripple.css")}}">
	<link rel="stylesheet" href="{{asset("assets/css/main.css")}}">


</head>

<body>

    <div>
        @include('components.header')
    </div>

    <main>
        {{ $slot }}
    </main>

	<a href="#" class="scroll-top">
		<i class="lni lni-arrow-up"></i>
	</a>

	@include('components.footer')
	<!-- ========================= JS here ========================= -->
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>
	<script src="{{asset('assets/js/contact-form.js')}}"></script>
	<script src="{{asset('assets/js/selectr.min.js')}}"></script>
	<script src="{{asset('assets/js/wow.min.js')}}"></script>
	<script src="{{asset('assets/js/date.js')}}"></script>
	<script src="{{asset('assets/js/tiny-slider.js')}}"></script>
	<script src="{{asset('assets/js/glightbox.min.js')}}"></script>
	<script src="{{asset('assets/js/main.js')}}"></script>
	<script src="{{asset('assets/js/ripple.js')}}"></script>
    <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'8e63056eeaa0e232',t:'MTczMjIxNjY2MC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>

</body>
</html>