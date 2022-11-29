<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('home');
    }
}

