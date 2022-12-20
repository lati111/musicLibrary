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

    public function showNewForm()
    {
        return view('newSong');
    }

    public function showEditForm(int $id)
    {
        return view('editSong', ["id" => $id, "song" => Songs::find($id)->toArray()]);
    }

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

    public function update(Request $request, int $id)
    {
        $request->validate([
            "name" => "required|string|between:3,32",
            "autheur" => "required|string|between:6, 32",
            "releaseYear" => "required|integer|digits:4"
        ]);

        $songs = Songs::find($id);
        $songs->song_name = $request->input('name');
        $songs->author = $request->input('autheur');
        $songs->release_year = $request->input('releaseYear');
        $songs->save();

        return view('library', ["songs" => Songs::all(), "success" => "Muziek geupdate"]);
    }

    public function delete(int $id)
    {
        $song = Songs::find($id);
        $song->delete();

        return view('library', ["songs" => Songs::all(), "success" => "Muziek verwijdert"]);
    }
}
