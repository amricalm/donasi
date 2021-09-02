<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
	@include('templates/mobile/header')
</head>

<body @yield('theme-pattern') class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="homepage">
	<!-- screen loader -->
	@include('templates/mobile/screenloader')
	<!-- menu main -->
	@include('templates/mobile/menumain')
	<!-- Begin page content -->
	<main class="flex-shrink-0 main has-footer">
		<!-- Fixed navbar -->
		@include('templates/mobile/navbar')
		<div class="main-container">
			@yield('content')
		</div>
	</main>
	<!-- footer-->
	@include('templates/mobile/menufooter')
	@include('templates/mobile/footer')
</body>

</html>