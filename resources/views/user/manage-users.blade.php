@extends('layouts.user.pagefull')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/input.css') }}">
@endsection

@section('content')
    <main>
        <div class="max-w-7xl mx-auto">
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="user-manager-tab" data-tabs-toggle="#user-manager-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="user-create-tab" data-tabs-target="#user-create" type="button" role="tab" aria-controls="user-create" aria-selected="false">Criação de usuário</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="user-list-tab" data-tabs-target="#user-list" type="button" role="tab" aria-controls="user-list" aria-selected="false">Listagem de usuário</button>
                    </li>
                </ul>
            </div>
            <div id="user-manager-tab-content">
                <div  id="user-create" role="tabpanel" aria-labelledby="user-create-tab">
                    @livewire('user-manage-component')
                </div>
                <div  id="user-list" role="tabpanel" aria-labelledby="user-list-tab">
                    @livewire('user-table-component')
                </div>
            </div>
        </div>
    </main>
@endsection