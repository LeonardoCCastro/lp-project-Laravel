<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-custom-logo/>
        </x-slot>

        <div class="p-6 space-y-4 md:space-y-6 lg:space-y-8 sm:p-8">
            <h2 class="mb-3 text-2xl font-bold text-gray-900 lg:text-3xl dark:text-white">
                Esqueceu sua senha?
            </h2>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                Não se preocupe! Basta digitar seu e-mail e enviaremos um código para redefinir sua senha!
            </p>
        
            @session('status')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ $value }}
                </div>
            @endsession
        
            <form class="mt-8 space-y-6" method="POST" action="{{ route('password.email') }}">
                @csrf
        
                <div>
                    <x-label for="email" value="{{ __('E-mail') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>
        
                <x-button class="w-full">
                    {{ __('Redefinir Senha') }}
                </x-button>
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>

