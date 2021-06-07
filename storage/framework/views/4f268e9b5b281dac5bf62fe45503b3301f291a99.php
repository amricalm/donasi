        <script type="text/javascript" src="<?php echo e(asset('js/landing/vendor/modernizr-3.5.0.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/vendor/jquery-1.12.4.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/popper.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/bootstrap.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/owl.carousel.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/isotope.pkgd.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/ajax-form.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/waypoints.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/jquery.counterup.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/imagesloaded.pkgd.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/scrollIt.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/jquery.scrollUp.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/wow.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/nice-select.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/jquery.slicknav.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/jquery.magnific-popup.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/plugins.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/gijgo.min.js')); ?>"></script>
        <!--contact js-->
        <script type="text/javascript" src="<?php echo e(asset('js/landing/contact.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/jquery.ajaxchimp.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/jquery.form.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/jquery.validate.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/mail-script.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/main.js')); ?>"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/landing/slick.min.js')); ?>"></script>
        <?php echo $__env->yieldPushContent('footer'); ?>
        <script>
            $(document).ready(function(){
                $('.center').slick({
                    dots: true,
                    centerMode: true,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    centerPadding: '240px',
                    focusOnSelect: true,
                    pauseOnHover:true,
                    pauseOnFocus: true,
                    responsive: [
                        {
                        breakpoint: 1024,
                        settings: {
                            dots: true,
                            centerMode: true,
                            infinite: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            autoplay: true,
                            autoplaySpeed: 5000,
                            centerPadding: '0px',
                            focusOnSelect: true,
                            pauseOnHover:true,
                            pauseOnFocus: true,
                            prevArrow: false,
                            nextArrow: false
                        }
                        },
                        {
                        breakpoint: 600,
                        settings: {
                            dots: true,
                            centerMode: true,
                            infinite: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            autoplay: true,
                            autoplaySpeed: 5000,
                            centerPadding: '0px',
                            focusOnSelect: true,
                            pauseOnHover:true,
                            pauseOnFocus: true,
                            prevArrow: false,
                            nextArrow: false,
                        }
                        },
                        {
                        breakpoint: 480,
                        settings: {
                            dots: true,
                            centerMode: true,
                            infinite: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            autoplay: true,
                            autoplaySpeed: 5000,
                            centerPadding: '0px',
                            focusOnSelect: true,
                            pauseOnHover:true,
                            pauseOnFocus: true,
                            prevArrow: false,
                            nextArrow: false,
                        }
                        }
                    ]
                });
            });
        </script>
        <?php echo $__env->yieldContent('footer'); ?>