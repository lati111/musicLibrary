<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('home');
    }
}

