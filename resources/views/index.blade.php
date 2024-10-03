@extends('layouts.pagefull')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/fullpage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fancybox.css') }}">
@endsection

@section('content')
    <div id="falldown" class="falldown">
        <div id="falldown1" class="falldown-background"></div>
        <div id="falldown2" class="falldown-background"></div>
        <div id="falldown3" class="falldown-background flex justify-center items-center">
            <span class="text-black text-7xl font-['Lihataja']">
                Luiz
            </span>
        </div>
        <div id="falldown4" class="falldown-background"></div>
        <div id="falldown5" class="falldown-background"></div>
    </div>
    <div class="main-wrapper">
        <div id="falldown-in" class="falldown-in">
            <div id="falldown-in1" class="falldown-background"></div>
            <div id="falldown-in2" class="falldown-background"></div>
            <div id="falldown-in3" class="falldown-background flex justify-center items-center">
                <span class="text-black text-7xl font-['Lihataja'] hidden" id="falldown-in-text">
                    Luiz
                </span>
            </div>
            <div id="falldown-in4" class="falldown-background"></div>
            <div id="falldown-in5" class="falldown-background"></div>
        </div>

        <header class="w-full fixed z-10">
            <nav class="bg-black px-4 py-4 xl:bg-opacity-80 backdrop-blur-lg backdrop-filter fixed top-0 left-0 w-full lg:px-6 xl:bg-transparent">
                <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                    <a href="/" class="flex items-center text-white text-4xl font-['Lihataja']">
                        Luiz
                    </a>
                    <div class="flex items-center lg:order-2">
                        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 lg:hidden"
                            aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                        <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                            <li>
                                <a onclick="nextPage('1')" class="text-white text-2xl font-['Futura-Bold'] uppercase hover:text-orange-500 cursor-pointer">Início</a>
                            </li>
                            <li>
                                <a onclick="nextPage('2')" class="text-white text-2xl font-['Futura-Bold'] uppercase hover:text-orange-500 cursor-pointer">Sobre Mim</a>
                            </li>
                            <li>
                                <a onclick="nextPage('3')" class="text-white text-2xl font-['Futura-Bold'] uppercase hover:text-orange-500 cursor-pointer">Treinos</a>
                            </li>
                            <li>
                                <a onclick="nextPage('4')" class="text-white text-2xl font-['Futura-Bold'] uppercase hover:text-orange-500 cursor-pointer">Instagram</a>
                            </li>
                            <li>
                                <a onclick="nextPage('5')" class="text-white text-2xl font-['Futura-Bold'] uppercase hover:text-orange-500 cursor-pointer">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div id="fullpage">

            {{-- Main --}}
            <section class="section bg-[url('/public/img/dumbbells-foreground-gym-environment.png')] bg-no-repeat bg-cover pt-24" id="section1">
                <div class="absolute inset-0 bg-black opacity-85"></div>
                <div class="absolute inset-0 hidden sm:flex xl:hidden flex-col justify-center items-center pt-24 opacity-85">
                    <h1 class="text-[18vw] leading-[1] text-white font-['Futura-Bold']">LUIZ PEDRO</h1>
                    <h1 class="text-[18vw] leading-[1] text-white font-['Futura-Bold']">LUIZ PEDRO</h1>
                    <h1 class="text-[18vw] leading-[1] text-white font-['Futura-Bold']">LUIZ PEDRO</h1>
                    <h1 class="text-[18vw] leading-[1] text-white font-['Futura-Bold']">LUIZ PEDRO</h1>
                    <h1 class="text-[18vw] leading-[1] text-white font-['Futura-Bold']">LUIZ PEDRO</h1>
                    <h1 class="text-[18vw] leading-[1] text-white font-['Futura-Bold']">LUIZ PEDRO</h1>
                </div>
                <div class="container mx-auto relative z-10 flex gap-20 w-full h-auto place-content-between sm:justify-evenly">
                    <div class="xl:w-5/12 hidden xl:grid place-content-center">
                        <h1 class="xl:text-8xl text-white font-['Futura-Bold']">LUIZ PEDRO</h1>
                        <p class="xl:text-4xl text-[#FFBF00] font-['Futura-Bold'] border-b-2">PERSONAL TRAINER</p>
                        <p class="xl:text-2xl text-white text-justify font-['Helvetica-Neue'] p-4">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, sequi illo quidem
                            quisquam quis asperiores. Nobis vitae, ex excepturi voluptatem ipsum odit. Hic numquam saepe
                            quibusdam reiciendis laborum totam commodi?
                        </p>
                        <div class="flex">
                            <button onclick="nextPage('2')" class="m-4 px-6 py-3.5 font-['Futura-Bold'] text-black bg-[#FFBF00] rounded-lg text-center hover:bg-orange-500">SOBRE MIM</button>
                            <button onclick="nextPage('5')" type="button" class="m-4 text-[#FFBF00] border border-[#FFBF00] font-['Futura-Bold'] rounded-lg text-sm px-5 text-center hover:text-black hover:bg-[#FFBF00]">CONTATO</button>
                        </div>
                    </div>
                    <div class="w-12/12 xl:w-5/12 grid content-end justify-center">
                        <div class="custom-rounded bg-gradient-to-r from-orange-600 from-10% via-orange-400 via-50% to-yellow-300 to-90% w-[70vh] overflow-auto m-6 flex justify-center items-center">
                            <h1 class="text-9xl z-10 text-white font-['Futura-Bold'] sm:hidden absolute left-0 top-0">LUIZ PEDRO</h1>
                            <img class="w-11/12 z-20" src="{{ asset('img/luiz_principal_no_bg.png') }}" alt="Luiz Pedro">
                            <h1 class="text-7xl z-30 text-[#FFBF00] font-['Futura-Bold'] sm:hidden absolute left-0 bottom-8">PERSONAL</h1>
                            <h1 class="text-9xl z-30 text-[#FFBF00] font-['Futura-Bold'] max-sm:hidden absolute xl:hidden bottom-8">PERSONAL</h1>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Sobre mim --}}
            <section class="section relative bg-[url('/public/img/dumbbells-foreground-gym-environment.png')] bg-no-repeat bg-cover pt-24" id="section2">
                <div class="h-full flex items-center justify-center">
                    <div class="absolute inset-0 bg-black opacity-85"></div>
                    <div class="max-w-[120rem] relative z-10 grid md:flex lg:mx-auto lg:w-full lg:h-auto xl:place-content-between">
                        <div class="gap-6 items-center py-8 px-4 mx-auto lg:flex lg:flex-row-reverse lg:py-16 lg:px-6">
                            <div class="font-light sm:text-lg text-gray-400">
                                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white font-['Futura-Bold']">SOBRE MIM</h2>
                                <p class="font-['Helvetica-Neue']">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue odio urna, at pretium sem sollicitudin nec. Integer tellus enim, ultricies nec faucibus sed, eleifend vel sapien. 
                                    Donec eget fermentum leo. Maecenas in risus a massa laoreet commodo ac vitae arcu. Vestibulum varius nisl libero, non imperdiet ante facilisis sit amet. 
                                </p>
                            </div>
                            <div class="hidden lg:flex gap-4 lg:gap-12 lg:mt-0">
                                <img class="w-full rounded-lg lg:mt-20" src="{{ asset('img/luiz_about.jpg') }}" alt="office content 1">
                            </div>
                            <div class="grid grid-cols-2 lg:flex gap-4 lg:gap-12 mt-8 lg:mt-0">
                                <img class="w-full rounded-lg lg:mb-20" src="{{ asset('img/luiz_perfil.jpg') }}" alt="office content 1">
                                <img class="mt-4 w-full lg:hidden rounded-lg" src="{{ asset('img/luiz_about.jpg') }}" alt="office content 2">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Treinos --}}
            <section class="section relative bg-[url('/public/img/dumbbells-foreground-gym-environment.png')] bg-no-repeat bg-cover pt-24" id="section3">
                <div class="absolute inset-0 bg-black opacity-85"></div>
                <div class="h-full flex items-center justify-center">
                    <div class="container mx-auto relative z-10 grid lg:gap-8 justify-center w-full h-auto place-content-between">
                        <h2 class="font-['Futura-Bold'] text-center uppercase text-4xl my-4 text-white">
                            Treinos
                        </h2>
                        <div class="grid grid-cols-2 lg:grid-cols-4 px-4 gap-8 items-baseline mb-24">
                            <div class="flex flex-col gap-4">
                                <img src="{{ asset('img/undraw_personal_training_0dqn.svg') }}" alt="Orientação" id="card-1" />
                                <span class="font-['Helvetica-Neue'] text-justify text-base font-light sm:text-lg text-gray-400">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                </span>
                            </div>
                            <div class="flex flex-col gap-4">
                                <img src="{{ asset('img/undraw_personal_trainer_re_cnua.svg') }}" alt="Treino em conjunto" id="card-2" />
                                <span class="font-['Helvetica-Neue'] text-justify text-base font-light sm:text-lg text-gray-400">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                </span>
                            </div>
                            <div class="flex flex-col gap-4">
                                <img src="{{ asset('img/undraw_stability_ball_b-4-ia.svg') }}" alt="Treino ao ar livre" id="card-3" />
                                <span class="font-['Helvetica-Neue'] text-justify text-base font-light sm:text-lg text-gray-400">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                </span>
                            </div>
                            <div class="flex flex-col gap-4">
                                <img src="{{ asset('img/undraw_healthy_lifestyle_re_ifwg.svg') }}" alt="Alimentação saúdavel" id="card-4" />
                                <span class="font-['Helvetica-Neue'] text-justify text-base font-light sm:text-lg text-gray-400">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Instagram --}}
            <section class="section relative bg-[url('/public/img/dumbbells-foreground-gym-environment.png')] bg-no-repeat bg-cover pt-24" id="section4">
                <div class="h-full flex items-center justify-center">
                    <div class="absolute inset-0 bg-black opacity-85"></div>
                    <div class="container lg:max-w-5xl mx-auto relative z-10 grid w-full h-auto place-content-between justify-center gap-4">
                        <div class="py-8 px-4 mx-auto lg:px-12 sm:text-center lg:py-16 max-w-screen-md 2xl:max-w-screen-2xl">
                            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white text-center font-['Futura-Bold']"><a class="hover:text-orange-500" href="https://www.instagram.com/luiz_ped" target="_blank">@luiz_ped</a></h2>
                            <div class="hidden md:flex md:justify-center">
                                <div class="w-1/4 flex flex-col">
                                    <div>
                                        <a class="rounded-lg w-1/2" href="{{ asset('img/instagram/photo_1.jpg') }}" data-fancybox="gallery">
                                            <img src="{{ asset('img/instagram/photo_1.jpg') }}" />
                                        </a>
                                    </div>
                                    <div>
                                        <a class="rounded-lg" href="{{ asset('img/instagram/photo_2.jpg') }}" data-fancybox="gallery">
                                            <img src="{{ asset('img/instagram/photo_2.jpg') }}" />
                                        </a>
                                    </div>
                                </div>
                                <div class="w-1/2">
                                    <a class="rounded-lg w-1/2" href="{{ asset('img/instagram/photo_5.jpg') }}" data-fancybox="gallery">
                                        <img src="{{ asset('img/instagram/photo_5.jpg') }}" />
                                    </a>
                                </div>
                                <div class="w-1/4 flex flex-col">
                                    <div>
                                        <a class="rounded-lg w-1/2" href="{{ asset('img/instagram/photo_3.jpg') }}" data-fancybox="gallery">
                                            <img src="{{ asset('img/instagram/photo_3.jpg') }}" />
                                        </a>
                                    </div>
                                    <div>
                                        <a class="rounded-lg w-1/2" href="{{ asset('img/instagram/photo_4.jpg') }}" data-fancybox="gallery">
                                            <img src="{{ asset('img/instagram/photo_4.jpg') }}" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-4 md:hidden">
                                <div class="flex flex-row gap-4 justify-center">
                                    <div class="w-5/12">
                                        <a class="rounded-lg" href="https://www.instagram.com/luiz_ped" target="_blank">
                                            <img src="{{ asset('img/instagram/photo_1.jpg') }}" />
                                        </a>
                                    </div>
                                    <div class="w-5/12">
                                        <a class="rounded-lg" href="https://www.instagram.com/luiz_ped" target="_blank">
                                            <img src="{{ asset('img/instagram/photo_2.jpg') }}" />
                                        </a>
                                    </div>
                                </div>
                                <div class="flex flex-row gap-4 justify-center">
                                    <div class="w-5/12">
                                        <a class="rounded-lg" href="https://www.instagram.com/luiz_ped" target="_blank">
                                            <img src="{{ asset('img/instagram/photo_3.jpg') }}" />
                                        </a>
                                    </div>
                                    <div class="w-5/12">
                                        <a class="rounded-lg" href="https://www.instagram.com/luiz_ped" target="_blank">
                                            <img src="{{ asset('img/instagram/photo_4.jpg') }}" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            {{-- Contato --}}
            @livewire('contact-form-component')

            <footer class="section fp-auto-height bg-white" id="section5">
                <div class="mx-auto w-full max-w-screen-2xl p-4 py-6 lg:py-8">
                    <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="/" class="flex items-center text-black text-4xl font-['Lihataja']">
                            Luiz
                        </a>
                    </div>
                    <div class="grid grid-cols-2 sm:flex sm:flex-row sm:gap-6">
                        <div>
                            <h2 onclick="nextPage('1')" class="mb-6 text-sm font-semibold text-gray-900 uppercase font-['Helvetica-Neue'] cursor-pointer hover:underline">Início</h2>
                        </div>
                        <div>
                            <h2 onclick="nextPage('2')" class="mb-6 text-sm font-semibold text-gray-900 uppercase font-['Helvetica-Neue'] cursor-pointer hover:underline">Sobre mim</h2>
                        </div>
                        <div>
                            <h2 onclick="nextPage('3')" class="mb-6 text-sm font-semibold text-gray-900 uppercase font-['Helvetica-Neue']cursor-pointer hover:underline">Treinos</h2>
                        </div>
                        <div>
                            <h2 onclick="nextPage('4')" class="mb-6 text-sm font-semibold text-gray-900 uppercase font-['Helvetica-Neue'] cursor-pointer hover:underline">Instagram</h2>
                        </div>
                        <div>
                            <h2 onclick="nextPage('5')" class="mb-6 text-sm font-semibold text-gray-900 uppercase font-['Helvetica-Neue'] cursor-pointer hover:underline">Contato</h2>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center font-['Helvetica-Neue']">© 2024 <a href="https://github.com/LeonardoCCastro" class="hover:underline">Leonardo C. Castro</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 sm:justify-center sm:mt-0 items-center">
                        <a href="https://www.facebook.com/leonardocorreiadecastro/" class="text-gray-500 hover:text-gray-900">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                    <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                                </svg>
                            <span class="sr-only">Facebook account</span>
                        </a>
                        <a href="https://github.com/LeonardoCCastro" class="text-gray-500 hover:text-gray-900 ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only">GitHub account</span>
                        </a>
                        <a href="https://www.instagram.com/leonardocorreiadecastro10/" class="text-gray-500 hover:text-gray-900 ms-5">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"  viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                            </svg>  
                            <span class="sr-only">Instagram account</span>
                        </a>
                    </div>
                </div>
                </div>
            </footer>
        </div>            
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/fancybox.js') }}"></script>
    <script src="{{ asset('js/fullpage.js') }}"></script>
    <script src="{{ asset('js/vanilla-tilt.js') }}"></script>
@endsection