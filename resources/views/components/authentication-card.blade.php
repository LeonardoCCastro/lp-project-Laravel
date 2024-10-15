<section class="bg-[url('https://flowbite.s3.amazonaws.com/blocks/marketing-ui/authentication/background.jpg')] bg-no-repeat bg-cover bg-center bg-gray-700 bg-blend-multiply bg-opacity-60">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-screen pt:mt-0">
        <div>
            {{ $logo }}
        </div>
    
        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800">
            {{ $slot }}
        </div>
    </div>
</section>

