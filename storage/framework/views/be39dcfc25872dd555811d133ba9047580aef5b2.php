<?php $__env->startComponent('templates.widgets'); ?>
    <?php $__env->slot('header'); ?>
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/icon/themify-icons/themify-icons.css')); ?>">
    <!-- light-box css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/bower_components/ekko-lightbox/css/ekko-lightbox.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/bower_components/lightbox2/css/lightbox.css')); ?>">
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/pages/advance-elements/css/bootstrap-datetimepicker.css')); ?>">
    <!-- Date-range picker css  -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/bower_components/bootstrap-daterangepicker/css/daterangepicker.css')); ?>" />
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/bower_components/datedropper/css/datedropper.min.css')); ?>" />
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/icon/themify-icons/themify-icons.css')); ?>">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/icon/icofont/css/icofont.css')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/icon/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/pages/social-timeline/timeline.css')); ?>">
    <?php $__env->endSlot(); ?>
    <?php $__env->slot('footer'); ?>
    <!-- SWEETALERT -->
    <script type="text/javascript" src="<?php echo e(asset('files/assets/pages/social-timeline/social.js')); ?>"></script>
    <!-- light-box js -->
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/ekko-lightbox/js/ekko-lightbox.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/lightbox2/js/lightbox.js')); ?>"></script>
    <!-- Bootstrap date-time-picker js -->
    <script type="text/javascript" src="<?php echo e(asset('files/assets/pages/advance-elements/moment-with-locales.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/assets/pages/advance-elements/bootstrap-datetimepicker.min.js')); ?>"></script>
    <!-- Date-range picker js -->
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/bootstrap-daterangepicker/js/daterangepicker.js')); ?>"></script>
    <!-- Date-dropper js -->
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/datedropper/js/datedropper.min.js')); ?>"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="vfiles/assets/pages/social-timeline/social.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

