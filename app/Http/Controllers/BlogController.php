<?php

namespace App\Http\Controllers;

use App\Models\Posts;

class BlogController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        $posts = Posts::all();

        return view('blog', [
            'posts' => $posts
        ]);
    }

    public function index()
    {
        $posts = Posts::all();

        return view('blog', [
            'posts' => $posts
        ]);
    }
}
