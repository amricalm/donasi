<?php $__env->startSection('body'); ?>
<div id="pcoded" class="pcoded">
    <div class="pcoded-container navbar-wrapper">
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <header id="header" class="bg-header">
                                        <nav class="flex items-center px-2 py-2 text-center">
                                            <a href="/" class="mx-auto">
                                                <img class="h-6" src="<?php echo e(url('img/logo-qoryah-quran.png')); ?>">
                                            </a>
                                        </nav>
                                    </header>
                                    <div class="j-wrapper j-wrapper-550" id="blokDonasi">
                                        <div class="mb-4 mx-auto">
                                            <div class="flex flex-wrap">
                                                <div class="w-full w-3/4 px-4 sm:px-0">
                                                    <p class="text-gray-600 text-sm">Anda akan berdonasi untuk program:</p>
                                                    <h3 class="text-black font-semibold truncate">Gotong Royong Bangun Pesantren Hafizh Al Quran</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="j-pro/php/action.php" method="post" class="j-pro" id="j-pro" novalidate>
                                            <div class="j-content">
                                                <div class="j-unit">
                                                    <h3 class="text-gray-800 font-bold mb-4">Nominal Donasi</h3>
                                                    <div class="j-input">
                                                        <a href="javascript:getPayment(0);" data-nominal="10000" class="flex items-center justify-between border-custom p-2 sm:p-3 mb-3 fix-nominal hover:bg-blue-100 rounded">
                                                            <div class="">
                                                                <span class="text-xs block text-gray-600">Minimal <em class="text-red-500">*</em></span>
                                                                <span class="text-black font-semibold text-lg">Rp 10.000</span>
                                                            </div>
                                                            <div>
                                                                <svg width="18" height="14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.5 14.25a.75.75 0 01-.578-1.23L10.282 9l-3.24-4.027a.75.75 0 01.113-1.058.75.75 0 011.095.113l3.623 4.5a.75.75 0 010 .952l-3.75 4.5a.75.75 0 01-.623.27z" fill="#000"></path>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="j-input">
                                                        <a href="javascript:getPayment(1);" data-nominal="50000" class="flex items-center justify-between border-custom p-2 sm:p-3 mb-3 fix-nominal hover:bg-blue-100 rounded">
                                                            <div class="">
                                                                <span class="text-black font-semibold text-lg">Rp 50.000</span>
                                                            </div>
                                                            <div>
                                                                <svg width="18" height="14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.5 14.25a.75.75 0 01-.578-1.23L10.282 9l-3.24-4.027a.75.75 0 01.113-1.058.75.75 0 011.095.113l3.623 4.5a.75.75 0 010 .952l-3.75 4.5a.75.75 0 01-.623.27z" fill="#000"></path>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="j-input">
                                                        <a href="javascript:getPayment(2);" data-nominal="100000" class="flex items-center justify-between border-custom p-2 sm:p-3 mb-3 fix-nominal hover:bg-blue-100 rounded">
                                                            <div class="">
                                                                <span class="text-xs block text-red-500">Sering dipilih</span>
                                                                <span class="text-black font-semibold text-lg">Rp 100.000</span>
                                                            </div>
                                                            <div>
                                                                <svg width="18" height="14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.5 14.25a.75.75 0 01-.578-1.23L10.282 9l-3.24-4.027a.75.75 0 01.113-1.058.75.75 0 011.095.113l3.623 4.5a.75.75 0 010 .952l-3.75 4.5a.75.75 0 01-.623.27z" fill="#000"></path>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="j-input">
                                                        <a href="javascript:getPayment(3);" data-nominal="250000" class="flex items-center justify-between border-custom p-2 sm:p-3 mb-3 fix-nominal hover:bg-blue-100 rounded">
                                                            <div class="">
                                                                <span class="text-black font-semibold text-lg">Rp 250.000</span>
                                                            </div>
                                                            <div>
                                                                <svg width="18" height="14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.5 14.25a.75.75 0 01-.578-1.23L10.282 9l-3.24-4.027a.75.75 0 01.113-1.058.75.75 0 011.095.113l3.623 4.5a.75.75 0 010 .952l-3.75 4.5a.75.75 0 01-.623.27z" fill="#000"></path>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <hr class="mb-6 mt-6">
                                                    <h3 class="text-gray-800 font-bold">Nominal Donasi Lainnya</h3>
                                                    <div class="form-group input-amount mt-2 flex items-center">
                                                        <span class="font-semibold text-lg text-black">Rp</span>
                                                        <input type="text" class="form-control bg-white text-right amount pl-10 h-57px text-black border-custom bg-gray-custom rounded" name="amount-first" id="amount-input" placeholder="0" data-mask="000.000.000.000.000" data-mask-reverse="true" autocomplete="off" maxlength="19" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end /.content -->
                                            <div class="j-footer">
                                                <button type="button" id="custom-submit" onclick="javascript:getPayment();" class="rounded btn-primary bg-blue-500 hover:bg-blue-600 py-3 px-2 sm:py-6 sm:px-4 text-white font-bold text-center border-b-4 border-blue-700 btn-block">Lanjutkan Donasi</button>
                                            </div>
                                            <!-- end /.footer -->
                                        </form>
                                        <div id="blokMetodeBayar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script>
    function getPayment(q){
        if(q !== undefined) {
            var getClassFix = document.getElementsByClassName('fix-nominal');
            var amount      = getClassFix[q].getAttribute('data-nominal');
        } else {
            var amount      = document.getElementById('amount-input').value;
        }
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:"<?php echo e(url('donate/payment-method')); ?>",
            data: {'amount':amount},
            type: 'POST',

            success: function(data){
                $('#blokDonasi').html(data);
            }, error: function(req, err){ console.log('my message' + err); }
        });
    }
    function Confirmation(q){
        var amount    = document.getElementById("amount").value;
        var getClass  = document.getElementsByClassName('select-type');

        var payType   = getClass[q].getAttribute('data-type');
        var payLabel  = getClass[q].getAttribute('data-label');
        var payImage  = getClass[q].getAttribute('data-image');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:"<?php echo e(url('donate/confirmation')); ?>",
            data: {'payType':payType,'payLabel':payLabel,'payImage':payImage,'amount':amount},
            type: 'POST',

            success: function(data){
                $('#blokDonasi').html(data);
            }, error: function(req, err){ console.log('my message' + err); }
        });
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>