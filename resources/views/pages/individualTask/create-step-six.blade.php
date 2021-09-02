@extends('templates.mobile.pageslayout')

@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="mb-0">{{ $judul }}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('individualtask.create.step.six.post') }}" method="POST">
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
                <label>Pada saat nifas (Dalam masa 40 Hari setelah melahirkan) apakah anda mendapatkan pelayanan kesehatan dari tenaga kesehatan</label>
                {!! Form::select('YankesNifas', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->YankesNifas ?? '', ['class' => 'form-control']); !!}
            </div>
            <div class="form-group mb-4">
                <label><b><i>Jika ya</i></b>, dari mana anda memperoleh pelayanan tersebut?</label>
                {!! Form::select('YankesNifasDari', ['' => '', 'Klinik Perusahaan' => 'Klinik Perusahaan', 'Puskesmas' => 'Puskesmas','Rumah Sakit' => 'Rumah Sakit', 'Lainnya' => 'Lainnya'], $data->YankesNifasDari ?? '', ['class' => 'form-control']); !!}
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
                {!! Form::select('BebanKerjaNifas', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->BebanKerjaNifas ?? '', ['class' => 'form-control']); !!}
            </div>
            <div class="form-group mb-4">
                <label>Apakah anda menggunakan fasilitas pelayanan KB</label>
                {!! Form::select('Kb', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->Kb ?? '', ['class' => 'form-control']); !!}
            </div>
            <div class="form-group mb-4">
                <label><b><i>Jika ya,</i></b> Jenis KB yang digunakan:</label>
                {!! Form::select('JenisKb', ['' => '', 'Suntik' => 'Suntik', 'Pil' => 'Pil', 'IUD' => 'IUD', 'Implant' => 'Implant', 'Tubektomi' => 'Tubektomi'], $data->JenisKb ?? '', ['class' => 'form-control']); !!}
            </div>
            <div class="form-group mb-4">
                <label>Dimana anda mendapatkan fasilitas pelayanan KB</label>
                <input type="text" id="YankesKb" name="YankesKb" class="form-control" value="{{ $data->YankesKb ?? '' }}" autocomplete="off">
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="button" onclick="window.location='{{ route("individualtask.create.step.five") }}'" class="btn btn-danger rounded">Kembali</button>
                <button type="submit" class="btn btn-default rounded">Selesai</button>
            </div>
        </form>
    </div>
</div>
@endsection