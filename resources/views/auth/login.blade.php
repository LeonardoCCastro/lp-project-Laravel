<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-custom-logo/>
        </x-slot>

        <div class="p-6 space-y-4 md:space-y-6 lg:space-y-8 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                Sign in to your account
            </h1>

            <x-validation-errors class="mb-4" />

            @session('status')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ $value }}
                </div>
            @endsession

            <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
                @csrf
    
                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>
    
                <div>
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>
    
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-0 items-center justify-between">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <x-checkbox id="remember_me" name="remember" />
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="remember_me" class="text-gray-500 dark:text-gray-300">{{ __('Remember me') }}</label>
                        </div>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">{{ __('Forgot your password?') }}</a>
                    @endif
                </div>
                <x-button type="submit" class="w-full">
                    {{ __('Log in') }}
                </x-button>
                <p class="text-sm font-light text-center text-gray-500 dark:text-gray-300">
                    <a href="{{ route('register') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Don't have an account?</a>
                </p>
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>