<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Qoryah Qur'an - Register</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/pages/waves/css/waves.min.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/feather/css/feather.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/icofont/css/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/pages.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/adn.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/sweetalert2/sweetalert2.css') }}">
</head>
<body>
    <div id="app" themebg-pattern="theme5">
        <header id="header" class="bg-header">
            <nav class="flex items-center px-2 py-2 text-center">
                <a href="/" class="mx-auto">
                    <img class="h-6" src="{{ url('img/logo.png') }}">
                </a>
            </nav>
        </header>
        <main>
            <section class="login-block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <form class="md-float-material form-material" method="POST" id="frm" action="{{ url('register/validation') }}" role="form" onsubmit="return submited()">
                            {{ csrf_field() }}
                                <div class="auth-box card">
                                    <div class="card-block">
                                        <div class="text-center pb-4 pt-2">
                                            <h4>REGISTER</h4>
                                        </div>
                                        <div class="form-group form-primary form-static-label {{ $errors->has('name') ? 'has-error' : '' }}">
                                            <input type="text" id="name" name="name" class="form-control" autocomplete="off" value="{{ old('name') }}" required>
                                            <label class="float-label">Nama</label>
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group form-primary form-static-label {{ $errors->has('name') ? 'has-error' : '' }}">
                                            <input type="Email" id="email" name="email" class="form-control" autocomplete="off" value="{{ old('email') }}" required>
                                            <label class="float-label">Email</label>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group form-primary form-static-label {{ $errors->has('phone') ? 'has-error' : '' }}">
                                            <input type="number" id="phone" name="phone" class="form-control" autocomplete="off" value="{{ old('phone') }}" required>
                                            <label class="float-label">Nomor Handphone</label>
                                            @if ($errors->has('phone'))
                                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group form-primary form-static-label {{ $errors->has('phone') ? 'has-error' : '' }}">
                                            <input type="password" id="password" name="password" class="form-control" autocomplete="off" required>
                                            <label class="float-label">Password</label>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group form-primary form-static-label {{ $errors->has('phone') ? 'has-error' : '' }}">
                                            <input type="password" id="confirm_password" name="confirm_password" class="form-control" autocomplete="off" required>
                                            <label class="float-label">Konfirmasi Password</label>
                                            @if ($errors->has('confirm_password'))
                                                <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="row m-t-30">
                                                <div class="col-md-12">
                                                    <button type="submit" id="btnSubmit" class="btn btn-primary btn-md btn-block text-center m-b-20" data-loading-text="Sedang Proses...">Register</button>
                                                    <p class="text-center">Sudah punya akun? <a class="text-primary" href="{{ url('/login') }}"> Login di sini.</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script type="text/javascript" src="{{ asset('files/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/popper.js/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/assets/pages/waves/js/waves.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/modernizr/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/i18next/js/i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/assets/js/common-pages.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/sweetalert2/sweetalert2.all.js')}}"></script>
    <script type="text/javascript">
        // var msg = '{{Session::get('alert')}}';
        // var exist = '{{Session::has('alert')}}';
        // if(exist){
        //     Swal.fire({
        //         type: 'warning',
        //         title: 'Oops...',
        //         text: msg
        //     })
        // }
        // $(document).ready(function(){
        //     $('#email').focus();
        // });
        function submited(){
            $('#btnSubmit').removeClass('btn-primary');
            $('#btnSubmit').addClass('btn-warning');
            $('#btnSubmit').html("<i class='fa fa-spinner fa-spin'></i> Sedang proses ...");
            return true;
        }
    </script>
</body>
</html>