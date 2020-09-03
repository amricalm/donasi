@component('templates.widgets')
    @slot('header')
    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/pnotify/css/pnotify.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/pnotify/css/pnotify.brighttheme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/pnotify/css/pnotify.buttons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/pnotify/css/pnotify.history.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/pnotify/css/pnotify.mobile.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/pages/pnotify/notify.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('files/bower_components/pnotify/PNotifyBrightTheme.css')}}"> --}}
    @endslot
    @slot('footer')
    <!-- pnotify js -->
    <script type="text/javascript" src="{{ asset('files/bower_components/pnotify/js/pnotify.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/pnotify/js/pnotify.desktop.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/pnotify/js/pnotify.buttons.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/pnotify/js/pnotify.confirm.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/pnotify/js/pnotify.callbacks.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/pnotify/js/pnotify.animate.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/pnotify/js/pnotify.history.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/pnotify/js/pnotify.mobile.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/pnotify/js/pnotify.nonblock.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/assets/pages/pnotify/notify.js')}}"></script>
   {{--  <script src="{{asset('files/bower_components/pnotify/PNotify.js')}}"></script>
    <script src="{{asset('files/bower_components/pnotify/PNotifyButtons.js')}}"></script>
    <script src="{{asset('files/bower_components/pnotify/PNotifyCallbacks.js')}}"></script>
    <script src="{{asset('files/bower_components/pnotify/PNotifyDesktop.js')}}"></script>
    <script src="{{asset('files/bower_components/pnotify/PNotifyConfirm.js')}}"></script>
    <script src="{{asset('files/bower_components/pnotify/notify-event.js')}}"></script> --}}
    @endslot
@endcomponent
