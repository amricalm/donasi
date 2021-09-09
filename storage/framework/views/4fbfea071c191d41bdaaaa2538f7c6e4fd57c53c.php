<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h6 class="mb-0"><?php echo e($judul); ?></h6>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('kespro.create.step.four.post')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group mb-4">
                <label>Pada saat nifas (Dalam masa 40 Hari setelah melahirkan) apakah anda mendapatkan pelayanan kesehatan dari tenaga kesehatan</label>
                <?php echo Form::select('YankesNifas', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->YankesNifas ?? '', ['class' => 'form-control', 'id' => 'YankesNifas']);; ?>

            </div>
            <div id="nifasdtl">
                <div class="form-group mb-4">
                    <label>Dari mana anda memperoleh pelayanan tersebut?</label>
                    <?php echo Form::select('YankesNifasDari', ['' => '', 'Klinik Perusahaan' => 'Klinik Perusahaan', 'Puskesmas' => 'Puskesmas','Rumah Sakit' => 'Rumah Sakit', 'Lainnya' => 'Lainnya'], $data->YankesNifasDari ?? '', ['class' => 'form-control dtl', 'id' => 'YankesNifasDari']);; ?>

                </div>
                <div class="form-group mb-4 dtl2">
                    <label for="YankesNifasDariLain">Sebutkan</label>
                    <input type="text" id="YankesNifasDariLain" name="YankesNifasDariLain" class="form-control" value="<?php echo e($data->YankesNifasDari ?? ''); ?>" autocomplete="off">
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Berapa kali anda mendapatkan pelayanan kesehatan setelah melahirkan?</label>
                <div class="input-group">
                    <input type="number" id="JumlahYankes" name="JumlahYankes" class="form-control" value="<?php echo e($data->JumlahYankes ?? ''); ?>" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">kali</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Apakah saat nifas anda pernah diberikan perkerjaan yang mengharuskan anda untuk masuk kantor</label>
                <?php echo Form::select('BebanKerjaNifas', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->BebanKerjaNifas ?? '', ['class' => 'form-control', 'required']);; ?>

            </div>
            <div class="form-group mb-4">
                <label>Apakah anda menggunakan fasilitas pelayanan KB</label>
                <?php echo Form::select('Kb', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->Kb ?? '', ['class' => 'form-control', 'id' => 'Kb', 'required']);; ?>

            </div>
            <div id="kbdtl">
                <div class="form-group mb-4">
                    <label>Jenis KB yang digunakan:</label>
                    <?php echo Form::select('JenisKb', ['' => '', 'Suntik' => 'Suntik', 'Pil' => 'Pil', 'IUD' => 'IUD', 'Implant' => 'Implant', 'Tubektomi' => 'Tubektomi'], $data->JenisKb ?? '', ['class' => 'form-control dtl3']);; ?>

                </div>
                <div class="form-group mb-4">
                    <label>Dimana anda mendapatkan fasilitas pelayanan KB</label>
                    <input type="text" id="YankesKb" name="YankesKb" class="form-control dtl3" value="<?php echo e($data->YankesKb ?? ''); ?>" autocomplete="off">
                </div>
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="button" onclick="window.location='<?php echo e(route("kespro.create.step.three")); ?>'" class="btn btn-danger rounded">Kembali</button>
                <button type="submit" class="btn btn-default rounded">Selesai</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script>
    $(document).ready(function() {
        //Menampilkan detail pertanyaan mendapatkan pelayanan kesehatan pada saat nifas
        if ($('#YankesNifas option').filter(':selected').text() === "Ya") {
            $("#nifasdtl").show();
            $(".dtl").prop('required', true);
        } else {
            $("#nifasdtl").hide();
            $(".dtl").val("");
        }
        $("#YankesNifas").change(function() {
            if ($(this).val() == "Ya") {
                $("#nifasdtl").show();
                $(".dtl").prop('required', true);
            } else {
                $("#nifasdtl").hide();
                $(".dtl").prop('required', false);
                $(".dtl").val("");
            }
        });

        //Pilih salah satu opsi jika value tidak sama dengan opsi
        var isi = "<?php echo e(!empty($data->YankesNifasDari) ? $data->YankesNifasDari : ''); ?>";
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
            $('#YankesNifasDari option[value=Lainnya]').attr('selected', 'selected');
        } else {
            $('#YankesNifasDari option[value=opt]').attr('selected', 'selected');
        }

        //Menampilkan detail pertanyaan jika layanan kesehatan lainnya
        if ($('#YankesNifasDari option').filter(':selected').text() === "Lainnya") {
            $(".dtl2").show();
            $('#YankesNifasDariLain').prop('required', true);
            $('#YankesNifasDariLain').attr('name', 'YankesNifasDari');
            $('#YankesNifasDari').prop('required', false);
        } else {
            $(".dtl2").hide();
            $("#YankesNifasDariLain").val("");
        }
        $("#YankesNifasDari").change(function() {
            if ($(this).val() == "Lainnya") {
                $(".dtl2").show();
                $('#YankesNifasDariLain').prop('required', true);
                $('#YankesNifasDariLain').attr('name', 'YankesNifasDari');
                $('#YankesNifasDari').prop('required', false);
                $('#YankesNifasDari').attr('name', '');
            } else {
                $(".dtl2").hide();
                $('#YankesNifasDariLain').prop('required', false);
                $('#YankesNifasDariLain').attr('name', '');
                $("#YankesNifasDariLain").val("");
            }
        });

        //Menampilkan detail pertanyaan jika kb
        if ($('#Kb option').filter(':selected').text() === "Ya") {
            $("#kbdtl").show();
            $(".dtl3").prop('required', true);
        } else {
            $("#kbdtl").hide();
            $(".dtl3").val("");
        }
        $("#Kb").change(function() {
            if ($(this).val() == "Ya") {
                $("#kbdtl").show();
                $(".dtl3").prop('required', true);
            } else {
                $("#kbdtl").hide();
                $(".dtl3").prop('required', false);
                $(".dtl3").val("");
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.mobile.pageslayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>