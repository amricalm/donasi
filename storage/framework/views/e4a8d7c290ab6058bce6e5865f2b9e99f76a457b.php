        <title>Qoryah Qur'an <?php echo e((!empty($judul) ? ' - '.$judul : '')); ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="<?php echo e((!empty($description) ? $description : 'Qoryah Quran')); ?>" />
        <meta name="keywords" content="Qoryah Qur'an">
        <meta name="author" content="Qoryah Qur'an" />
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="icon" href="<?php echo e(asset('img/favicon.ico')); ?>" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/bower_components/bootstrap/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/pages/waves/css/waves.min.css')); ?>" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/icon/themify-icons/themify-icons.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/icon/icofont/css/icofont.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/icon/font-awesome/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/pages/prism/prism.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/css/style.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/pages/j-pro/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/pages/j-pro/css/j-pro-modern.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/css/pages.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/adn.css')); ?>">
        <?php echo $__env->yieldPushContent('header'); ?>
