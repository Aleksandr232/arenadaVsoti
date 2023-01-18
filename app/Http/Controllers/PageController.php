<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PageController extends Controller
{
    public function towers_tour()
    {
        return view('site.pages.towers_tour');
    }

    public function scaffolding()
    {
        return view('site.pages.scaffolding');
    }

    public function technics()
    {
        return view('site.pages.technics');
    }

    public function snow_removal()
    {
        return view('site.pages.snow_removal');
    }

    public function gallery()
    {
        return view('site.pages.gallery');
    }

    public function gallery_tower()
    {
        return view('site.pages.gallery_tower');
    }

    public function gallery_scaffolding()
    {
        return view('site.pages.gallery_scaffolding');
    }

    public function gallery_technics()
    {
        return view('site.pages.gallery_technics');
    }

    public function gallery_snow_removal()
    {
        return view('site.pages.gallery_snow_removal');
    }

    public function contacts()
    {
        return view('site.pages.contacts');
    }

    public function posts()
    {
        $posts = Post::query()->paginate(12);

        return view('site.pages.posts', compact('posts'));
    }
}
