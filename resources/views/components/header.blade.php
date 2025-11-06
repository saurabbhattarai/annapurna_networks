<header class="bg-white border-b border-gray-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo & Company Name -->
            <div class="flex items-center gap-2">
                <img src="{{ asset('company_logo.jpeg') }}" alt="Company Logo"
                    class="w-10 h-10 object-cover rounded-lg " />
                <h1 class="text-lg font-semibold text-gray-700">
                    Annapurna <span class="text-blue-600">Networks</span>
                </h1>

            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">
                    Home
                </a>
                <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">
                    About
                </a>
                <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">
                    Services
                </a>
                <a href="/blog" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">
                    Blogs
                </a>
                <a href="#" class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">
                    Contact
                </a>
            </nav>

            <!-- Right Side Actions -->
            <div class="flex items-center gap-4">
                {{-- <a href="#"
                    class="hidden sm:inline-block text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200">
                    Sign in
                </a>
                <a href="#"
                    class="inline-block px-6 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors duration-200">
                    Get Started
                </a> --}}

                <div class="flex items-center gap-2 text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 text-blue-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 6.75c0-1.242.993-2.25 2.25-2.25h2.25a2.25 2.25 0 012.25 2.25v.75a.75.75 0 01-.75.75H6a.75.75 0 00-.75.75V9c0 4.28 3.47 7.75 7.75 7.75h.75a.75.75 0 00.75-.75v-1.5a.75.75 0 01.75-.75h.75a2.25 2.25 0 012.25 2.25v2.25a2.25 2.25 0 01-2.25 2.25A15.75 15.75 0 013.75 8.25V6.75z" />
                    </svg>
                    <span class="font-medium text-sm sm:text-base">
                        Contact: <span class="font-semibold text-gray-900">+977-9856067235</span>
                    </span>
                </div>



                <!-- Mobile Menu Button -->
                <button class="md:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100" aria-label="Open menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Menu (optional - hidden by default) -->
    <div class="hidden md:hidden border-t border-gray-100">
        <div class="px-4 py-4 space-y-3">
            <a href="#" class="block text-gray-700 hover:text-blue-600 font-medium py-2">Solutions</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600 font-medium py-2">Products</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600 font-medium py-2">Pricing</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600 font-medium py-2">Docs</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600 font-medium py-2">About</a>
        </div>
    </div>
</header>
