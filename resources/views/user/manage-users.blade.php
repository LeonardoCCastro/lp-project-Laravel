@extends('layouts.user.pagefull')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/input.css') }}">
@endsection

@section('content')
    <main>
        <div class="px-4 pt-6">
            @livewire('user-manage-component')
        </div>
    </main>
@endsection