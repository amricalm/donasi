@extends('templates.mobile.mainlayout')

@section('content')
<div class="container mb-4">
    <div class="card">
        <div class="card-body text-center ">
            <div class="row justify-content-equal no-gutters">
                <div class="col-4 col-md-2 mb-3">
                    <a href="{{ url('imt/create') }}">
                        <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">receipt</span></div>
                    </a>
                    <p class="text-secondary"><small>Index Massa Tubuh</small></p>
                </div>
                <div class="col-4 col-md-2 mb-3">
                    <a href="{{ url('kespro/create-step-one') }}">
                        <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">receipt</span></div>
                    </a>
                    <p class="text-secondary"><small>Kesehatan Reproduksi</small></p>
                </div>
                <div class="col-4 col-md-2 mb-3">
                    <a href="{{ url('pola-makan/create-step-one') }}">
                        <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">receipt</span></div>
                    </a>
                    <p class="text-secondary"><small>Pola Makan</small></p>
                </div>
                <div class="col-4 col-md-2 mb-3">
                    <a href="{{ url('aktivitas-fisik/create') }}">
                        <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">receipt</span></div>
                    </a>
                    <p class="text-secondary"><small>Level Aktivitas Fisik</small></p>
                </div>
                <div class="col-4 col-md-2 mb-3">
                    <a href="{{ url('stress-kerja/create') }}">
                        <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">receipt</span></div>
                    </a>
                    <p class="text-secondary"><small>Stess Kerja</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection