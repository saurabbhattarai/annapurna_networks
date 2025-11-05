<div class="py-12 px-4 border-t border-gray-200 mt-16">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Trusted by Industry Leaders
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Our platform powers hospitality solutions across Nepal and beyond
            </p>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
            <!-- Stat 1 -->
            <div
                class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-blue-100 hover:border-blue-400">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v-1h8v1zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                        </svg>
                    </div>
                    <span
                        class="text-sm font-semibold text-blue-600 bg-blue-100 px-3 py-1 rounded-full">Properties</span>
                </div>
                <div class="mb-2">
                    <div class="text-5xl font-bold text-blue-600 mb-1" data-counter="500">0</div>
                    <span class="text-blue-600 font-semibold">+</span>
                </div>
                <p class="text-gray-600 text-base font-medium">Properties Served</p>
                <div
                    class="mt-4 h-1 w-12 bg-gradient-to-r from-blue-500 to-blue-300 rounded-full group-hover:w-full transition-all duration-300">
                </div>
            </div>

            <!-- Stat 2 -->
            <div
                class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-blue-100 hover:border-blue-400">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                        </svg>
                    </div>
                    <span class="text-sm font-semibold text-blue-600 bg-blue-100 px-3 py-1 rounded-full">Support</span>
                </div>
                <div class="mb-2">
                    <div class="text-5xl font-bold text-blue-600">24/7</div>
                </div>
                <p class="text-gray-600 text-base font-medium">Expert Support Available</p>
                <div
                    class="mt-4 h-1 w-12 bg-gradient-to-r from-blue-500 to-blue-300 rounded-full group-hover:w-full transition-all duration-300">
                </div>
            </div>

            <!-- Stat 3 -->
            <div
                class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-blue-100 hover:border-blue-400">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <span
                        class="text-sm font-semibold text-blue-600 bg-blue-100 px-3 py-1 rounded-full">Experience</span>
                </div>
                <div class="mb-2">
                    <div class="text-5xl font-bold text-blue-600" data-counter="15">0</div>
                    <span class="text-blue-600 font-semibold">+</span>
                </div>
                <p class="text-gray-600 text-base font-medium">Years of Industry Experience</p>
                <div
                    class="mt-4 h-1 w-12 bg-gradient-to-r from-blue-500 to-blue-300 rounded-full group-hover:w-full transition-all duration-300">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Intersection Observer for animation trigger
    const observerOptions = {
        threshold: 0.3,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.dataset.animated) {
                entry.target.dataset.animated = 'true';
                animateCounters(entry.target);
            }
        });
    }, observerOptions);

    function animateCounters(section) {
        const counters = section.querySelectorAll('[data-counter]');

        counters.forEach(counter => {
            const target = parseInt(counter.dataset.counter);
            const duration = 2000; // 2 seconds
            const start = Date.now();

            function updateCounter() {
                const now = Date.now();
                const progress = Math.min((now - start) / duration, 1);

                // Easing function for smooth animation
                const easeOut = 1 - Math.pow(1 - progress, 3);
                const current = Math.floor(target * easeOut);

                counter.textContent = current;

                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            }

            updateCounter();
        });
    }

    // Start observing all stat sections
    document.querySelectorAll('[data-counter]').forEach(counter => {
        observer.observe(counter.closest('div').closest('div'));
    });
</script>
