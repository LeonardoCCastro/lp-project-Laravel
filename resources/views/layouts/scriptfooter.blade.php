<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/flowbite.js') }}"></script>
@yield('script')
@if (app()->isLocal())
    @vite(['resources/js/app.js'])
@else
    <script src="{{ asset('build/js/app2.js') }}" defer></script>
@endif