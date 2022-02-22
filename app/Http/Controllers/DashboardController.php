<?php

namespace App\Http\Controllers;

use App\Models\Grade;

class DashboardController
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
        $grades = Grade::all();

        return view('dashboard', [
            'grades' => $grades
        ]);
    }
}
