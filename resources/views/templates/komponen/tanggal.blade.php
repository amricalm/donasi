@component('templates.widgets')
    @slot('header')
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/pages/advance-elements/css/bootstrap-datetimepicker.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/bootstrap-daterangepicker/css/daterangepicker.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/datedropper/css/datedropper.min.css') }}" /> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}"/>
    @endslot
    @slot('footer')
        {{-- <script type="text/javascript" src="{{ asset('files/assets/pages/advance-elements/moment-with-locales.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('files/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('files/assets/pages/advance-elements/bootstrap-datetimepicker.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('files/bower_components/bootstrap-daterangepicker/js/daterangepicker.js')}}"></script>
        <script type="text/javascript" src="{{ asset('files/bower_components/datedropper/js/datedropper.min.js')}}"></script> --}}
        <script type="text/javascript" src="{{ asset('files/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    @endslot
@endcomponent

