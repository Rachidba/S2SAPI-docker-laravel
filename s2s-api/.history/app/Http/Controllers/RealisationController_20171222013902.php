<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Realisation;

class RealisationController extends Controller
{
    public function index()
    {
        return Realisation::all();
    }

    public function show(Realisation $realisation)
    {
        return $realisation;
    }

    public function store(Request $request)
    {
        $realisation = Realisation::create($request->all());

        return response()->json($realisation, 201);
    }

    public function update(Request $request, Realisation $realisation)
    {
        $realisation->update($request->all());

        return response()->json($realisation, 200);
    }

    public function delete(Realisation $realisation)
    {
        $realisation->delete();

        return response()->json(null, 204);
    }
}
