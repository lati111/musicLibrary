<?php

namespace App\Http\Controllers;

use App\Models\Songs;

class LibraryController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('library', ["songs" => Songs::all()]);
    }
}

