<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header">
        <h6 class="mb-0"><?php echo e($judul); ?></h6>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('individualtask.create.step.six.post')); ?>" method="POST">
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
                <label>Pada saat nifas (Dalam masa 40 Hari setelah melahirkan) apakah anda mendapatkan pelayanan kesehatan dari tenaga kesehatan</label>
                <?php echo Form::select('YankesNifas', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->YankesNifas ?? '', ['class' => 'form-control']);; ?>

            </div>
            <div class="form-group mb-4">
                <label><b><i>Jika ya</i></b>, dari mana anda memperoleh pelayanan tersebut?</label>
                <?php echo Form::select('YankesNifasDari', ['' => '', 'Klinik Perusahaan' => 'Klinik Perusahaan', 'Puskesmas' => 'Puskesmas','Rumah Sakit' => 'Rumah Sakit', 'Lainnya' => 'Lainnya'], $data->YankesNifasDari ?? '', ['class' => 'form-control']);; ?>

            </div>
            <div class="form-group mb-4">
                <label>Berapa kali anda mendapatkan pelayanan kesehatan setelah melahirkan?</label>
                <div class="input-group">
                    <input type="number" id="JumlahYankes" name="JumlahYankes" class="form-control" value="<?php echo e($data->JumlahYankes ?? ''); ?>">
                    <div class="input-group-append">
                        <span class="input-group-text">kali</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Apakah saat nifas anda pernah diberikan perkerjaan yang mengharuskan anda untuk masuk kantor</label>
                <?php echo Form::select('BebanKerjaNifas', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->BebanKerjaNifas ?? '', ['class' => 'form-control']);; ?>

            </div>
            <div class="form-group mb-4">
                <label>Apakah anda menggunakan fasilitas pelayanan KB</label>
                <?php echo Form::select('Kb', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->Kb ?? '', ['class' => 'form-control']);; ?>

            </div>
            <div class="form-group mb-4">
                <label><b><i>Jika ya,</i></b> Jenis KB yang digunakan:</label>
                <?php echo Form::select('JenisKb', ['' => '', 'Suntik' => 'Suntik', 'Pil' => 'Pil', 'IUD' => 'IUD', 'Implant' => 'Implant', 'Tubektomi' => 'Tubektomi'], $data->JenisKb ?? '', ['class' => 'form-control']);; ?>

            </div>
            <div class="form-group mb-4">
                <label>Dimana anda mendapatkan fasilitas pelayanan KB</label>
                <input type="text" id="YankesKb" name="YankesKb" class="form-control" value="<?php echo e($data->YankesKb ?? ''); ?>">
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="button" onclick="window.location='<?php echo e(route("individualtask.create.step.five")); ?>'" class="btn btn-danger rounded">Kembali</button>
                <button type="submit" class="btn btn-default rounded">Selesai</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>