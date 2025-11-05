<!-- Hero Section Component -->
<section class="relative w-full h-full overflow-hidden">
    <!-- Animated background elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-200 rounded-full blur-3xl opacity-20 -mr-48 -mt-48 pulse-animation"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-100 rounded-full blur-3xl opacity-15 -ml-48 -mb-48 pulse-animation" style="animation-delay: 1s;"></div>
    <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-purple-100 rounded-full blur-3xl opacity-10 -ml-32 -mt-32 pulse-animation" style="animation-delay: 0.5s;"></div>

    <div class="relative z-10 h-full flex items-center px-6 sm:px-8 lg:px-12">
        <div class="w-full max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <!-- Left content -->
                <div class="space-y-6 slide-in-left">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full border border-blue-200">
                        <div class="w-2 h-2 bg-blue-600 rounded-full pulse-animation"></div>
                        <span class="text-sm font-medium text-blue-700">Elevating Hospitality Tech</span>
                    </div>

                    <!-- Main heading -->
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                        Elevating Hospitality Experiences Through Technology
                    </h1>

                    <!-- Description -->
                    <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                        Delivering fully managed IT solutions crafted exclusively for Nepal's hospitality sector — from
                        boutique hotels to luxury resorts — ensuring exceptional service, seamless connectivity, and a
                        superior guest experience powered by technology.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                            Get Started
                        </button>
                        <button class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg border-2 border-blue-600 hover:bg-blue-50 transition-all duration-300 hover:scale-105">
                            Learn More
                        </button>
                    </div>

                    <!-- Trust indicators -->
                    <div class="pt-6 border-t border-gray-200">
                        <p class="text-sm text-gray-600 mb-3 font-medium">Trusted by leading hospitality brands</p>
                        <div class="flex flex-wrap gap-4 items-center">
                            <div class="h-7 bg-gray-300 rounded px-3 flex items-center text-xs font-semibold text-gray-700">Hotel Chain 1</div>
                            <div class="h-7 bg-gray-300 rounded px-3 flex items-center text-xs font-semibold text-gray-700">Resort Group</div>
                            <div class="h-7 bg-gray-300 rounded px-3 flex items-center text-xs font-semibold text-gray-700">Hospitality Co</div>
                        </div>
                    </div>
                </div>

                <!-- Right side - Animated Network Visualization -->
                <div class="relative flex items-center justify-center slide-in-right" style="animation-delay: 0.2s;">
                    <div class="relative w-full max-w-lg aspect-square">
                        <!-- SVG Network Animation -->
                        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 400 400">
                            <!-- Connection lines -->
                            <line x1="200" y1="200" x2="320" y2="120" stroke="#3B82F6" stroke-width="2" class="network-line" opacity="0.3"/>
                            <line x1="200" y1="200" x2="320" y2="280" stroke="#3B82F6" stroke-width="2" class="network-line" opacity="0.3" style="animation-delay: 0.2s;"/>
                            <line x1="200" y1="200" x2="80" y2="120" stroke="#3B82F6" stroke-width="2" class="network-line" opacity="0.3" style="animation-delay: 0.4s;"/>
                            <line x1="200" y1="200" x2="80" y2="280" stroke="#3B82F6" stroke-width="2" class="network-line" opacity="0.3" style="animation-delay: 0.6s;"/>
                            <line x1="200" y1="200" x2="200" y2="80" stroke="#3B82F6" stroke-width="2" class="network-line" opacity="0.3" style="animation-delay: 0.8s;"/>
                        </svg>

                        <!-- Center hub -->
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-gradient-to-br from-blue-600 to-blue-800 rounded-3xl shadow-2xl flex items-center justify-center float-animation">
                            <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>

                        <!-- Floating network nodes -->
                        <div class="absolute top-12 left-1/2 -translate-x-1/2 w-20 h-20 bg-white rounded-xl shadow-lg flex items-center justify-center float-animation" style="animation-delay: 0.5s;">
                            <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                            </svg>
                        </div>

                        <div class="absolute top-24 right-8 w-24 h-24 bg-white rounded-xl shadow-lg p-4 float-animation" style="animation-delay: 0.3s;">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-600">99.9%</div>
                                <div class="text-xs text-gray-600 mt-1">Uptime</div>
                            </div>
                        </div>

                        <div class="absolute top-24 left-8 w-20 h-20 bg-white rounded-xl shadow-lg flex items-center justify-center float-animation" style="animation-delay: 0.7s;">
                            <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                            </svg>
                        </div>

                        <div class="absolute bottom-24 right-8 w-20 h-20 bg-white rounded-xl shadow-lg flex items-center justify-center float-animation" style="animation-delay: 0.9s;">
                            <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>

                        <div class="absolute bottom-24 left-8 w-20 h-20 bg-white rounded-xl shadow-lg flex items-center justify-center float-animation" style="animation-delay: 0.4s;">
                            <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                            </svg>
                        </div>

                        <!-- Pulsing dots for connectivity -->
                        <div class="absolute top-1/4 left-1/4 w-3 h-3 bg-blue-500 rounded-full pulse-animation"></div>
                        <div class="absolute top-1/4 right-1/4 w-3 h-3 bg-blue-500 rounded-full pulse-animation" style="animation-delay: 0.3s;"></div>
                        <div class="absolute bottom-1/4 left-1/4 w-3 h-3 bg-blue-500 rounded-full pulse-animation" style="animation-delay: 0.6s;"></div>
                        <div class="absolute bottom-1/4 right-1/4 w-3 h-3 bg-blue-500 rounded-full pulse-animation" style="animation-delay: 0.9s;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>