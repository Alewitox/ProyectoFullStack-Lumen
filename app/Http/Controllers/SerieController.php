<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{

    public function showAllSeries()
    {
        return response()->json(Serie::all());
    }

    public function showOneSerie($id)
    {
        return response()->json(Serie::find($id));
    }

    public function create(Request $request)
    {
        $serie = Serie::create($request->all());

        return response()->json($serie, 201);
    }

    public function update($id, Request $request)
    {
        $serie = Serie::findOrFail($id);
        $serie->update($request->all());

        return response()->json($serie, 200);
    }

    public function delete($id)
    {
        Serie::findOrFail($id)->delete();
        return response('Se ha borrado correctamente', 200);
    }
}