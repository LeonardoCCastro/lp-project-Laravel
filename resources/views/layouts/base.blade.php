<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('layouts.head')

    <body>
        @yield('body')
        @include('layouts.scriptfooter')
    </body>
</html>
