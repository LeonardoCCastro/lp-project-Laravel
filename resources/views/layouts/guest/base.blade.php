<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('layouts.guest.head')

    <body>
        @yield('body')
        @include('layouts.guest.scriptfooter')
    </body>
</html>
