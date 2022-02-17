<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostsRequest;
use App\Http\Requests\UpdatePostsRequest;
use App\Models\Faq;
use App\Models\Posts;

class FaqController
{
    public function index()
    {
        return view('faq.index', ['faq'=>Faq::all()]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {

    }

    public function create()
    {
        return view('faq.create');
    }

    public function store()
    {
        $faq = new Faq();

        $faq->question = request('question');
        $faq->answer = request('answer');

        $faq->save();

        return redirect('/faq');
    }

    public function edit($id)
    {
        $faq = Faq::find($id);

        return view('faq.edit', compact('faq'));
    }

    public function update($id)
    {
        $faq = Faq::find($id);

        $faq->question = request('question');
        $faq->answer = request('answer');

        $faq->save();

        return redirect('/faq');
    }

    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect('/faq');
    }
}
