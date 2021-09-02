@extends('templates.mobile.pageslayout')

@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="mb-0">{{ $judul }}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('individualtask.create.step.one.post') }}" method="POST">
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
                <label>Nama :</label>
                <input type="text" id="NamaLengkap" name="NamaLengkap" class="form-control" value="{{ session('UserEmployeeName') ?? '' }}" autocomplete="off" readonly>
            </div>
            <div class="form-group mb-4">
                <label>Tanggal, bulan, tahun lahir :</label>
                <input type="date" id="TglLahir" name="TglLahir" class="form-control" value="{{{ $data->TglLahir ?? '' }}}" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Unit/Sub unit kerja :</label>
                <input type="text" id="UnitKerja" name="UnitKerja" class="form-control" value="{{ $data->UnitKerja ?? '' }}" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Tahun mulai kerja di perusahaan :</label>
                <input type="text" id="TglMasuk" name="TglMasuk" class="form-control" value="{{ $data->TglMasuk ?? '' }}" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Tahun mulai kerja di sub unit :</label>
                <input type="text" id="TglMasukUnit" name="TglMasukUnit" class="form-control" value="{{ $data->TglMasukUnit ?? '' }}" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Mengalami shift kerja :</label>
                {!! Form::select('Shift', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->Shift ?? '', ['class' => 'form-control']); !!}
            </div>
            <div class="form-group mb-4">
                <label>Tanggal pengumpulan data :</label>
                <input type="date" id="TglInput" name="TglInput" class="form-control" value="{{ $tesdata->TglInput ?? '' }}" autocomplete="off">
            </div>
            <div class="form-group mb-4">
                <label>Nama/No hp petugas :</label>
                <input type="text" id="Petugas" name="Petugas" class="form-control" value="{{ $tesdata->Petugas ?? '' }}" autocomplete="off">
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="submit" class="btn btn-default rounded">Selanjutnya</button>
            </div>
        </form>
    </div>
</div>
@endsection