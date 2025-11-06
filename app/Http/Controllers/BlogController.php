<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::query()
            ->where('is_published', true)
            ->latest()
            ->with(['author']) // Eager load relationships
            ->paginate(9);

        $featuredPost = Post::query()
            ->where('is_published', true)
            ->whereNotNull('featured_image')
            ->latest()
            ->first();

        return view('blog.index', compact('posts', 'featuredPost'));
    }

    public function show($slug)
    {
        $post = Post::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->with(['author']) // Eager load relationships
            ->firstOrFail();

        $relatedPosts = Post::query()
            ->where('is_published', true)
            ->where('id', '!=', $post->id)
            ->latest()
            ->take(3)
            ->get();

        return view('blog.show', compact('post', 'relatedPosts'));
    }
}
