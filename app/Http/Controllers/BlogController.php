<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostsRequest;
use App\Http\Requests\UpdatePostsRequest;
use App\Models\Posts;

class BlogController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        return view('blog.show', [
            'posts' => Posts::find($id)
        ]);
    }

    public function index()
    {

        $posts = Posts::all();

        return view('blog.index', compact('posts'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store()
    {
        $posts = new Posts();

        $posts->title = request('title');
        $posts->excerpt = request('excerpt');
        $posts->body = request('body');

        $posts->save();

        return redirect('/blog');
    }

    public function edit($id)
    {
        $posts = Posts::find($id);

        return view('blog.edit', compact('posts'));
    }

    public function update($id)
    {
        $posts = Posts::find($id);

        $posts->title = request('title');
        $posts->excerpt = request('excerpt');
        $posts->body = request('body');

        $posts->save();

        return redirect('/blog/' .$posts->id);
    }

    public function destroy($id)
    {
        $posts = Posts::find($id);
        $posts->delete();
        return redirect('/blog');

    }
}
