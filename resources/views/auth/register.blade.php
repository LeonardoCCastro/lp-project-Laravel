<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-custom-logo/>
        </x-slot>

        <div class="p-6 space-y-4 md:space-y-6 lg:space-y-8 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                Registre-se
            </h1>
        
            <x-validation-errors class="mb-4" />
        
            @session('status')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ $value }}
                </div>
            @endsession
        
            <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('register') }}">
                @csrf
        
                <div>
                    <x-label for="name" value="{{ __('Nome') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>
        
                <div>
                    <x-label for="email" value="{{ __('E-mail') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>
        
                <div>
                    <x-label for="password" value="{{ __('Senha') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>
        
                <div>
                    <x-label for="password_confirmation" value="{{ __('Confirmar Senha') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
        
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('Eu concordo com os :terms_of_service e as :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:text-white dark:hover:text-primary-600">'.__('Termos de Serviço').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:text-white dark:hover:text-primary-600">'.__('Políticas de Privacidade').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                @endif
        
                <x-button class="w-full">
                    {{ __('Registrar-se') }}
                </x-button>

                <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                    Já tem uma conta ? <a href="{{ route('login') }}" class="text-primary-700 hover:underline dark:text-primary-500">Faça login aqui</a>
                </div>
        
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>


