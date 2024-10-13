<button {{ $attributes->merge(['type' => 'button', 'class' => 'focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center uppercase dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900']) }}>
    {{ $slot }}
</button>
