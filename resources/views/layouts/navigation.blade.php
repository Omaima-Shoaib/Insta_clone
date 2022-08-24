<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('posts.index') }}">
                     
                       <img  style='width:100px' src="data:image/png;base64,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" alt="">
                        {{-- <x-application-logo class="block h-10 w-auto fill-current text-gray-600" /> --}}
                    </a>
                </div>

                <!-- Navigation Links -->
                {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div> --}}
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">

                        <!-- Authentication (for profile)-->
                        <form method="POST" action="{{ route('users.index') }}"> 
                            @csrf

                            <x-dropdown-link :href="route('users.index')" >
                                    <!-- onclick="event.preventDefault(); this.closest('form').submit();"> -->
                                {{ __('My Profile') }}
                            </x-dropdown-link>
                        </form>


                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
