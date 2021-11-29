<nav class="bg-gray-500">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            {{-- Menu despues del logo --}}
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-8 w-auto" src="https://www.donvalente.com.mx/wp-content/uploads/2014/12/logo-blanco.png" alt="LoGo">
                    <img class="hidden lg:block h-8 w-auto" src="https://www.donvalente.com.mx/wp-content/uploads/2014/12/logo-blanco.png" alt="LoGo">
                </div>
            </div>
          
            <!-- MENU DEL PERFIL-->
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                @auth
                    <!-- Profile dropdown -->
                    {{-- Se declara x-data para crear un objeto (open)--}}
                    <div class="ml-3 relative" x-data="{ open: false}">
                        <div>
                            {{-- Al objeto Open le cambia el valor al precionar el boton con el evento en x-on:click --}}
                            <button x-on:click="open = true" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
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
                        {{-- De acuerdo al valor del objeto este se muestra o no (true o false)--}}
                        {{-- Con el metodo away del evento x-on:click el valor del objeto sera false--}}
                        <div x-show="open" x-on:click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Mi Perfil</a>
                            <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    Cerrar sesión
                                </a>
                            </form>    
                        </div>
                    </div>
                @else
                    <!-- REGISTRARSE O LOGUEARSE-->
                    <div>
                        <a href="{{ route('login') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Iniciar sesión</a>
                        <a href="{{ route('register') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Registrarse</a> 
                        <a href="{{ route('nosotros') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Nosotros</a> 
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
