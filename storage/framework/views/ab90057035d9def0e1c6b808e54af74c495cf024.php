<?php $__env->startSection('content'); ?>
<div class="card">
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
            <div class="form-group mb-4">
                <label>Nama :</label>
                <input type="text" id="NamaLengkap" name="NamaLengkap" class="form-control" value="<?php echo e(session('UserEmployeeName') ?? ''); ?>" autocomplete="off" readonly>
            </div>
            <div class="form-group mb-4">
                <label>Tanggal, bulan, tahun lahir :</label>
                <input type="date" id="TglLahir" name="TglLahir" class="form-control" value="<?php echo e($data->TglLahir ?? ''); ?>" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Unit/Sub unit kerja :</label>
                <input type="text" id="UnitKerja" name="UnitKerja" class="form-control" value="<?php echo e($data->UnitKerja ?? ''); ?>" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Tahun mulai kerja di perusahaan :</label>
                <input type="number" id="TglMasuk" name="TglMasuk" class="form-control" value="<?php echo e($data->TglMasuk ?? ''); ?>" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Tahun mulai kerja di sub unit :</label>
                <input type="number" id="TglMasukUnit" name="TglMasukUnit" class="form-control" value="<?php echo e($data->TglMasukUnit ?? ''); ?>" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Mengalami shift kerja :</label>
                <?php echo Form::select('Shift', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->Shift ?? '', ['class' => 'form-control']);; ?>

            </div>
            <div class="form-group mb-4">
                <label>Tanggal pengumpulan data :</label>
                <input type="date" id="TglInput" name="TglInput" class="form-control" value="<?php echo e($tesdata->TglInput ?? ''); ?>" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Nama/No hp petugas :</label>
                <input type="text" id="Petugas" name="Petugas" class="form-control" value="<?php echo e($tesdata->Petugas ?? ''); ?>" autocomplete="off">
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="submit" class="btn btn-default rounded">Selanjutnya</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.mobile.pageslayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>