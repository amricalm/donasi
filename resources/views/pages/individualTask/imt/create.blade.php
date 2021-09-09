@extends('templates.mobile.pageslayout')

@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="mb-0">{{ $judul }}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('imt.create.post') }}" method="POST">
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
                <label>Usia :</label>
                <div class="input-group">
                    <input type="text" id="Usia" name="Usia" class="form-control" value="{{ $data->Usia ?? '' }}" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">tahun</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Tinggi badan :</label>
                <div class="input-group">
                    <input type="text" id="TinggiBadan" name="TinggiBadan" class="form-control" value="{{{ $data->TinggiBadan ?? '' }}}" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">m</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Berat badan :</label>
                <div class="input-group">
                    <input type="text" id="BeratBadan" name="BeratBadan" class="form-control" value="{{ $data->BeratBadan ?? '' }}" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">kg</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>IMT: Berat Badan/tinggi badan<sup>2</sup> :</label>
                <div class="input-group">
                    <input type="text" id="MassaTubuh" name="MassaTubuh" class="form-control" value="{{ $data->MassaTubuh ?? '' }}" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">Kg/m<sup>2</sup></span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Lemak tubuh total :</label>
                <div class="input-group">
                    <input type="text" id="LemakTotal" name="LemakTotal" class="form-control" value="{{ $data->LemakTotal ?? '' }}" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Lemak viseral :</label>
                <div class="input-group">
                    <input type="text" id="LemakViseral" name="LemakViseral" class="form-control" value="{{ $data->LemakViseral ?? '' }}" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Tekanan darah sistol :</label>
                <div class="input-group">
                    <input type="text" id="Sistol" name="Sistol" class="form-control" value="{{ $data->Sistol ?? '' }}" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">MmHg</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Tekanan darah diastol :</label>
                <div class="input-group">
                    <input type="text" id="Diastol" name="Diastol" class="form-control" value="{{ $data->Diastol ?? '' }}" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">MmHg</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Kadar gula darah sesaat (setelah makan) :</label>
                <div class="input-group">
                    <input type="text" id="GulaDarah" name="GulaDarah" class="form-control" value="{{ $data->GulaDarah ?? '' }}" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">mg/dL</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Kadar Hb darah :</label>
                <div class="input-group">
                    <input type="text" id="HbDarah" name="HbDarah" class="form-control" value="{{ $data->HbDarah ?? '' }}" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">g/dL</span>
                    </div>
                </div>
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="submit" class="btn btn-default rounded">Selesai</button>
            </div>
        </form>
    </div>
</div>
@endsection