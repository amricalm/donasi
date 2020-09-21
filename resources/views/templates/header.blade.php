        <title>Qoryah Qur'an {{ (!empty($judul) ? ' - '.$judul : '') }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="{{(!empty($description) ? $description : 'Qoryah Quran')}}" />
        <meta name="keywords" content="Qoryah Qur'an">
        <meta name="author" content="Qoryah Qur'an" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/pages/waves/css/waves.min.css')}}" media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/feather/css/feather.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/themify-icons/themify-icons.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/icofont/css/icofont.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/pages/prism/prism.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/pretty-checkbox.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/timeline.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/pnotify/css/pnotify.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/pnotify/css/pnotify.brighttheme.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/pnotify/css/pnotify.buttons.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/pnotify/css/pnotify.history.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/pnotify/css/pnotify.mobile.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/pages/pnotify/notify.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/jquery.dataTables.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/adn.css')}}">
        @stack('header')
