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
        return view('faq.index', ['faqs'=>Faq::all()]);
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
        $faqs = new Faq();

        $faqs->question = request('question');
        $faqs->answer = request('answer');

        $faqs->save();

        return redirect('/faq');
    }

    public function edit($id)
    {
        $faqs = Faq::find($id);

        return view('faq.edit', compact('faqs'));
    }

    public function update($id)
    {
        $faqs = Faq::find($id);

        $faqs->question = request('question');
        $faqs->answer = request('answer');

        $faqs->save();

        return redirect('/faq');
    }

    public function destroy($id)
    {
        $faqs = Faq::find($id);
        $faqs->delete();
        return redirect('/faq');
    }
}
