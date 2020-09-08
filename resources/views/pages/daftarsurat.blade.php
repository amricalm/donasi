@extends('templates.index')
@include('templates.komponen.sweetalert')
@include('templates.komponen.datatable')
@include('templates.komponen.tanggal')
@include('templates.komponen.select2')
@section('body')
<div class="loader-bg">
    <div class="loader-bar"></div>
</div>
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
        
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="card">
                                                <div class="card-block">
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
