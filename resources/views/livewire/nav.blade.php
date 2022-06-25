<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>

            <div>
                <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                    <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start"
                        aria-label="Global">
                        <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                            <div class="flex items-center justify-between w-full md:w-auto">
                                <a href="https://www.donvalente.com.mx/">
                                    <img class="h-8 w-auto sm:h-10"
                                        src="https://d2r9epyceweg5n.cloudfront.net/stores/001/008/550/rte/logo-01.jpg">
                                </a>
                                <div class="-mr-2 flex items-center md:hidden">
                                    <button type="button"
                                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                        aria-expanded="false">
                                        <!-- Heroicon name: outline/menu -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        @auth
                            <!-- Profile dropdown -->
                            {{-- Se declara x-data para crear un objeto (open) --}}
                            <div class="ml-3 relative" x-data="{ open: false }">
                                <div>
                                    {{-- Al objeto Open le cambia el valor al precionar el boton con el evento en x-on:click --}}
                                    <button x-on:click="open = true" type="button"
                                        class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}"
                                            alt="">
                                    </button>
                                </div>

                                <!--
                                Dropdown menu, show/hide based on menu state.

                                Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                                Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                            -->
                                {{-- De acuerdo al valor del objeto este se muestra o no (true o false) --}}
                                {{-- Con el metodo away del evento x-on:click el valor del objeto sera false --}}
                                <div x-show="open" x-on:click.away="open = false"
                                    class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem" tabindex="-1" id="user-menu-item-0">Mi Perfil</a>
                                    <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                                            role="menuitem" tabindex="-1" id="user-menu-item-2"
                                            onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                            Cerrar sesión
                                        </a>
                                    </form>
                                </div>
                            </div>
                        @else
                            <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">

                                <a href="{{ route('register') }}"
                                    class="font-medium text-gray-500 hover:text-gray-900">Registrar</a>

                                <a href="{{ route('login') }}"
                                    class="font-medium text-yellow-600 hover:text-yellow-500">Ingresar</a>
                            </div>
                        @endauth
                    </nav>
                </div>

                <!--
                    Mobile menu, show/hide based on menu open state.
        
                    Entering: "duration-150 ease-out"
                    From: "opacity-0 scale-95"
                    To: "opacity-100 scale-100"
                    Leaving: "duration-100 ease-in"
                    From: "opacity-100 scale-100"
                    To: "opacity-0 scale-95"
                -->
                <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                    <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                        <div class="px-5 pt-4 flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto"
                                    src="https://d2r9epyceweg5n.cloudfront.net/stores/001/008/550/rte/logo-01.jpg"
                                    alt="">
                            </div>
                            <div class="-mr-2">
                                <button type="button"
                                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="px-2 pt-2 pb-3 space-y-1">
                            <a href="#"
                                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Nosotros</a>

                            <a href="{{ route('register') }}"
                                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Registrar</a>
                        </div>

                        <a href="{{ route('login') }}"
                            class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100">
                            Ingresar
                        </a>
                    </div>
                </div>
            </div>

            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <h1 class="pb-5 text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">DON VALENTE NIETO, MAESTRO ALFARERO</span>
                    </h1>
                    <p
                        class="mt-3 pb-5 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        "LA GRACIA DEL CIELO HACE QUE, EN RAROS MOMENTOS DE INSPIRACION, AJENOS A SU VOLUNTAD, EL ARTE
                        NAZCA INCONSCIENTEMENTE
                        DE LA OBRA DE SU MANO, PERO LA BASE DE UN BUEN TRABAJO DE ARTESANO ES INDISPENSABLE PARA TODO
                        ARTISTA."
                    </p>

                    <p
                        class="mt-3 pb-4 pt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-3">
                        - WALTER GROPIUS
                    </p>
                </div>
            </main>
        </div>
    </div>

    <div class="lg:absolute lg:inset-y-1 lg:right-1 lg:w-1/2">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
            src="https://cdn.shopify.com/s/files/1/0745/1177/files/DSC_0118_1024x1024.JPG?10266644628780745932"
            alt="">
    </div>
</div>
