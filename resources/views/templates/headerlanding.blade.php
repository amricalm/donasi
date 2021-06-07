<title>Qoryah Qur'an {{ (!empty($judul) ? ' - '.$judul : '') }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="{{(!empty($description) ? $description : 'Qoryah Quran')}}" />
        <meta name="keywords" content="Qoryah Qur'an">
        <meta name="author" content="Qoryah Qur'an" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/owl.carousel.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/magnific-popup.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/themify-icons.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/nice-select.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/flaticon.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/gijgo.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/slicknav.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/slick.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/landing/slick-theme.css')}}"/>
        @stack('header')