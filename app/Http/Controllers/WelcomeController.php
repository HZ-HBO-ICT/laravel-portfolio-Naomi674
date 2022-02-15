<?php

namespace App\Http\Controllers;

use App\Models\Posts;

class WelcomeController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        $posts = Posts::latest()->take(3)->get();

        return view('welcome', [
            'posts' => $posts
        ]);
    }
}
