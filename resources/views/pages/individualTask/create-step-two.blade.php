@extends('layout.mobile')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <h6 class="mb-0">{{ $judul }}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('individualtask.create.step.two.post') }}" method="POST">
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
            <input type="hidden" id="ID" name="ID" class="form-control" value="{{ $data->ID ?? '' }}">
            <input type="hidden" id="IDKaryawan" name="IDKaryawan" class="form-control" value="{{ $dataKaryawan->id ?? '' }}">
            <input type="hidden" id="TglInput" name="TglInput" class="form-control" value="{{ $dataKaryawan->TglInput ?? '' }}">
            <div class="form-group">
                <label>Usia :</label>
                <input type="text" id="Usia" name="Usia" class="form-control" value="{{ $data->Usia ?? '' }}">
            </div>
            <div class="form-group">
                <label>Tinggi badan :</label>
                <input type="text" id="TinggiBadan" name="TinggiBadan" class="form-control" value="{{{ $data->TinggiBadan ?? '' }}}">
            </div>
            <div class="form-group">
                <label>Berat badan :</label>
                <input type="text" id="BeratBadan" name="BeratBadan" class="form-control" value="{{ $data->BeratBadan ?? '' }}">
            </div>
            <div class="form-group">
                <label>IMT: Berat Badan/tinggi badan<sup>2</sup> :</label>
                <input type="text" id="MassaTubuh" name="MassaTubuh" class="form-control" value="{{ $data->MassaTubuh ?? '' }}">
            </div>
            <div class="form-group">
                <label>Lemak tubuh total :</label>
                <input type="text" id="LemakTotal" name="LemakTotal" class="form-control" value="{{ $data->LemakTotal ?? '' }}">
            </div>
            <div class="form-group">
                <label>Lemak viseral :</label>
                <input type="text" id="LemakViseral" name="LemakViseral" class="form-control" value="{{ $data->LemakViseral ?? '' }}">
            </div>
            <div class="form-group">
                <label>Tekanan darah sistol :</label>
                <input type="text" id="Sistol" name="Sistol" class="form-control" value="{{ $data->Sistol ?? '' }}">
            </div>
            <div class="form-group">
                <label>Tekanan darah diastol :</label>
                <input type="text" id="Diastol" name="Diastol" class="form-control" value="{{ $data->Diastol ?? '' }}">
            </div>
            <div class="form-group">
                <label>Kadar gula darah sesaat (setelah makan) :</label>
                <input type="text" id="GulaDarah" name="GulaDarah" class="form-control" value="{{ $data->GulaDarah ?? '' }}">
            </div>
            <div class="form-group">
                <label>Kadar Hb darah :</label>
                <input type="text" id="HbDarah" name="HbDarah" class="form-control" value="{{ $data->HbDarah ?? '' }}">
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="button" onclick="window.location='{{ route("individualtask.create.step.one") }}'" class="btn btn-danger rounded">Previous</button>
                <button type="submit" class="btn btn-default rounded">Next</button>
            </div>
        </form>
    </div>
</div>
@endsection