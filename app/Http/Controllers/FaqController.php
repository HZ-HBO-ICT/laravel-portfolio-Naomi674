<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostsRequest;
use App\Http\Requests\UpdatePostsRequest;
use App\Models\Faq;
use App\Models\Posts;
use Symfony\Component\HttpFoundation\Request;

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

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('faq.create');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Faq::create($this->validatePost($request));

        return redirect('/faq');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $faqs = Faq::findorfail($id);

        return view('faq.edit', compact('faqs'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {

        $faqs = Faq::findorfail($id);
        $faqs->update($this->validatePost($request));

        return redirect('/faq');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $faqs = Faq::findorfail($id);
        $faqs->delete();
        return redirect('/faq');
    }

    /**
     * @return array
     */
    protected function validatePost(Request $request): array
    {
        return $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
    }
}
