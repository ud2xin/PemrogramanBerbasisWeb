<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Dummy data blog
    private array $posts = [
        ['title' => 'Belajar Routing di Laravel', 'slug' => 'belajar-routing-laravel', 'body' => 'Ini adalah postingan tentang routing di Laravel.'],
        ['title' => 'Named Route & Kenapa Penting', 'slug' => 'named-route-kenapa-penting', 'body' => 'Kita bahas cara pakai named route.'],
    ];

    public function about()
    {
        return view('about');
    }

    public function blogIndex()
    {
        $posts = $this->posts;
        return view('blog.index', compact('posts'));
    }

    public function blogShow(string $slug)
    {
        $post = collect($this->posts)->firstWhere('slug', $slug);
        abort_unless($post, 404);
        return view('blog.show', compact('post'));
    }

    public function hello(?string $name = 'Tamu')
    {
        return view('hello', compact('name'));
    }
}
