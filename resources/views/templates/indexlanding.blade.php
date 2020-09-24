<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('templates/headerlanding')
    </head>
    <body @yield('theme-pattern')>
        @yield('body')
        @include('templates/footerlanding')
    </body>
</html>