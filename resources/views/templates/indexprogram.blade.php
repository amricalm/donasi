<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('templates/headerprogram')
    </head>
    <body @yield('theme-pattern')>
        @yield('body')
        @include('templates/footerprogram')
    </body>
</html>