@extends('templates.mobile.pageslayout')

@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="mb-0">{{ $judul }}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('stress.create.post') }}" method="POST">
            @csrf
            <div class="form-group mb-4">
                <label>Kondisi di tempat kerja tidak menyenangkan atau kadang-kadang bahkan tidak aman</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text border-0 bg-none">
                            <input type="radio" aria-label="Radio button for following text input">
                        </div>
                    </div>
                    <input type="text" class="form-control border-0 bg-none" aria-label="Text input with radio button" value="TIDAK PERNAH" readonly>
                </div>
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="submit" class="btn btn-default rounded">Selesai</button>
            </div>
        </form>
    </div>
</div>
@endsection