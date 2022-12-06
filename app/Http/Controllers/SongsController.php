<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongsController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('newSong');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|between:3,32"  ,
            "autheur" => "required|string|between:6, 32",
            "releaseYear" => "required|integer|digits:4"
        ]);

        return back()
            ->with('success', 'You have successfully uploaded a song.');
    }
}
