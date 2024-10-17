<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('layouts.errors.head')

    <body>
        @yield('body')
        @include('layouts.errors.scriptfooter')
    </body>
</html>
