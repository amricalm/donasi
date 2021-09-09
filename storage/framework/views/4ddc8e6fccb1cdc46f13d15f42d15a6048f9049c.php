<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h6 class="mb-0"><?php echo e($judul); ?></h6>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('kespro.create.step.three.post')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group mb-4">
                <label>Pemambahan BB selama hamil</label>
                <div class="input-group">
                    <input type="number" id="BeratHamil" name="BeratHamil" class="form-control" value="<?php echo e($data->BeratHamil ?? ''); ?>" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">Kg</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Saat hamil <b><i>(Baduta)</i></b>, apakah memeriksakan kehamilan?</label>
                <?php echo Form::select('PeriksaHamil', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->PeriksaHamil ?? '', ['class' => 'form-control', 'id' => 'PeriksaHamil', 'required']);; ?>

            </div>
            <div id="periksadtl">
                <div class="form-group mb-4">
                    <label>Dari mana anda memperoleh pelayanan tersebut?</label>
                    <?php echo Form::select('TempatPeriksa', ['' => '', 'Klinik Perusahaan' => 'Klinik Perusahaan', 'Puskesmas' => 'Puskesmas', 'Rumah Sakit' => 'Rumah Sakit', 'Lainnya' => 'Lainnya'], $data->TempatPeriksa ?? '', ['class' => 'form-control dtl', 'id' => 'TempatPeriksa']);; ?>

                </div>
                <div class="form-group mb-4 dtl2">
                    <label for="TempatPeriksaLain">Sebutkan</label>
                    <input type="text" id="TempatPeriksaLain" name="TempatPeriksaLain" class="form-control" value="<?php echo e($data->TempatPeriksa ?? ''); ?>" autocomplete="off">
                </div>
                <div class="form-group mb-4">
                    <label>Berapa kali anda memeriksakan kehamilan</label>
                    <div class="input-group">
                        <input type="number" id="JumlahPeriksa" name="JumlahPeriksa" class="form-control dtl" value="<?php echo e($data->JumlahPeriksa ?? ''); ?>" autocomplete="off">
                        <div class="input-group-append">
                            <span class="input-group-text">Kali</span>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label>Hambatan dalam memeriksakan kehamilan?</label>
                    <textarea class="form-control dtl" id="HambatanPeriksa" name="HambatanPeriksa" rows="2"><?php echo e($data->HambatanPeriksa ?? ''); ?></textarea>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Apakah terdapat pengurangan beban kerja saat anda hamil?</label>
                <?php echo Form::select('BebanKerjaHamil', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->BebanKerjaHamil ?? '', ['class' => 'form-control']);; ?>

            </div>
            <div class="form-group mb-4">
                <label>Di usia kehamilan berapa bulan anda mengambil cuti?</label>
                <input type="text" id="CutiUsiaHamil" name="CutiUsiaHamil" class="form-control" value="<?php echo e($data->CutiUsiaHamil ?? ''); ?>" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Berapa lama anda mendapatkan cuti hamil dan melahirkan?</label>
                <input type="text" id="LamaCutiHamil" name="LamaCutiHamil" class="form-control" value="<?php echo e($data->LamaCutiHamil ?? ''); ?>" autocomplete="off">
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="button" onclick="window.location='<?php echo e(route("kespro.create.step.two")); ?>'" class="btn btn-danger rounded">Kembali</button>
                <button type="submit" class="btn btn-default rounded">Selanjutnya</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script>
    $(document).ready(function() {
        //Menampilkan detail pertanyaan jika periksa kehamilan
        if ($('#PeriksaHamil option').filter(':selected').text() === "Ya") {
            $("#periksadtl").show();
            $(".dtl").prop('required', true);
        } else {
            $("#periksadtl").hide();
            $(".dtl").val("");
        }
        $("#PeriksaHamil").change(function() {
            if ($(this).val() == "Ya") {
                $("#periksadtl").show();
                $(".dtl").prop('required', true);
            } else {
                $("#periksadtl").hide();
                $(".dtl").prop('required', false);
                $(".dtl").val("");
            }
        });

        //Pilih salah satu opsi jika value tidak sama dengan opsi
        var isi = "<?php echo e(!empty($data->TempatPeriksa) ? $data->TempatPeriksa : ''); ?>";
        switch (isi) {
            case "":
                opt = "";
                break;
            case "Klinik Perusahaan":
                opt = "Klinik Perusahaan";
                break;
            case "Puskesmas":
                opt = "Puskesmas";
                break;
            case "Rumah Sakit":
                opt = "Rumah Sakit";
                break;
            default:
                opt = "Lainnya";
        }
        if (opt === "Lainnya") {
            $('#TempatPeriksa option[value=Lainnya]').attr('selected', 'selected');
        } else {
            $('#TempatPeriksa option[value=opt]').attr('selected', 'selected');
        }

        //Menampilkan detail pertanyaan jika layanan kesehatan lainnya
        if ($('#TempatPeriksa option').filter(':selected').text() === "Lainnya") {
            $(".dtl2").show();
            $('#TempatPeriksaLain').prop('required', true);
            $('#TempatPeriksaLain').attr('name', 'TempatPeriksa');
            $('#TempatPeriksa').prop('required', false);
        } else {
            $(".dtl2").hide();
            $('#TempatPeriksaLain').attr('name', '');
            $("#TempatPeriksaLain").val("");
        }
        $("#TempatPeriksa").change(function() {
            if ($(this).val() == "Lainnya") {
                $(".dtl2").show();
                $('#TempatPeriksaLain').prop('required', true);
                $('#TempatPeriksaLain').attr('name', 'TempatPeriksa');
                $('#TempatPeriksa').prop('required', false);
                $('#TempatPeriksa').attr('name', '');
            } else {
                $(".dtl2").hide();
                $('#TempatPeriksaLain').prop('required', false);
                $('#TempatPeriksaLain').attr('name', '');
                $("#TempatPeriksaLain").val("");
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.mobile.pageslayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>