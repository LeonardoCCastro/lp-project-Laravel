<x-guest-layout>
    <x-terms-and-policy-card>
        <x-slot name="logo">
            <x-custom-logo/>
        </x-slot>

        <div class="p-6 space-y-4 md:space-y-6 lg:space-y-8 sm:p-8">
            {!! $terms !!}
        </div>
    </x-terms-and-policy-card>
</x-guest-layout>


