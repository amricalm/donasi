@component('templates.widgets')
    @slot('header')
        <link rel="stylesheet" type="text/css" href="{{asset('files/assets/pages/nestable/nestable.css')}}">
    @endslot
    @slot('footer')
        <script src="{{asset('files/assets/pages/nestable/jquery.nestable.js')}}"></script>
    @endslot
@endcomponent

