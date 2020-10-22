@extends('templates.index')
@include('templates.komponen.sweetalert')
@include('templates.komponen.chart')
@include('templates.komponen.widget')
@section('body')
<div class="loader-bg">
    <div class="loader-bar"></div>
</div>
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
        @include('templates.navbar')
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                @include('templates.menu')
                <div class="pcoded-content">
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="page-header-title">
                                        <h4 class="m-b-10">{{ $judul }}</h4>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                                <i class="feather icon-home"></i>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">{{ $judul }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="card">
                                                <div class="card-block">
                                                    <div class="mail-body">
                                                        <div class="mail-body-header">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-xl-6">
                                                                            <div class="card bg-c-blue order-card">
                                                                                <div class="card-block">
                                                                                    <h2>{{ $donate->CountInv }}</h2>
                                                                                    <h6>Donasi</h6>
                                                                                    <i class="card-icon feather icon-heart"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-xl-6">
                                                                            <div class="card bg-c-green order-card">
                                                                                <div class="card-block">
                                                                                    <h2>Rp. 0</h2>
                                                                                    <h6>Donasi disalurkan</h6>
                                                                                    <i class="card-icon feather icon-users"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- [ page content ] end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')

@endsection
