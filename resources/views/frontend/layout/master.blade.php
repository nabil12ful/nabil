<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from ethemestudio.com/demo/fungi/4_developer/index_dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Jan 2023 14:33:41 GMT -->
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="shortcut icon" href="image/fav.png" type="image/x-icon">
	<link rel="icon" href="image/fav.png" type="image/x-icon">

    @include('frontend.layout.style')

    <title>Nabil Hamada | Backend Web Developer</title>
</head>
<body data-bs-spy="scroll" data-bs-target="#site-navbar" class="home-developer dark-mode">

	<!-- PRE LOADER -->
	<div class="preloader js-preloader flex-center">
		<div class="dots">
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
		</div>
	</div>

	<!-- SITE HEADER -->
	@include('frontend.layout.header')
    <!-- .site-header -->

    @yield('content')
	<!-- SITE FOOTER -->
	@include('frontend.layout.footer')
    <!-- .site-footer -->

    @include('frontend.layout.script')
</body>

<!-- Mirrored from ethemestudio.com/demo/fungi/4_developer/index_dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Jan 2023 14:34:00 GMT -->
</html>
