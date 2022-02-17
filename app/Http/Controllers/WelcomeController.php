<?php

namespace App\Http\Controllers;

use App\Models\Posts;

class WelcomeController
{
    /**
     * @return void
     */
    public function show()
    {
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = Posts::latest()->take(3)->get();

        return view('welcome', [
            'posts' => $posts
        ]);
    }
}
