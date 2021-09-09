<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h6 class="mb-0"><?php echo e($judul); ?></h6>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('stress.create.post')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group mb-4">
                <label>Kondisi di tempat kerja tidak menyenangkan atau kadang-kadang bahkan tidak aman</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text border-0 bg-none">
                            <input type="radio" aria-label="Radio button for following text input">
                        </div>
                    </div>
                    <input type="text" class="form-control border-0 bg-none" aria-label="Text input with radio button" value="TIDAK PERNAH" readonly>
                </div>
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="submit" class="btn btn-default rounded">Selesai</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.mobile.pageslayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>