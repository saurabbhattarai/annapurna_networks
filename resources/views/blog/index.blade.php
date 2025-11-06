<x-layouts.app>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Blog Posts</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    @if ($post->featured_image)
                        <img src="{{ asset('storage/' . $post->featured_image) }}" 
                             alt="{{ $post->title }}"
                             class="w-full h-48 object-cover">
                    @endif
                    
                    <div class="p-6">
                        <h2 class="text-xl font-semibold mb-2">
                            <a href="{{ route('blog.show', $post->slug) }}" 
                               class="text-gray-900 hover:text-blue-600">
                                {{ $post->title }}
                            </a>
                        </h2>
                        
                        {{-- <div class="text-gray-600 text-sm mb-4">
                            By {{ $post->author->name }} | 
                            {{ $post->published_at->format('F j, Y') }}
                        </div> --}}
                        
                        <p class="text-gray-700 mb-4">
                            {{ Str::limit(strip_tags($post->content), 150) }}
                        </p>
                        
                        <a href="{{ route('blog.show', $post->slug) }}" 
                           class="text-blue-600 hover:text-blue-800">
                            Read More →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    </div>
</x-layouts.app>