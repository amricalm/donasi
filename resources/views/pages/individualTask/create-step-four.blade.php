@extends('layout.mobile')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <h6 class="mb-0">{{ $judul }}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('individualtask.create.step.four.post') }}" method="POST">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form-group mb-4">
                <label>Apakah terdapat pengurangan beban kerja di perusahaan saat masa haid?</label>
                {!! Form::select('BebanKerjaHaid', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->BebanKerjaHaid ?? '', ['class' => 'form-control']); !!}
            </div>
            <div class="form-group mb-4">
                <label>Apakah anda diberikan kesempatan untuk megambil cuti saat haid?</label>
                {!! Form::select('CutiHaid', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->CutiHaid ?? '', ['class' => 'form-control']); !!}
            </div>
            <div class="form-group mb-4">
                <label>Berapa jumlah anak anda saat ini? <b><i>(yang pernah dilahirkan)</i></b></label>
                <div class="input-group">
                    <input type="number" id="JumlahAnak" name="JumlahAnak" class="form-control" value="{{ $data->JumlahAnak ?? '' }}" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">Orang</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Apakah saat ini anda memiliki anak usia di bawah dua tahun (baduta)?</label>
                {!! Form::select('Baduta', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->Baduta ?? '', ['class' => 'form-control']); !!}
            </div>
            <div class="form-group mb-4">
                <label>Berapa usia Baduta saat ini?</label>
                <input type="text" id="UsiaBaduta" name="UsiaBaduta" class="form-control" value="{{ $data->UsiaBaduta ?? '' }}" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Apakah Baduta diberi ASI?</label>
                {!! Form::select('AsiBaduta', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->AsiBaduta ?? '', ['class' => 'form-control']); !!}
            </div>
            <div class="form-group mb-4">
                <label>Berapa lama balita mendapatkan ASI?</label>
                <input type="text" id="LamaAsiBaduta" name="LamaAsiBaduta" class="form-control" value="{{ $data->LamaAsiBaduta ?? '' }}" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Apakah anda memerah ASI?</label>
                <input type="text" id="MemerahAsi" name="MemerahAsi" class="form-control" value="{{ $data->MemerahAsi ?? '' }}" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Dimana anda memerah ASI</label>
                <input type="text" id="TempatMemerahAsi" name="TempatMemerahAsi" class="form-control" value="{{ $data->TempatMemerahAsi ?? '' }}" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Apakah anda diberikan waktu/izin untuk memerah ASI?</label>
                {!! Form::select('IzinMemerahAsi', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->IzinMemerahAsi ?? '', ['class' => 'form-control']); !!}
            </div>
            <div class="form-group mb-4">
                <label>Hambatan dalam memerah ASI</label>
                <input type="text" id="HambatanMemerahAsi" name="HambatanMemerahAsi" class="form-control" value="{{ $data->HambatanMemerahAsi ?? '' }}" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Apakah bayi mendapatkan ASI saja sebelum usia 6 bulan dan tidak diberikan makanan tambahan, susu formula ataupun air putih</label>
                {!! Form::select('AsiEkslusif', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->AsiEkslusif ?? '', ['class' => 'form-control']); !!}
            </div>
            <div class="form-group mb-4">
                <label>Sejak Usia berapa pertama kali bayi diberikan susu formula?</label>
                <input type="text" id="UsiaDiberiSusu" name="UsiaDiberiSusu" class="form-control" value="{{ $data->UsiaDiberiSusu ?? '' }}" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Alasan memberikan tambahan susu formula</label>
                <textarea class="form-control" id="AlasanDiberiSusu" name="AlasanDiberiSusu" rows="2">{{ $data->AlasanDiberiSusu ?? '' }}</textarea>
            </div>
            <div class="form-group mb-4">
                <label>Hambatan dalam memberikan ASI</label>
                <textarea class="form-control" id="HambatanAsi" name="HambatanAsi" rows="2">{{ $data->HambatanAsi ?? '' }}</textarea>
            </div>
            <div class="form-group mb-4">
                <label>Diusia berapa balita mendapatkan M-PASI?</label>
                {!! Form::select('UsiaMpAsi', ['' => '', '< 6 Bulan'=> '< 6 Bulan', '> 6 bulan'=> '> 6 bulan'], $data->UsiaMpAsi ?? '', ['class' => 'form-control']); !!}
            </div>
            <div class="form-group mb-4">
                <label>Jenis M-PASI Pertama :</label>
                <textarea class="form-control" id="JenisMpAsi" name="JenisMpAsi" rows="2">{{ $data->JenisMpAsi ?? '' }}</textarea>
            </div>
            <div class="form-group mb-4">
                <label>Hambatan dalam memberikan M-PASI :</label>
                <textarea class="form-control" id="HambatanMpAsi" name="HambatanMpAsi" rows="2">{{ $data->HambatanMpAsi ?? '' }}</textarea>
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="button" onclick="window.location='{{ route("individualtask.create.step.three") }}'" class="btn btn-danger rounded">Kembali</button>
                <button type="submit" class="btn btn-default rounded">Selanjutnya</button>
            </div>
        </form>
    </div>
</div>
@endsection