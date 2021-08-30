@extends('layout.mobile')

@section('content')
<div class="card mb-4">
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
            <div class="form-group">
                <label>Nama :</label>
                <input type="text" id="NamaLengkap" name="NamaLengkap" class="form-control" value="{{ $data->NamaLengkap ?? '' }}">
            </div>
            <div class="form-group">
                <label>Tanggal, bulan, tahun lahir :</label>
                <input type="date" id="TglLahir" name="TglLahir" class="form-control" value="{{{ $data->TglLahir ?? '' }}}">
            </div>
            <div class="form-group">
                <label>Unit/Sub unit kerja :</label>
                <input type="text" id="UnitKerja" name="UnitKerja" class="form-control" value="{{ $data->UnitKerja ?? '' }}">
            </div>
            <div class="form-group">
                <label>Tahun mulai kerja di perusahaan :</label>
                <input type="text" id="TglMasuk" name="TglMasuk" class="form-control" value="{{ $data->TglMasuk ?? '' }}">
            </div>
            <div class="form-group">
                <label>Tahun mulai kerja di sub unit :</label>
                <input type="text" id="TglMasukUnit" name="TglMasukUnit" class="form-control" value="{{ $data->TglMasukUnit ?? '' }}">
            </div>
            <div class="form-group">
                <label>Mengalami shift kerja :</label>
                <input type="text" id="Shift" name="Shift" class="form-control" value="{{ $data->Shift ?? '' }}">
            </div>
            <div class="form-group">
                <label>Tanggal pengumpulan data :</label>
                <input type="date" id="TglInput" name="TglInput" class="form-control" value="{{ $data->TglInput ?? '' }}">
            </div>
            <div class="form-group">
                <label>Nama/No hp petugas :</label>
                <input type="text" id="" name="" class="form-control" value="{{ $data->name ?? '' }}">
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="submit" class="btn btn-default rounded">Next</button>
            </div>
        </form>
    </div>
</div>
@endsection