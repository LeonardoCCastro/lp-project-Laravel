@extends('layouts.user.base')

@section('body')
    @yield('content')
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection