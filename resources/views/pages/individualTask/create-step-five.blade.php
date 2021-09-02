@extends('layout.mobile')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <h6 class="mb-0">{{ $judul }}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('individualtask.create.step.five.post') }}" method="POST">
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
                <label>Pemambahan BB selama hamil</label>
                <div class="input-group">
                    <input type="number" id="BeratHamil" name="BeratHamil" class="form-control" value="{{ $data->BeratHamil ?? '' }}" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">Kg</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Saat hamil <b><i>(Baduta)</i></b>, apakah memeriksakan kehamilan?</label>
                {!! Form::select('PeriksaHamil', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->PeriksaHamil ?? '', ['class' => 'form-control']); !!}
            </div>
            <div class="form-group mb-4">
                <label><b><i>Jika ya</i></b>, dari mana anda memperoleh pelayanan tersebut?</label>
                {!! Form::select('TempatPeriksa', ['' => '', 'Klinik Perusahaan' => 'Klinik Perusahaan', 'Puskesmas' => 'Puskesmas', 'Rumah Sakit' => 'Rumah Sakit', 'Lainnya' => 'Lainnya'], $data->TempatPeriksa ?? '', ['class' => 'form-control']); !!}
            </div>
            <div class="form-group mb-4">
                <label>Berapa kali anda memeriksakan kehamilan</label>
                <div class="input-group">
                    <input type="number" id="JumlahPeriksa" name="JumlahPeriksa" class="form-control" value="{{ $data->JumlahPeriksa ?? '' }}" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">Kali</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Hambatan dalam memeriksakan kehamilan?</label>
                <textarea class="form-control" id="HambatanPeriksa" name="HambatanPeriksa" rows="2">{{ $data->HambatanPeriksa ?? '' }}</textarea>
            </div>
            <div class="form-group mb-4">
                <label>Apakah terdapat pengurangan beban kerja saat anda hamil?</label>
                {!! Form::select('BebanKerjaHamil', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->BebanKerjaHamil ?? '', ['class' => 'form-control']); !!}
            </div>
            <div class="form-group mb-4">
                <label>Di usia kehamilan berapa bulan anda mengambil cuti?</label>
                <input type="text" id="CutiUsiaHamil" name="CutiUsiaHamil" class="form-control" value="{{ $data->CutiUsiaHamil ?? '' }}" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Berapa lama anda mendapatkan cuti hamil dan melahirkan?</label>
                <input type="text" id="LamaCutiHamil" name="LamaCutiHamil" class="form-control" value="{{ $data->LamaCutiHamil ?? '' }}" autocomplete="off">
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="button" onclick="window.location='{{ route("individualtask.create.step.four") }}'" class="btn btn-danger rounded">Kembali</button>
                <button type="submit" class="btn btn-default rounded">Selanjutnya</button>
            </div>
        </form>
    </div>
</div>
@endsection