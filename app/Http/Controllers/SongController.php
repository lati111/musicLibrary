<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Songs;

class SongController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        return view('songs');
    }

    public function showSongForm()
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

        $songs = new Songs();
        $songs->song_name = $request->input('name');
        $songs->author = $request->input('autheur');
        $songs->release_year = $request->input('releaseYear');
        $songs->save();

        return back()
            ->with('success', 'You have successfully uploaded a song.');
    }

    public function delete(int $id)
    {
        $song = Songs::find($id);
        $song->delete();

        return view('libary', ["success" => "Muziek verwijdert"]);
    }
}
