@extends('templates.mobile.pageslayout')

@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="mb-0">{{ $judul }}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('individualtask.create.step.four.post') }}" method="POST">
            @csrf
            <div class="form-group mb-4">
                <label>Apakah terdapat pengurangan beban kerja di perusahaan saat masa haid?</label>
                {!! Form::select('BebanKerjaHaid', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->BebanKerjaHaid ?? '', ['class' => 'form-control', 'required']); !!}
            </div>
            <div class="form-group mb-4">
                <label>Apakah anda diberikan kesempatan untuk megambil cuti saat haid?</label>
                {!! Form::select('CutiHaid', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->CutiHaid ?? '', ['class' => 'form-control', 'required']); !!}
            </div>
            <div class="form-group mb-4">
                <label>Berapa jumlah anak anda saat ini? <b><i>(yang pernah dilahirkan)</i></b></label>
                <div class="input-group">
                    <input type="number" id="JumlahAnak" name="JumlahAnak" class="form-control" value="{{ $data->JumlahAnak ?? '' }}" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">Orang</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Apakah saat ini anda memiliki anak usia di bawah dua tahun (baduta)?</label>
                {!! Form::select('Baduta', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->Baduta ?? '', ['class' => 'form-control', 'id' => 'Baduta', 'required']); !!}
            </div>
            <div id="badutadtl">
                <div class="form-group mb-4">
                    <label>Berapa usia Baduta saat ini?</label>
                    <div class="input-group">
                        <input type="text" id="UsiaBaduta" name="UsiaBaduta" class="form-control dtl" value="{{ $data->UsiaBaduta ?? '' }}" autocomplete="off">
                        <div class="input-group-append">
                            <span class="input-group-text">Tahun</span>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label>Apakah Baduta diberi ASI?</label>
                    {!! Form::select('AsiBaduta', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->AsiBaduta ?? '', ['class' => 'form-control dtl', 'id' => 'AsiBaduta']); !!}
                </div>
                <div id="asidtl">
                    <div class="form-group mb-4">
                        <label>Berapa lama balita mendapatkan ASI?</label>
                        <input type="text" id="LamaAsiBaduta" name="LamaAsiBaduta" class="form-control dtl2" value="{{ $data->LamaAsiBaduta ?? '' }}" autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <label>Apakah anda memerah ASI?</label>
                        {!! Form::select('MemerahAsi', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->MemerahAsi ?? '', ['class' => 'form-control dtl2', 'id' => 'MemerahAsi']); !!}
                    </div>
                    <div id="asiperahdtl">
                        <div class="form-group mb-4">
                            <label>Dimana anda memerah ASI</label>
                            <input type="text" id="TempatMemerahAsi" name="TempatMemerahAsi" class="form-control dtl3" value="{{ $data->TempatMemerahAsi ?? '' }}" autocomplete="off">
                        </div>
                        <div class="form-group mb-4">
                            <label>Apakah anda diberikan waktu/izin untuk memerah ASI?</label>
                            {!! Form::select('IzinMemerahAsi', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->IzinMemerahAsi ?? '', ['class' => 'form-control dtl3']); !!}
                        </div>
                        <div class="form-group mb-4">
                            <label>Hambatan dalam memerah ASI</label>
                            <input type="text" id="HambatanMemerahAsi" name="HambatanMemerahAsi" class="form-control dtl3" value="{{ $data->HambatanMemerahAsi ?? '' }}" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label>Apakah bayi mendapatkan ASI saja sebelum usia 6 bulan dan tidak diberikan makanan tambahan, susu formula ataupun air putih</label>
                    {!! Form::select('AsiEkslusif', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->AsiEkslusif ?? '', ['class' => 'form-control dtl', 'id' => 'AsiEkslusif']); !!}
                </div>
                <div id="asieksdtl">
                    <div class="form-group mb-4">
                        <label>Sejak Usia berapa pertama kali bayi diberikan susu formula?</label>
                        <input type="text" id="UsiaDiberiSusu" name="UsiaDiberiSusu" class="form-control dtl4" value="{{ $data->UsiaDiberiSusu ?? '' }}" autocomplete="off">
                    </div>
                    <div class="form-group mb-4">
                        <label>Alasan memberikan tambahan susu formula</label>
                        <textarea class="form-control dtl4" id="AlasanDiberiSusu" name="AlasanDiberiSusu" rows="2">{{ $data->AlasanDiberiSusu ?? '' }}</textarea>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label>Hambatan dalam memberikan ASI</label>
                    <textarea class="form-control dtl" id="HambatanAsi" name="HambatanAsi" rows="2">{{ $data->HambatanAsi ?? '' }}</textarea>
                </div>
                <div class="form-group mb-4">
                    <label>Diusia berapa balita mendapatkan M-PASI?</label>
                    {!! Form::select('UsiaMpAsi', ['' => '', '< 6 Bulan'=> '< 6 Bulan', '> 6 bulan'=> '> 6 bulan'], $data->UsiaMpAsi ?? '', ['class' => 'form-control dtl']); !!}
                </div>
                <div class="form-group mb-4">
                    <label>Jenis M-PASI Pertama :</label>
                    <textarea class="form-control dtl" id="JenisMpAsi" name="JenisMpAsi" rows="2">{{ $data->JenisMpAsi ?? '' }}</textarea>
                </div>
                <div class="form-group mb-4">
                    <label>Hambatan dalam memberikan M-PASI :</label>
                    <textarea class="form-control dtl" id="HambatanMpAsi" name="HambatanMpAsi" rows="2">{{ $data->HambatanMpAsi ?? '' }}</textarea>
                </div>
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="button" onclick="window.location='{{ route("individualtask.create.step.three") }}'" class="btn btn-danger rounded">Kembali</button>
                <button type="submit" class="btn btn-default rounded">Selanjutnya</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('footer')
