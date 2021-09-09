@extends('templates.mobile.pageslayout')

@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="mb-0">{{ $judul }}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('polamakan.create.step.four.post') }}" method="POST">
            @csrf
            <div class="form-group mb-4">
                <label>Apakah Anda terbiasa mencuci tangan dengan air mengalir dan sabun sebelum dan sesudah aktivitas berikut?</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">a. Makan</span>
                    </div>
                    {!! Form::select('CuciTanganMakan', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->CuciTanganMakan ?? '', ['class' => 'form-control', 'id' => 'CuciTanganMakan', 'required']); !!}
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">b. Menyiapkan makanan</span>
                    </div>
                    {!! Form::select('CuciTanganSiapMakan', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->CuciTanganSiapMakan ?? '', ['class' => 'form-control', 'id' => 'CuciTanganSiapMakan', 'required']); !!}
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">c. Buang air besar</span>
                    </div>
                    {!! Form::select('CuciTanganBab', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->CuciTanganBab ?? '', ['class' => 'form-control', 'id' => 'CuciTanganBab', 'required']); !!}
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">d. Buang air kecil</span>
                    </div>
                    {!! Form::select('CuciTanganBak', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->CuciTanganBak ?? '', ['class' => 'form-control', 'id' => 'CuciTanganBak', 'required']); !!}
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Mengganti popok bayi</span>
                    </div>
                    {!! Form::select('CuciTanganPopok', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->CuciTanganPopok ?? '', ['class' => 'form-control', 'id' => 'CuciTanganPopok', 'required']); !!}
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Apakah anda menimbang berat badan minimal sebulan sekali?</label>
                {!! Form::select('TimbangBeratBadan', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->TimbangBeratBadan ?? '', ['class' => 'form-control', 'id' => 'TimbangBeratBadan', 'required']); !!}
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="button" onclick="window.location='{{ route("polamakan.create.step.three") }}'" class="btn btn-danger rounded">Kembali</button>
                <button type="submit" class="btn btn-default rounded">Selesai</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('footer')
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
        var isi = "{{!empty($data->TempatRokok) ? $data->TempatRokok : ''}}";
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
@endsection