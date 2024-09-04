<section class="section relative bg-[url('/public/img/dumbbells-foreground-gym-environment.png')] bg-no-repeat bg-cover pt-24" id="section5" wire:ignore.self>
    <div class="h-full flex items-center justify-center">
        <div class="absolute inset-0 bg-black opacity-85"></div>
        <div class="container mx-auto relative z-10 block w-full h-auto place-content-between justify-center gap-4">
            <div class="py-8 lg:py-16 px-4 mx-auto">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-white font-['Futura-Bold']">CONTATO</h2>
                <form wire:submit.prevent="submit" class="space-y-8">
                    <div class="flex flex-col">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-300 font-['Helvetica-Neue']">Email</label>
                        <input type="email" id="email" wire:model="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="example@mail.com">
                        @error('email') <span class="text-red-600 text-base mt-2 font-['Helvetica-Neue']">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-300 font-['Helvetica-Neue']">Telefone</label>
                        <input onkeyup="this.value = tel_format(this.value)" type="text" id="phone" wire:model="phone" maxlength="15" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="(16) 9 9999-9999">
                        @error('phone') <span class="text-red-600 text-base mt-2 font-['Helvetica-Neue']">{{ $message }}</span> @enderror
                    </div>
                    <div class="sm:col-span-2 flex flex-col">
                        <label for="content" class="block mb-2 text-sm font-medium text-gray-400 font-['Helvetica-Neue']">Mensagem</label>
                        <textarea id="content" wire:model="content" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Escreva aqui sua mensagem"></textarea>
                        @error('content') <span class="text-red-600 text-base mt-2 font-['Helvetica-Neue']">{{ $message }}</span> @enderror
                    </div>
                    @if (session()->has('message'))
                        <div class="text-green-600 text-base mt-2 font-['Helvetica-Neue']">{{ session('message') }}</div>
                    @endif
                    <button type="submit" class="m-4 px-6 py-3.5 font-['Futura-Bold'] text-black bg-[#FFBF00] rounded-lg text-center hover:bg-orange-500">ENVIAR MENSAGEM</button>
                </form>
            </div>
        </div>
    </div>
</section>
