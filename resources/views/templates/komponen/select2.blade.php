@component('templates.widgets')
    @slot('header')
    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/select2/css/select2.min.css') }}" >
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #448aff;
        }
    </style>
    @endslot
    @slot('footer')
    <script type="text/javascript" src="{{ asset('files/bower_components/select2/js/select2.full.min.js') }}"></script>
    @endslot
@endcomponent

