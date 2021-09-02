@extends('templates.mobile.pageslayout')

@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="mb-0">{{ $judul }}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('individualtask.create.step.three.post') }}" method="POST">
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
                <label for="Rokok">Apakah anda pernah merokok? </label>
                {!! Form::select('Rokok', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->Rokok ?? '', ['class' => 'form-control', 'id' => 'Rokok']); !!}
            </div>
            <div id="rokokdtl">
                <div class="form-group mb-4" tabindex="-999">
                    <label>Sudah berapa lama anda merokok?</label>
                    <div class="input-group">
                        <input type="number" id="LamaRokok" name="LamaRokok" class="form-control" value="{{ $data->LamaRokok ?? '' }}" autocomplete="off">
                        <div class="input-group-append">
                            <span class="input-group-text">Tahun</span>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label>Berapa banyak rokok yang anda habiskan setiap hari (rata-rata)?</label>
                    <div class="input-group">
                        <input type="number" id="BanyakRokok" name="BanyakRokok" class="form-control" value="{{ $data->BanyakRokok ?? '' }}" autocomplete="off">
                        <div class="input-group-append">
                            <span class="input-group-text">Batang</span>
                        </div>
                    </div>
                </div>
                <!-- <div class="form-group mb-4">
                <label>Indek keparahan merokok</label>
                <input type="text" id="IndexRokok" name="IndexRokok" class="form-control" value="{{ $data->IndexRokok ?? '' }}" readonly>
                </div> -->
                <div class="form-group mb-4">
                    <label>Dimana biasanya anda merokok?</label>
                    {!! Form::select('TempatRokok', ['' => '', 'Di rumah' => 'Di rumah', 'Di tempat kerja' => 'Di tempat kerja', 'Lainnya' => 'Lainnya'], $data->TempatRokok ?? '', ['class' => 'form-control']); !!}
                </div>
                <div class="form-group mb-4">
                    <label>Sebutkan</label>
                    <input type="text" id="" name="" class="form-control" value="">
                </div>
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="button" onclick="window.location='{{ route("individualtask.create.step.two") }}'" class="btn btn-danger rounded">Kembali</button>
                <button type="submit" class="btn btn-default rounded">Selanjutnya</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('footer')
<!-- <script>
    $(document).ready(function() {
        $("#Rokok").change(function() {
            if ($(this).val() == "Ya") {
                $("#rokokdtl").show();
            } else {
                $("#rokokdtl").hide();
            }
        });
        $("#rokokdtl").hide();
    });
</script> -->
@endsection