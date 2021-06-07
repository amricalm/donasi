<div id="PaymentArea" class="px-4" style="">
    <div class="mb-6">
        <div class="flex flex-wrap">
            <div class="flex items-center flex-shrink-0 text-white md:mr-6">
                <a href="<?php echo e(url()->previous()); ?>">
                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 11H7.14l3.63-4.36a1.001 1.001 0 00-1.54-1.28l-5 6a1.191 1.191 0 00-.09.15c0 .05 0 .08-.07.13A1 1 0 004 12a1 1 0 00.07.36c0 .05 0 .08.07.13.026.051.056.102.09.15l5 6A1 1 0 0010 19a1 1 0 00.77-1.64L7.14 13H19a1 1 0 000-2z" fill="#000"></path>
                    </svg>
                </a>
            </div>
            <div class="text-black text-sm ml-2">Pilih Metode Pembayaran</div>
        </div>
    </div>
    <h3 class="text-xs text-black mb-4">Transfer Bank (Transaksi diverifikasi manual 1x24jam)</h3>
    <div class="card mb-6 card-payment p-0">
        <input type="hidden" name="program" id="program" value="<?php echo e($program); ?>"/>
        <input type="hidden" name="amount" id="amount" value="<?php echo e($amount); ?>"/>
        <input type="hidden" name="ref" id="ref" value="<?php echo e($ref); ?>"/>
        <?php $__currentLoopData = $bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="javascript:Confirmation(<?php echo e($row->ID); ?>);" class="p-3 pb-0 block hover:bg-blue-100 select-type" data-type="<?php echo e($row->Type); ?>" data-label="<?php echo e($row->Label); ?>" data-image="<?php echo e(url('img/payments/'.$row->Image)); ?>">
            <div class="flex border-b-custom pb-2 items-center justify-between">
                <div class="flex">
                    <div class="mr-4">
                        <img src="<?php echo e(url('img/payments/'.$row->Image)); ?>" class="img-flag inline w-16 order border-gray-300 p-1">
                    </div>
                    <h3 class="text-sm text-black"><?php echo e($row->Label); ?></h3>
                </div>
                <svg class="icon-check hidden transfer-bca" width="19" height="19" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.806 14.25a.794.794 0 01-.578-.254L3.38 9.903A.793.793 0 014.536 8.82l3.262 3.475 6.658-7.283a.79.79 0 111.171 1.06l-7.235 7.917a.791.791 0 01-.578.262h-.008z" fill="#0084FF" stroke="#0084FF"></path></svg>
            </div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>