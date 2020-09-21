@component('templates.widgets')
    @slot('header')
        <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/pages/j-pro/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/pages/j-pro/css/j-pro-modern.css')}}">
    @endslot
    @slot('footer')
        <script type="text/javascript" src="{{ asset('files/assets/pages/j-pro/js/jquery.ui.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('files/assets/pages/j-pro/js/jquery.maskedinput.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('files/assets/pages/j-pro/js/jquery.j-pro.js')}}"></script>
    @endslot
@endcomponent

