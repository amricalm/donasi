@component('templates.widgets')
    @slot('header')
        <link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/jstree/themes/default/style.css')}}">
    @endslot
    @slot('footer')
        <script src="{{asset('files/bower_components/jstree/jstree.js')}}"></script>
    @endslot
@endcomponent

