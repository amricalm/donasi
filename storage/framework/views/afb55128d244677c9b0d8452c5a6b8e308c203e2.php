        <!-- Required jquery and libraries -->
        <script src="<?php echo e(asset('vendor/finwallapp/js/jquery-3.3.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/finwallapp/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/finwallapp/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
        <!-- cookie js -->
        <script src="<?php echo e(asset('vendor/finwallapp/js/jquery.cookie.js')); ?>"></script>
        <!-- Swiper slider  js-->
        <script src="<?php echo e(asset('vendor/finwallapp/vendor/swiper/js/swiper.min.js')); ?>"></script>
        <!-- Customized jquery file  -->
        <script src="<?php echo e(asset('vendor/finwallapp/js/main.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/finwallapp/js/color-scheme-demo.js')); ?>"></script>
        <!-- page level custom script -->
        <script src="<?php echo e(asset('vendor/finwallapp/js/app.js')); ?>"></script>
        <?php echo $__env->yieldPushContent('footer'); ?>

        <?php echo $__env->yieldContent('footer'); ?>