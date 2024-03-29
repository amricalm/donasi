<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Si Kesjaor - Mobile</title>
    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('vendor/finwallapp/img/favicon180.png')}}" sizes="180x180">
    <link rel="icon" href="{{ asset('vendor/finwallapp/img/favicon32.png')}}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('vendor/finwallapp/img/favicon16.png')}}" sizes="16x16" type="image/png">
    <!-- Material icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- swiper CSS -->
    <link href="{{ asset('vendor/finwallapp/vendor/swiper/css/swiper.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('vendor/finwallapp/css/style.css')}}" rel="stylesheet" id="style">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/sweetalert2/sweetalert2.css') }}">
</head>

<body class="body-scroll d-flex flex-column h-100 menu-overlay">
    @if (!Session::has('alert'))
    <!-- screen loader -->
    <div class="container-fluid h-100 loader-display">
        <div class="row h-100">
            <div class="align-self-center col">
                <div class="logo-loading">
                    <div class="icon icon-100 mb-4 rounded-circle">
                        <img src="{{ asset('vendor/finwallapp/img/favicon144.png')}}" alt="" class="w-100">
                    </div>
                    <h4 class="text-default">SI Kesjaor</h4>
                    <p class="text-secondary">Mobile</p>
                    <div class="loader-ellipsis">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <form class="md-float-material form-material" method="POST" id="frm" action="{{ url('login/validasi') }}" role="form" onsubmit="return submited()" autocomplete="off">
        @csrf
        <!-- Begin page content -->
        <main class="flex-shrink-0 main has-footer">
            <!-- Fixed navbar -->
            <header class="header">
                <div class="row">
                    <div class="col-auto px-0">
                        <button class="btn btn-40 btn-link back-btn" type="button">
                            <span class="material-icons">keyboard_arrow_left</span>
                        </button>
                    </div>
                    <div class="text-left col align-self-center">

                    </div>
                    <div class="ml-auto col-auto align-self-center">
                        <a href="{{ url('registration') }}" class="text-white">
                            Registrasi
                        </a>
                    </div>
                </div>
            </header>
            <div class="container h-100 text-white">
                <div class="row h-100">
                    <div class="col-12 align-self-center mb-4">
                        <div class="row justify-content-center">
                            <div class="col-11 col-sm-7 col-md-6 col-lg-5 col-xl-4">
                                <h2 class="font-weight-normal mb-5">Si Kesjaor</h2>
                                <div class="form-group">
                                    <label class="text-white active">Username</label>
                                    <input type="text" class="form-control" name="Login" id="Login" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-white position-relative">Password</label>
                                    <input type="password" class="form-control" name="Password" id="Password" autocomplete="off" required>
                                </div>
                                @if (Session::has('alert'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('alert') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
        <!-- footer-->
        <div class="footer no-bg-shadow py-3">
            <div class="row justify-content-center">
                <div class="col">
                    <button type="submit" id="btnSubmit" class="btn btn-default rounded btn-block" data-loading-text="Sedang Proses...">Login</button>
                </div>
            </div>
        </div>
    </form>
    <!-- Required jquery and libraries -->
    <script src="{{ asset('vendor/finwallapp/js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('vendor/finwallapp/js/popper.min.js')}}"></script>
    <script src="{{ asset('vendor/finwallapp/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- cookie js -->
    <script src="{{ asset('vendor/finwallapp/js/jquery.cookie.js')}}"></script>
    <!-- Swiper slider  js-->
    <script src="{{ asset('vendor/finwallapp/vendor/swiper/js/swiper.min.js')}}"></script>
    <!-- Customized jquery file  -->
    <script src="{{ asset('vendor/finwallapp/js/main.js')}}"></script>
    <script src="{{ asset('vendor/finwallapp/js/color-scheme-demo.js')}}"></script>
    <!-- page level custom script -->
    <script src="{{ asset('vendor/finwallapp/js/app.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/sweetalert2/sweetalert2.all.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#Loin').focus();
        });

        function submited() {
            $('#btnSubmit').removeClass('btn-default');
            $('#btnSubmit').addClass('btn-warning');
            $('#btnSubmit').html("<i class='fa fa-spinner fa-spin'></i> Sedang proses ...");
            return true;
        }
    </script>
</body>

</html>