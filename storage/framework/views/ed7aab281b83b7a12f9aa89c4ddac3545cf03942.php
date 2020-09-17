<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Qoryah Qur'an - Admin Login</title>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="icon" href="<?php echo e(asset('img/favicon.ico')); ?>" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/bower_components/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/pages/waves/css/waves.min.css')); ?>" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/icon/feather/css/feather.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/icon/themify-icons/themify-icons.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/icon/icofont/css/icofont.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/icon/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/css/pages.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/css/adn.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/bower_components/sweetalert2/sweetalert2.css')); ?>">
</head>
<body themebg-pattern="theme4">
    <div id="app">
        <header id="header" class="bg-header">
            <nav class="flex items-center px-2 py-2 text-center">
                <a href="/" class="mx-auto">
                    <img class="h-6" src="<?php echo e(url('img/logo-qoryah-quran.png')); ?>">
                </a>
            </nav>
        </header>
        <main class="py-4">
            <section class="login-block">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <form class="md-float-material form-material" method="POST" id="frm" action="<?php echo e(url('aman/validasi')); ?>" role="form" onsubmit="return submited()">
                            <?php echo csrf_field(); ?>
                                <div class="text-center">
                                    <img src="<?php echo e(asset('img/iconptpn.png')); ?>" alt="Logo PT. Perkebunan Nusantara XII">
                                </div>
                                <div class="auth-box card">
                                    <div class="card-block">
                                        <div class="text-center">
                                            <div class="text-center" style="margin-bottom: 40px;">
                                                <img src="<?php echo e(asset('img/blacklogo.png')); ?>" alt="Logo Si Tata Kelola Dokumen">
                                            </div>
                                        </div>
                                        <div class="form-group form-primary<?php echo e($errors->has('email') ? ' has-error' : ''); ?> form-static-label">
                                            <input id="email" type="text" name="username" class="form-control" autocomplete="off" required>
                                            <?php if($errors->has('email')): ?>
                                            <span class="form-bar">
                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                            <label class="float-label">Username</label>
                                        </div>
                                        <div class="form-group form-primary<?php echo e($errors->has('password') ? ' has-error' : ''); ?> form-static-label">
                                            <input id="password" type="password" name="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" required="">
                                            <?php if($errors->has('password')): ?>
                                            <span class="form-bar">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                            <?php endif; ?>
                                            <label class="float-label">Password</label>
                                        </div>
                                        <div class="form-group">
                                        <div class="row m-t-30">
                                            <div class="col-md-12">
                                            <button type="submit" id="btnSubmit" class="btn btn-primary btn-md btn-block text-center m-b-20" data-loading-text="Sedang Proses...">Login</button>
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
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/jquery/js/jquery.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/jquery-ui/js/jquery-ui.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/popper.js/js/popper.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/assets/pages/waves/js/waves.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/modernizr/js/modernizr.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/modernizr/js/css-scrollbars.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/i18next/js/i18next.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/jquery-i18next/js/jquery-i18next.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/assets/js/common-pages.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/sweetalert2/sweetalert2.all.js')); ?>"></script>
    <script type="text/javascript">
        var msg = '<?php echo e(Session::get('alert')); ?>';
        var exist = '<?php echo e(Session::has('alert')); ?>';
        if(exist){
            Swal.fire({
                type: 'warning',
                title: 'Oops...',
                text: msg
            })
        }
        $(document).ready(function(){
            $('#email').focus();
        });
        function submited(){
            $('#btnSubmit').removeClass('btn-primary');
            $('#btnSubmit').addClass('btn-warning');
            $('#btnSubmit').html("<i class='fa fa-spinner fa-spin'></i> Sedang proses ...");
            return true;
        }
    </script>
</body>
</html>
