<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('templates/header')
    </head>
    <body @yield('theme-pattern')>
        @yield('body')
        @include('templates/footer')
    </body>
</html>
