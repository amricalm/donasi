<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header">
        <h6 class="mb-0"><?php echo e($judul); ?></h6>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('individualtask.create.step.one.post')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>
            <div class="form-group">
                <label>Nama :</label>
                <input type="text" id="NamaLengkap" name="NamaLengkap" class="form-control" value="<?php echo e($data->NamaLengkap ?? ''); ?>">
            </div>
            <div class="form-group">
                <label>Tanggal, bulan, tahun lahir :</label>
                <input type="date" id="TglLahir" name="TglLahir" class="form-control" value="<?php echo e($data->TglLahir ?? ''); ?>">
            </div>
            <div class="form-group">
                <label>Unit/Sub unit kerja :</label>
                <input type="text" id="UnitKerja" name="UnitKerja" class="form-control" value="<?php echo e($data->UnitKerja ?? ''); ?>">
            </div>
            <div class="form-group">
                <label>Tahun mulai kerja di perusahaan :</label>
                <input type="text" id="TglMasuk" name="TglMasuk" class="form-control" value="<?php echo e($data->TglMasuk ?? ''); ?>">
            </div>
            <div class="form-group">
                <label>Tahun mulai kerja di sub unit :</label>
                <input type="text" id="TglMasukUnit" name="TglMasukUnit" class="form-control" value="<?php echo e($data->TglMasukUnit ?? ''); ?>">
            </div>
            <div class="form-group">
                <label>Mengalami shift kerja :</label>
                <input type="text" id="Shift" name="Shift" class="form-control" value="<?php echo e($data->Shift ?? ''); ?>">
            </div>
            <div class="form-group">
                <label>Tanggal pengumpulan data :</label>
                <input type="date" id="TglInput" name="TglInput" class="form-control" value="<?php echo e($data->TglInput ?? ''); ?>">
            </div>
            <div class="form-group">
                <label>Nama/No hp petugas :</label>
                <input type="text" id="" name="" class="form-control" value="<?php echo e($data->name ?? ''); ?>">
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="submit" class="btn btn-default rounded">Next</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>