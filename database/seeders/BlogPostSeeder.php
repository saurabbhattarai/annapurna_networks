<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BlogPostSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user if it doesn't exist
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        // Create sample blog posts
        $posts = [
            [
                'title' => 'Welcome to Our Blog',
                'content' => '<p>Welcome to our new blog! We are excited to share our thoughts and insights with you.</p>
                            <h2>What to Expect</h2>
                            <p>Here, you will find articles about:</p>
                            <ul>
                                <li>Technology trends</li>
                                <li>Industry insights</li>
                                <li>Best practices</li>
                                <li>Tips and tutorials</li>
                            </ul>',
                'is_published' => true,
                'published_at' => now(),
            ],
            [
                'title' => 'Getting Started with Laravel',
                'content' => '<p>Laravel is a powerful PHP framework that makes web development enjoyable and creative.</p>
                            <h2>Key Features</h2>
                            <ul>
                                <li>Elegant syntax</li>
                                <li>Robust tooling</li>
                                <li>Great documentation</li>
                            </ul>
                            <p>In this series, we will explore Laravel features in detail.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(1),
            ],
        ];

        foreach ($posts as $post) {
            Post::create([
                'title' => $post['title'],
                'content' => $post['content'],
                'is_published' => $post['is_published'],
                'published_at' => $post['published_at'],
                'author_id' => $admin->id,
            ]);
        }
    }
}