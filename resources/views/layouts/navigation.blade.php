<nav x-data="{ open: false }" class="border-b border-gray-300" style="background-color: #0a1120; color: rgb(219, 219, 219)">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    
                    <a href="{{ route('dashboard') }}">
                        LOGO
                    </a>

                </div>

                <!-- Navigation Links -->
                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <div class="navitem {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}">
                            {{ __('Dashboard') }}
                        </a>
                    </div>
                </div>

                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <div class="navitem {{ request()->routeIs('categories') ? 'active' : '' }}">
                        <a>
                            Categories
                        </a>
                    </div>
                </div>

                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <div class="navitem {{ request()->routeIs('series') ? 'active' : '' }}">
                        <a>
                            {{__('Series')}}
                        </a>
                    </div>
                </div>

                
            </div>

            @auth
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-200 hover:text-gray-100 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>

                        </button>
                    </x-slot>

                    <x-slot name="content" style="background-color: rgb(55, 55, 55);" >
                        <!-- Authentication -->
                            @csrf
                            <form method="GET" action="{{ route('myprofile') }}">
                            <x-dropdown-link :href="route('myprofile')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('My Profile') }}
                            </x-dropdown-link>
                            </form>
                            
                            <form method="POST" action="{{ route('logout') }}">
                            <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                            </form>

                    </x-slot>
                </x-dropdown>
            </div>
            @endauth
        </div>

        @guest
        <a href="{{ route('login') }}">Entrar</a>
        @endguest
        
</nav>
<style>
    .navitem{
        display: inline-flex; 
        padding-left: 0.25rem;
        padding-right: 0.25rem; 
        padding-top: 0.25rem; 
        transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform; 
        transition-duration: 150ms; 
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); 
        color: rgb(200, 200, 200)        font-size: 0.875rem;
        line-height: 1.25rem; 
        font-weight: 500; 
        line-height: 1.25rem; 
        align-items: center; 
        border-bottom-width: 2px; 
        border-color: transparent; 
  
    }
    .active{
        display: inline-flex; 
        padding-left: 0.25rem;
        padding-right: 0.25rem; 
        padding-top: 0.25rem; 
        transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform; 
        transition-duration: 150ms; 
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); 
        color: rgb(200, 200, 200)        font-size: 0.875rem;
        line-height: 1.25rem; 
        font-weight: 500; 
        line-height: 1.25rem; 
        align-items: center; 
        border-bottom-width: 5px; 
        border-color: rgb(211, 162, 48)  ; 

    }

    .navitem:hover{
        color: rgb(255, 255, 255)     ;
    }



</style>