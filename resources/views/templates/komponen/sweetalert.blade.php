@component('templates.widgets')
    @slot('header')
    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/sweetalert2/sweetalert2.css')}}" media="all">
    @endslot
    @slot('footer')
    <!-- SWEETALERT -->
    <script type="text/javascript" src="{{ asset('files/bower_components/sweetalert2/sweetalert2.all.js')}}"></script>
    @endslot
@endcomponent

