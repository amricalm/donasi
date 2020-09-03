@component('templates.widgets')
    @slot('header')
    @endslot
    @slot('footer')
        <script type="text/javascript" src="{{ asset('files/assets/pages/ckeditor/ckeditor.js')}}"></script>
        <script type="text/javascript" src="{{ asset('files/assets/pages/ckeditor/ckeditor-custom.js')}}"></script>
    @endslot
@endcomponent

