@component('templates.widgets')
    @slot('header')
<link href="{{ asset('files/bower_components/summernote/summernote.css')}}" rel="stylesheet">
    @endslot
    @slot('footer')
        <script type="text/javascript" src="{{ asset('files/bower_components/summernote/summernote.js')}}"></script>
    @endslot
@endcomponent