<script>
    $(document).ready(function() {
        //Menampilkan detail pertanyaan jika memiliki baduta
        if ($('#Baduta option').filter(':selected').text() === "Ya") {
            $("#badutadtl").show();
            $(".dtl").prop('required', true);
        } else {
            $("#badutadtl").hide();
            $(".dtl").val("");
        }
        $("#Baduta").change(function() {
            if ($(this).val() == "Ya") {
                $("#badutadtl").show();
                $(".dtl").prop('required', true);
            } else {
                $("#badutadtl").hide();
                $(".dtl").prop('required', false);
                $(".dtl").val("");
            }
        });

        //Menampilkan detail pertanyaan lamanya memberi asi
        if ($('#AsiBaduta option').filter(':selected').text() === "Ya") {
            $("#asidtl").show();
            $(".dtl2").prop('required', true);
        } else {
            $("#asidtl").hide();
            $(".dtl2").val("");
        }
        $("#AsiBaduta").change(function() {
            if ($(this).val() == "Ya") {
                $("#asidtl").show();
                $(".dtl2").prop('required', true);
            } else {
                $("#asidtl").hide();
                $(".dtl2").prop('required', false);
                $(".dtl2").val("");
            }
        });

        //Menampilkan detail pertanyaan jika memerah asi
        if ($('#MemerahAsi option').filter(':selected').text() === "Ya") {
            $("#asiperahdtl").show();
            $(".dtl3").prop('required', true);
        } else {
            $("#asiperahdtl").hide();
            $(".dtl3").val("");
        }
        $("#MemerahAsi").change(function() {
            if ($(this).val() == "Ya") {
                $("#asiperahdtl").show();
                $(".dtl3").prop('required', true);
            } else {
                $("#asiperahdtl").hide();
                $(".dtl3").prop('required', false);
                $(".dtl3").val("");
            }
        });

        //Menampilkan detail pertanyaan jika asi eksklusif
        if ($('#AsiEkslusif option').filter(':selected').text() === "Ya") {
            $("#asieksdtl").show();
            $(".dtl4").prop('required', true);
        } else {
            $("#asieksdtl").hide();
            $(".dtl4").val("");
        }
        $("#AsiEkslusif").change(function() {
            if ($(this).val() == "Ya") {
                $("#asieksdtl").show();
                $(".dtl4").prop('required', true);
            } else {
                $("#asieksdtl").hide();
                $(".dtl4").prop('required', false);
                $(".dtl4").val("");
            }
        });
    });
</script>
@endsection