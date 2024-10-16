<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <a href="{{ route('dashboard') }}" class="flex items-center mb-6 text-2xl font-semibold text-white">
                <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                Flowbite    
            </a>
        </x-slot>

        <div class="p-6 space-y-4 md:space-y-6 lg:space-y-8 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                Reset your password
            </h1>
        
            <x-validation-errors class="mb-4" />
        
            <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('password.update') }}">
                @csrf
        
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
        
                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>
        
                <div>
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>
        
                <div>
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
        
                <x-button class="w-full">
                    {{ __('Reset Password') }}
                </x-button>
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>