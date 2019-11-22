<?php

namespace App\Http\Controllers;

use App\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{

    public function showAllEpisodes()
    {
        return response()->json(Episode::all());
    }

    public function showOneEpisode($id)
    {
        return response()->json(Episode::find($id));
    }

    public function create(Request $request)
    {
        $episode = Episode::create($request->all());

        return response()->json($episode, 201);
    }

    public function update($id, Request $request)
    {
        $episode = Episode::findOrFail($id);
        $episode->update($request->all());

        return response()->json($episode, 200);
    }

    public function delete($id)
    {
        Episode::findOrFail($id)->delete();
        return response('Se ha borrado correctamente', 200);
    }
}