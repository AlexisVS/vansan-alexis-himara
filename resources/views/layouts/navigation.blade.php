<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="w-full mx-auto px-4 sm:px-6 xl:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>
                <!-- Navigation Links -->
                <div class="hidden space-x-8 xl:-my-px xl:ml-10 xl:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 xl:-my-px xl:ml-10 xl:flex">
                    <x-nav-link :href="route('dashboard.mailbox.index')" :active="request()->is('dashboard/mailbox*')">
                        Mailbox
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 xl:-my-px xl:ml-10 xl:flex">
                    <x-nav-link :href="route('dashboard.layout.index')" :active="request()->is('dashboard/layout*')">
                        Layout
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 xl:-my-px xl:ml-10 xl:flex">
                    <x-nav-link :href="route('dashboard.home.index')" :active="request()->is('dashboard/home*')">
                        Home
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 xl:-my-px xl:ml-10 xl:flex">
                    <x-nav-link :href="route('dashboard.blog.index')" :active="request()->is('dashboard/blog*')">
                        Blog
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 xl:-my-px xl:ml-10 xl:flex">
                    <x-nav-link :href="route('dashboard.booking-form.index')" :active="request()->is('dashboard/booking-form*')">
                        Booking Form
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 xl:-my-px xl:ml-10 xl:flex">
                    <x-nav-link :href="route('dashboard.contact.index')" :active="request()->is('dashboard/contact*')">
                        Contact
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 xl:-my-px xl:ml-10 xl:flex">
                    <x-nav-link :href="route('dashboard.gallery.index')" :active="request()->is('dashboard/gallery*')">
                        Gallery
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 xl:-my-px xl:ml-10 xl:flex">
                    <x-nav-link :href="route('dashboard.list-room.index')" :active="request()->is('dashboard/list-room*')">
                        List Room
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 xl:-my-px xl:ml-10 xl:flex">
                    <x-nav-link :href="route('dashboard.room.index')" :active="request()->is('dashboard/room*')">
                        Room
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 xl:-my-px xl:ml-10 xl:flex">
                    <x-nav-link :href="route('dashboard.team.index')" :active="request()->is('dashboard/team*')">
                        Team
                    </x-nav-link>
                </div>
                
            </div>
            
            <!-- Settings Dropdown -->
            <div class="hidden xl:flex xl:items-center xl:pl-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-display font-medium text-gray-400 hover:text-himaraGold-500 hover:border-gray-300 focus:outline-none focus:text-himaraGold-500 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
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
            <div class="-mr-2 flex items-center xl:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-himaraGold-500 hover:text-himaraGold-600 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-himaraGold-600 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden xl:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard.mailbox.index')" :active="request()->is('dashboard/mailbox*')">
                Mailbox
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard.layout.index')" :active="request()->is('dashboard/layout*')">
                Layout
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard.home.index')" :active="request()->is('dashboard/home*')">
                Home
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard.blog.index')" :active="request()->is('dashboard/blog*')">
                Blog
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard.booking-form.index')" :active="request()->is('dashboard/booking-form*')">
                Booking Form
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard.contact.index')" :active="request()->is('dashboard/contact*')">
                Contact
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard.gallery.index')" :active="request()->is('dashboard/gallery*')">
                Gallery
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard.list-room.index')" :active="request()->is('dashboard/list-room*')">
                List Room
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard.room.index')" :active="request()->is('dashboard/room*')">
                Room
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard.team.index')" :active="request()->is('dashboard/team*')">
                Team
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-himaraGold-500">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-himaraGold-400">{{ Auth::user()->email }}</div>
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
