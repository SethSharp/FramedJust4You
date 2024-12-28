<nav>
    <div
        x-data="{
            sidebarOpen: false
        }"
    >
        <div class="bg-gradient-to-r from-primary-600 to-primary-500">
            <div
                class="relative flex w-full items-center justify-between h-32 lg:border-b lg:border-primary-400 lg:border-opacity-25"
            >
                <div class="grid grid-cols-3 w-full">
                    <div class="w-52 md:w-72 col-span-1 px-2 pb-2">
                        <x-app-logo/>
                    </div>

                    <div class="hidden lg:block my-auto col-span-2">
                        <div class="flex gap-x-8 justify-end pr-8">
                            <x-links.nav
                                href="{{route('home')}}"
                                active="{{ request()->route()?->getName() === 'home' }}"
                            >
                                Home
                            </x-links.nav>

                            <x-links.nav
                                href="{{route('about')}}"
                                active="{{ request()->route()?->getName() === 'about' }}"
                            >
                                About
                            </x-links.nav>

                            <x-links.nav
                                href="{{route('custom-framing')}}"
                                active="{{ request()->route()?->getName() === 'custom-framing' }}"
                            >
                                Framing
                            </x-links.nav>

                            <x-links.nav
                                href="{{route('printing')}}"
                                active="{{ request()->route()?->getName() === 'printing' }}"
                            >
                                Printing
                            </x-links.nav>

                            <x-links.services-mega-menu/>

                            <a
                                href="{{route('contact')}}"
                                class="bg-primary-600 p-2 rounded text-white hover:bg-primary-700 transition"
                            >
                                Contact
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex lg:hidden pr-5">
                    <!-- Mobile menu button -->
                    <button
                        class="relative inline-flex items-center justify-center rounded-md bg-primary-600 p-2 text-primary-200 hover:bg-primary-500 hover:bg-opacity-75 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-primary-600"
                    >
                        <span class="sr-only">Open main menu</span>

                        <div x-show="!sidebarOpen" x-on:click="sidebarOpen = true" class="transition">
                            <x-icons.bars-3/>
                        </div>

                        <div x-show="sidebarOpen" x-on:click="sidebarOpen = false" class="transition">
                            <x-icons.x-mark/>
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <div x-show="sidebarOpen" x-transition class="lg:hidden absolute w-full z-30 bg-primary-600">
            <div class="border-t border-primary-700">
                <div class="space-y-4 px-2 my-4">
                    <x-links.nav
                        href="{{route('home')}}"
                        active="{{ request()->route()?->getName() === 'home' }}"
                    >
                        Home
                    </x-links.nav>

                    <x-links.nav
                        href="{{route('about')}}"
                        active="{{ request()->route()?->getName() === 'about' }}"
                    >
                        About
                    </x-links.nav>

                    <x-links.nav
                        href="{{route('custom-framing')}}"
                        active="{{ request()->route()?->getName() === 'custom-framing' }}"
                    >
                        Framing
                    </x-links.nav>

                    <x-links.nav
                        href="{{route('printing')}}"
                        active="{{ request()->route()?->getName() === 'printing' }}"
                    >
                        Printing
                    </x-links.nav>

                    <x-links.services-mega-menu/>

                    <x-links.nav
                        href="{{route('contact')}}"
                        active="{{ request()->route()?->getName() === 'contact' }}"
                    >
                        Contact
                    </x-links.nav>
                </div>
            </div>
        </div>
    </div>
</nav>
