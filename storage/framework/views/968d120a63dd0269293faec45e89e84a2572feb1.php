<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header">
        <h6 class="mb-0"><?php echo e($judul); ?></h6>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('individualtask.create.step.five.post')); ?>" method="POST">
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
                <label>Pemambahan BB selama hamil</label>
                <div class="input-group">
                    <input type="number" id="BeratHamil" name="BeratHamil" class="form-control" value="<?php echo e($data->BeratHamil ?? ''); ?>">
                    <div class="input-group-append">
                        <span class="input-group-text">Kg</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Saat hamil <b><i>(Baduta)</i></b>, apakah memeriksakan kehamilan?</label>
                <?php echo Form::select('PeriksaHamil', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->PeriksaHamil ?? '', ['class' => 'form-control']);; ?>

            </div>
            <div class="form-group mb-4">
                <label><b><i>Jika ya</i></b>, dari mana anda memperoleh pelayanan tersebut?</label>
                <?php echo Form::select('TempatPeriksa', ['' => '', 'Klinik Perusahaan' => 'Klinik Perusahaan', 'Puskesmas' => 'Puskesmas', 'Rumah Sakit' => 'Rumah Sakit', 'Lainnya' => 'Lainnya'], $data->TempatPeriksa ?? '', ['class' => 'form-control']);; ?>

            </div>
            <div class="form-group mb-4">
                <label>Berapa kali anda memeriksakan kehamilan</label>
                <div class="input-group">
                    <input type="number" id="JumlahPeriksa" name="JumlahPeriksa" class="form-control" value="<?php echo e($data->JumlahPeriksa ?? ''); ?>">
                    <div class="input-group-append">
                        <span class="input-group-text">Kali</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Hambatan dalam memeriksakan kehamilan?</label>
                <textarea class="form-control" id="HambatanPeriksa" name="HambatanPeriksa" rows="2"><?php echo e($data->HambatanPeriksa ?? ''); ?></textarea>
            </div>
            <div class="form-group mb-4">
                <label>Apakah terdapat pengurangan beban kerja saat anda hamil?</label>
                <?php echo Form::select('BebanKerjaHamil', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->BebanKerjaHamil ?? '', ['class' => 'form-control']);; ?>

            </div>
            <div class="form-group mb-4">
                <label>Di usia kehamilan berapa bulan anda mengambil cuti?</label>
                <input type="text" id="CutiUsiaHamil" name="CutiUsiaHamil" class="form-control" value="<?php echo e($data->CutiUsiaHamil ?? ''); ?>">
            </div>
            <div class="form-group mb-4">
                <label>Berapa lama anda mendapatkan cuti hamil dan melahirkan?</label>
                <input type="text" id="LamaCutiHamil" name="LamaCutiHamil" class="form-control" value="<?php echo e($data->LamaCutiHamil ?? ''); ?>">
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="button" onclick="window.location='<?php echo e(route("individualtask.create.step.four")); ?>'" class="btn btn-danger rounded">Kembali</button>
                <button type="submit" class="btn btn-default rounded">Selanjutnya</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>