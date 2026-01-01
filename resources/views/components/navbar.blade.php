<nav id="navbar" class="sticky top-0 z-50 w-full transition-all duration-300 bg-navbar-bg dark:bg-navbar-bg-dark border-b border-gray-100 dark:border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">

            <div class="flex-shrink-0 flex items-center gap-3 cursor-pointer">
                <div class="w-10 h-10 rounded-full bg-main-bg flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('image/ikabri.png') }}" alt="Logo" class="w-full h-full object-cover">
                </div>
                <a href="/" class="font-heading font-bold text-xl tracking-tight text-primary-text dark:text-primary-text-dark uppercase">
                    IKABRI UM
                </a>
            </div>

            <div class="hidden lg:flex items-center space-x-8">
                <div class="flex space-x-6">
                    <x-nav-link href="#" active>
                        Beranda
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </x-nav-link>
                    <x-nav-link href="#">
                        Profil
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </x-nav-link>
                    <x-nav-link href="#">
                        Proker
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </x-nav-link>
                    <x-nav-link href="#">
                        Galeri
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </x-nav-link>
                </div>

                <!-- Actions -->
                <div class="flex items-center space-x-4 pl-4 border-l border-gray-200 dark:border-gray-700">
                    <!-- Dark Mode Toggle -->
                    <button type="button" id="theme-toggle" class="p-2 rounded-full text-slate-900 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors focus:outline-none">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 100 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    </button>

                    <!-- Search -->
                    <button class="p-2 rounded-full text-slate-900 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex items-center lg:hidden space-x-4">
                <button type="button" id="theme-toggle-mobile" class="p-2 rounded-full text-slate-900 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                    <svg id="theme-toggle-dark-icon-mobile" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon-mobile" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 100 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                </button>

                <button id="mobile-menu-btn" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 dark:text-gray-200 hover:text-primary hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none transition-colors">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon: Menu -->
                    <svg id="icon-menu-open" class="h-6 w-6 block" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon: X -->
                    <svg id="icon-menu-close" class="h-6 w-6 hidden" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden absolute top-20 left-0 w-full bg-navbar-bg dark:bg-navbar-bg-dark border-b border-gray-100 dark:border-gray-800 shadow-xl">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-secondary hover:bg-gray-50 dark:hover:bg-gray-800">Beranda</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-primary-text dark:text-primary-text-dark hover:text-secondary hover:bg-gray-50 dark:hover:bg-gray-800">Profil</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-primary-text dark:text-primary-text-dark hover:text-secondary hover:bg-gray-50 dark:hover:bg-gray-800">Proker</a>
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-primary-text dark:text-primary-text-dark hover:text-secondary hover:bg-gray-50 dark:hover:bg-gray-800">Galeri</a>
        </div>
    </div>
</nav>
