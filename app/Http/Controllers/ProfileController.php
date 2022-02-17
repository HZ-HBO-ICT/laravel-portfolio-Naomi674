<?php

namespace App\Http\Controllers;

class ProfileController
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
        return view('profile');
    }
}
