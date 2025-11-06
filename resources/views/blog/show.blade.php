<x-layouts.app>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <article class="max-w-4xl mx-auto">
            <!-- Hero Section -->
            <div class="mb-8">
                @if ($post->featured_image)
                    <img src="{{ asset('storage/' . $post->featured_image) }}" 
                         alt="{{ $post->title }}"
                         class="w-full h-[500px] object-cover rounded-lg shadow-lg">
                @endif
                <h1 class="text-4xl font-bold mt-8 mb-4">{{ $post->title }}</h1>
                <div class="flex items-center text-gray-600 mb-8">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        {{ $post->author->name }}
                    </div>
                    <span class="mx-3">|</span>
                    {{-- <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        {{ $post->published_at->format('F j, Y') }}
                    </div> --}}
                </div>
            </div>

            <!-- Content -->
            <div class="prose prose-lg max-w-none blog-content">
                {!! $post->content !!}
            </div>

            <!-- Related Posts -->
            @if($relatedPosts->isNotEmpty())
            <div class="mt-16 pt-8 border-t border-gray-200">
                <h2 class="text-2xl font-bold mb-6">Related Posts</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedPosts as $relatedPost)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        @if($relatedPost->featured_image)
                        <img src="{{ asset('storage/' . $relatedPost->featured_image) }}" 
                             alt="{{ $relatedPost->title }}"
                             class="w-full h-48 object-cover">
                        @endif
                        <div class="p-4">
                            <h3 class="font-semibold mb-2">
                                <a href="{{ route('blog.show', $relatedPost->slug) }}" 
                                   class="text-gray-900 hover:text-blue-600">
                                    {{ $relatedPost->title }}
                                </a>
                            </h3>
                            <div class="text-sm text-gray-600">
                                {{ $relatedPost->published_at->format('F j, Y') }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Back to Blog -->
            <div class="mt-8">
                <a href="{{ route('blog.index') }}" 
                   class="inline-flex items-center text-blue-600 hover:text-blue-800">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Back to Blog
                </a>
            </div>
        </article>
    </div>
</x-layouts.app>