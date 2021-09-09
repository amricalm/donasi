<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
	@include('templates/mobile/header')
</head>

<body @yield('theme-pattern') class="body-scroll d-flex flex-column h-100 menu-overlay">
	<!-- screen loader -->
	@include('templates/mobile/screenloader')
	<!-- Begin page content -->
	<main class="flex-shrink-0 main">
		<!-- Fixed navbar -->
		<header class="header">
			<div class="row">
				<a href="{{ url()->previous() }}">
					<div class="col-auto px-0">
						<button class="btn btn-40 btn-link back-btn" type="button">
							<span class="material-icons">keyboard_arrow_left</span>
						</button>
					</div>
				</a>
				<div class="text-left col align-self-center">
					<a class="navbar-brand" href="#">
						<h5 class="mb-0">{{ $judul }}</h5>
					</a>
				</div>
			</div>
		</header>

		<!-- page content start -->

		<div class="main-container">
			<div class="container">
				@yield('content')
			</div>
		</div>
	</main>
	@include('templates/mobile/footer')
</body>

</html>