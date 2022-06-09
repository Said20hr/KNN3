<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 pt-3">
    <!-- Primary Navigation Menu -->
    <div class="border-b border-gray-100">
        <div class="max-w-screen-xl mx-auto">
            <div class="flex justify-between h-16">
            <div class="hidden sm:flex">
                <!-- Logo -->
                <x-jet-nav-link href="{{route('dashboard')}}"   >
                    <h2 class="text-xl flex">
                        <div class="text-blue-500 font-semibold text-3xl">Investment</div>
                        <div class="text-orange-500 font-semibold text-3xl">Platform</div>
                    </h2>
                </x-jet-nav-link>
            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Settings Dropdown -->
                <div class="ml-2 relative">
                    <x-jet-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                         src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400 ">
                                {{ __('إدارة الحساب') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('الملف الشخصي ') }}
                            </x-jet-dropdown-link>
                            <x-jet-dropdown-link href="{{ route('home') }}">
                                {{ __('تصفح الموقع ') }}
                            </x-jet-dropdown-link>



                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('تسجيل خروج') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        </div>
    </div>
    <!-- Primary Navigation SubMenu -->
    <div class="max-w-screen-xl mx-auto px-6">
        <x-jet-nav-link href="{{route('dashboard')}}" class="mr-5"  :active="request()->routeIs('dashboard')" >
            <h2 class="text-lg py-5 {{ (request()->is('dashboard')) ? 'text-indigo-600 font-weight-bolder' : 'fw-medium text-gray-800' }}">
                Dashboard
            </h2>
        </x-jet-nav-link>
        <x-jet-nav-link href="{{route('profile.show')}}" class="mr-5" :active="request()->routeIs('profile.show')" >
            <h2 class="text-lg py-5  {{ (request()->is('user/profile')) ? 'text-indigo-600 font-weight-bolder' : 'fw-medium text-gray-800' }}">
                Profile
            </h2>
        </x-jet-nav-link>
        <x-jet-nav-link href="{{route('investment')}}" class="mr-5" :active="request()->routeIs('investment')" >
            <h2 class="text-lg py-5 {{ (request()->is('user/investissement*')) ? 'text-indigo-600 font-weight-bolder' : 'fw-medium text-gray-800' }}">
                Investments
            </h2>
        </x-jet-nav-link>
        <x-jet-nav-link href="{{route('cashier')}}" class="mr-5" :active="request()->routeIs('cashier')" >
            <h2 class="text-lg py-5 {{ (request()->is('user/cashier*')) ? 'text-indigo-600 font-weight-bolder' : 'fw-medium text-gray-800' }}">
                Cashier
            </h2>
        </x-jet-nav-link>

        <x-jet-nav-link href="{{route('messages')}}" class="mr-5" :active="request()->routeIs('messages')">
            <h2 class="text-lg py-5 {{ (request()->is('user/messages*')) ? 'text-indigo-600 font-weight-bolder' : 'fw-medium text-gray-800' }}">
                Messages
            </h2>
        </x-jet-nav-link>
        <x-jet-nav-link href="{{route('notes')}}" class="mr-5" :active="request()->routeIs('notes')">
            <h2 class="text-lg py-5 {{ (request()->is('notes*')) ? 'text-indigo-600 font-weight-bolder' : 'fw-medium text-gray-800' }}">
                News
            </h2>
        </x-jet-nav-link>
    </div>
    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <!-- Navigation Links -->
            <x-jet-responsive-nav-link href="{{route('dashboard')}}"  :active="request()->routeIs('dashboard')" >
                <h2 class="text-xl leading-tight mx-3 py-2 {{ (request()->is('dashboard')) ? 'text-indigo-600 font-weight-bolder' : 'fw-medium' }}">
                    Home
                </h2>
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{route('profile.show')}}" :active="request()->routeIs('profile.show')" >
                <h2 class="text-xl leading-tight mx-3 py-2  {{ (request()->is('user/profile')) ? 'text-indigo-600 font-weight-bolder' : 'fw-medium' }}">
                   Profile
                </h2>
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{route('investment')}}" :active="request()->routeIs('investment')" >
                <h2 class="text-xl leading-tight mx-3 py-2 {{ (request()->is('investissement')) ? 'text-indigo-600 font-weight-bolder' : 'fw-medium' }}">
                    Investment
                </h2>
            </x-jet-responsive-nav-link>

            <x-jet-responsive-nav-link href="{{route('messages')}}" :active="request()->routeIs('messages')">
                <h2 class="font-semibold text-xl mx-3  py-2{{ (request()->is('user/messages')) ? 'text-indigo-600 font-weight-bolder' : 'fw-medium' }}">
                    Messages
                </h2>
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{route('notes')}}">
                <h2 class="font-semibold text-xl mx-3 py-2">
                    News
                </h2>
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="flex-shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif
                <div>
                    <div class="font-medium text-base text-gray-800 mx-3">{{ Auth::user()->name }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-2 text-xl leading-tight mx-3">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log out') }}
                    </x-jet-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
<!-- Navigation Links -->

