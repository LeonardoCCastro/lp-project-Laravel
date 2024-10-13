<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    
    @include('layouts.user.head')

    <body class="bg-gray-50 dark:bg-gray-800">
        @include('layouts.user.navbar')
        <div class="flex overflow-hidden pt-16 bg-gray-50 dark:bg-gray-900">
            @include('layouts.user.sidebar')
            <div id="main-content" class="overflow-y-auto relative w-full h-full bg-gray-50 lg:ml-64 dark:bg-gray-900">
                @yield('body')
                @include('layouts.user.footer')
            </div>
        </div>
        @include('layouts.user.scriptfooter')
    </body>
    {{-- <div class="w-64 ml-64 lg:ml-64 lg:w-64">

    </div>
    <div class="w-16 ml-16 lg:ml-16 lg:w-16">

    </div> --}}
</html>
