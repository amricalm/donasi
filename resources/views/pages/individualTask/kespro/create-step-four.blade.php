@extends('templates.mobile.pageslayout')

@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="mb-0">{{ $judul }}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('kespro.create.step.four.post') }}" method="POST">
            @csrf
            <div class="form-group mb-4">
                <label>Pada saat nifas (Dalam masa 40 Hari setelah melahirkan) apakah anda mendapatkan pelayanan kesehatan dari tenaga kesehatan</label>
                {!! Form::select('YankesNifas', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->YankesNifas ?? '', ['class' => 'form-control', 'id' => 'YankesNifas']); !!}
            </div>
            <div id="nifasdtl">
                <div class="form-group mb-4">
                    <label>Dari mana anda memperoleh pelayanan tersebut?</label>
                    {!! Form::select('YankesNifasDari', ['' => '', 'Klinik Perusahaan' => 'Klinik Perusahaan', 'Puskesmas' => 'Puskesmas','Rumah Sakit' => 'Rumah Sakit', 'Lainnya' => 'Lainnya'], $data->YankesNifasDari ?? '', ['class' => 'form-control dtl', 'id' => 'YankesNifasDari']); !!}
                </div>
                <div class="form-group mb-4 dtl2">
                    <label for="YankesNifasDariLain">Sebutkan</label>
                    <input type="text" id="YankesNifasDariLain" name="YankesNifasDariLain" class="form-control" value="{{ $data->YankesNifasDari ?? '' }}" autocomplete="off">
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Berapa kali anda mendapatkan pelayanan kesehatan setelah melahirkan?</label>
                <div class="input-group">
                    <input type="number" id="JumlahYankes" name="JumlahYankes" class="form-control" value="{{ $data->JumlahYankes ?? '' }}" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">kali</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Apakah saat nifas anda pernah diberikan perkerjaan yang mengharuskan anda untuk masuk kantor</label>
                {!! Form::select('BebanKerjaNifas', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->BebanKerjaNifas ?? '', ['class' => 'form-control', 'required']); !!}
            </div>
            <div class="form-group mb-4">
                <label>Apakah anda menggunakan fasilitas pelayanan KB</label>
                {!! Form::select('Kb', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->Kb ?? '', ['class' => 'form-control', 'id' => 'Kb', 'required']); !!}
            </div>
            <div id="kbdtl">
                <div class="form-group mb-4">
                    <label>Jenis KB yang digunakan:</label>
                    {!! Form::select('JenisKb', ['' => '', 'Suntik' => 'Suntik', 'Pil' => 'Pil', 'IUD' => 'IUD', 'Implant' => 'Implant', 'Tubektomi' => 'Tubektomi'], $data->JenisKb ?? '', ['class' => 'form-control dtl3']); !!}
                </div>
                <div class="form-group mb-4">
                    <label>Dimana anda mendapatkan fasilitas pelayanan KB</label>
                    <input type="text" id="YankesKb" name="YankesKb" class="form-control dtl3" value="{{ $data->YankesKb ?? '' }}" autocomplete="off">
                </div>
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="button" onclick="window.location='{{ route("kespro.create.step.three") }}'" class="btn btn-danger rounded">Kembali</button>
                <button type="submit" class="btn btn-default rounded">Selesai</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('footer')
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
        var isi = "{{!empty($data->YankesNifasDari) ? $data->YankesNifasDari : ''}}";
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
@endsection