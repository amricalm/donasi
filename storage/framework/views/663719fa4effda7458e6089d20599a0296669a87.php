<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h6 class="mb-0"><?php echo e($judul); ?></h6>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('kespro.create.step.one.post')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group mb-4">
                <label for="Rokok">Apakah anda pernah merokok? </label>
                <?php echo Form::select('Rokok', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->Rokok ?? '', ['class' => 'form-control', 'id' => 'Rokok']);; ?>

            </div>
            <div id="rokokdtl">
                <div class="form-group mb-4">
                    <label>Sudah berapa lama anda merokok?</label>
                    <div class="input-group">
                        <input type="number" id="LamaRokok" name="LamaRokok" class="form-control dtl" value="<?php echo e($data->LamaRokok ?? ''); ?>" autocomplete="off">
                        <div class="input-group-append">
                            <span class="input-group-text">Tahun</span>
                        </div>
                    </div>
                    <div class="form-text invalid-feedback">Please enter correct password</div>
                </div>
                <div class="form-group mb-4">
                    <label>Berapa banyak rokok yang anda habiskan setiap hari (rata-rata)?</label>
                    <div class="input-group">
                        <input type="number" id="BanyakRokok" name="BanyakRokok" class="form-control dtl" value="<?php echo e($data->BanyakRokok ?? ''); ?>" autocomplete="off">
                        <div class="input-group-append">
                            <span class="input-group-text">Batang</span>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label>Dimana biasanya anda merokok?</label>
                    <?php echo Form::select('TempatRokok', ['' => '', 'Di rumah' => 'Di rumah', 'Di tempat kerja' => 'Di tempat kerja', 'Lainnya' => 'Lainnya'], $data->TempatRokok ?? '', ['class' => 'form-control dtl', 'id' => 'TempatRokok']);; ?>

                </div>
                <div class="form-group mb-4 dtl2">
                    <label for="TempatRokokLain">Sebutkan</label>
                    <input type="text" id="TempatRokokLain" name="TempatRokokLain" class="form-control" value="<?php echo e($data->TempatRokok ?? ''); ?>" autocomplete="off">
                </div>
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="submit" class="btn btn-default rounded">Selanjutnya</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script>
    $(document).ready(function() {
        //Menampilkan detail pertanyaan jika merokok
        if ($('#Rokok option').filter(':selected').text() === "Ya") {
            $("#rokokdtl").show();
            $('.dtl').prop('required', true);
        } else {
            $("#rokokdtl").hide();
            $(".dtl").val("");
        }
        $("#Rokok").change(function() {
            if ($(this).val() == "Ya") {
                $("#rokokdtl").show();
                $('.dtl').prop('required', true);
            } else {
                $("#rokokdtl").hide();
                $('.dtl').prop('required', false);
                $(".dtl").val("");
            }
        });

        //Pilih salah satu opsi jika value tidak sama dengan opsi
        var isi = "<?php echo e(!empty($data->TempatRokok) ? $data->TempatRokok : ''); ?>";
        switch (isi) {
            case "":
                opt = "";
                break;
            case "Di rumah":
                opt = "Di rumah";
                break;
            case "Di tempat kerja":
                opt = "Di tempat kerja";
                break;
            default:
                opt = "Lainnya";
        }
        if (opt === "Lainnya") {
            $('#TempatRokok option[value=Lainnya]').attr('selected', 'selected');
        } else {
            $('#TempatRokok option[value=opt]').attr('selected', 'selected');
        }

        //Menampilkan detail pertanyaan jika tempat merokok lainnya
        if ($('#TempatRokok option').filter(':selected').text() === "Lainnya") {
            $(".dtl2").show();
            $('#TempatRokokLain').prop('required', true);
            $('#TempatRokokLain').attr('name', 'TempatRokok');
            $('#TempatRokok').prop('required', false);
        } else {
            $(".dtl2").hide();
            $('#TempatRokokLain').attr('name', '');
            $("#TempatRokokLain").val("");
        }
        $("#TempatRokok").change(function() {
            if ($(this).val() == "Lainnya") {
                $(".dtl2").show();
                $('#TempatRokokLain').prop('required', true);
                $('#TempatRokokLain').attr('name', 'TempatRokok');
                $('#TempatRokok').prop('required', false);
                $('#TempatRokok').attr('name', '');
            } else {
                $(".dtl2").hide();
                $('#TempatRokokLain').prop('required', false);
                $('#TempatRokokLain').attr('name', '');
                $("#TempatRokokLain").val("");
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.mobile.pageslayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>