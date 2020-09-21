        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/jquery/js/jquery.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/jquery-ui/js/jquery-ui.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/popper.js/js/popper.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/bootstrap/js/bootstrap.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/assets/pages/waves/js/waves.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/modernizr/js/modernizr.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/modernizr/js/css-scrollbars.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/assets/pages/prism/custom-prism.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/i18next/js/i18next.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/jquery-i18next/js/jquery-i18next.min.js')); ?>"></script>
        <?php echo $__env->yieldPushContent('footer'); ?>
        <script type="text/javascript" src="<?php echo e(asset('files/assets/js/pcoded.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/assets/js/vertical/menu/menu-hori-fixed.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/assets/js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/assets/js/script.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/pnotify/js/pnotify.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/pnotify/js/pnotify.desktop.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/pnotify/js/pnotify.buttons.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/pnotify/js/pnotify.confirm.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/pnotify/js/pnotify.callbacks.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/pnotify/js/pnotify.animate.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/pnotify/js/pnotify.history.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/pnotify/js/pnotify.mobile.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/pnotify/js/pnotify.nonblock.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/assets/pages/pnotify/notify.js')); ?>"></script>        
        <script type="text/javascript" src="<?php echo e(asset('files/assets/js/app.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/assets/js/jquery.validate.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/assets/js/jquery.dataTables.min.js')); ?>"></script>
        
        <script>
            var msg = '<?php echo e(Session::get('alert')); ?>';
            var exist = '<?php echo e(Session::has('alert')); ?>';
            if(exist){
                munculinAlert('error','Oops...',msg)
            }
            //cekPesan();
            function getUrlVars() {
                var vars = {};
                var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
                    vars[key] = value;
                });
                return vars;
            }
            function munculinAlert(tipe,judul,pesan)
            {
                Swal.fire({
                    type: tipe,
                    title: judul,
                    text: pesan
                })
            }

            $( document ).ready(function() {
                $('#simpan_password').on('click',function(event){
                    var formData = new FormData($("#ganti_password")[0]);
                    $.ajax({
                        url:"<?php echo e(route('ganti.password')); ?>",
                        type: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                                respon('success','Berhasil','Ganti Password Berhasil.');
                                $('#ganti_password').trigger("reset");
                                window.location.reload();
                        },
                            error: function(data){
                                respon('error','Gagal','Ganti Password Gagal.');
                                $('#ganti_password').trigger("reset");
                        }
                    });
                });

                $('#simpan_pp').on('click',function(event){
                    var formData = new FormData($("#ganti_pp")[0]);
                    $.ajax({
                        url:"<?php echo e(route('ganti.pp')); ?>",
                        type: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            respon('success','Berhasil','Photo Profile berhasil disimpan');
                            $('#ganti_pp').trigger("reset");
                            $('#uploaded_image').html(data.uploaded_image);
                            window.location.reload();
                        },
                            error: function(data){
                                respon('error','Gagal','Ganti Photo Profile Gagal.');
                                $('#ganti_pp').trigger("reset");
                        }
                    });
                });
            });
        </script>
        <?php echo $__env->yieldContent('footer'); ?>