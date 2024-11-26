<div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 dark:bg-gray-800">
    <h1 class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
        Criar Novo Usuário
    </h1>

    @if (session('success'))
        <div class="bg-green-500 text-white p-4 my-4">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-500 text-white p-4 my-4">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" wire:submit.prevent="submit">
        @csrf

        <div class="mb-4">
            <x-label for="name" value="Nome" />
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" wire:model.defer="name" required autofocus />
        </div>

        <div class="mb-4">
            <x-label for="email" value="E-mail" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" wire:model.defer="email" required />
        </div>

        <div class="mb-4">
            <x-label for="password" value="Senha" />
            <x-input id="password" class="block mt-1 w-full" type="password" name="password" wire:model.defer="password" required />
        </div>

        <div class="mb-4">
            <x-label for="password_confirmation" value="Confirmar Senha" />
            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" wire:model.defer="password_confirmation" required />
        </div>

        <div class="mb-4">
            <x-label for="role" value="Tipo de Usuário" />
            <select name="role" id="role" wire:model.defer="role" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="user">Usuário</option>
                <option value="admin">Administrador</option>
            </select>
        </div>

        <div class="flex flex-row justify-end">
            <x-button>
                Criar Usuário
            </x-button>
        </div>
    </form>
</div>
