<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudiesLevelController extends Controller
{
    public function index()
    {
        return StudiesLevel::all();
    }

    public function show(StudiesLevel $studiesLevel)
    {
        return $studiesLevel;
    }

    public function store(Request $request)
    {
        $studiesLevel = StudiesLevel::create($request->all());

        return response()->json($studiesLevel, 201);
    }

    public function update(Request $request, StudiesLevel $studiesLevel)
    {
        $studiesLevel->update($request->all());

        return response()->json($studiesLevel, 200);
    }

    public function delete(StudiesLevel $studiesLevel)
    {
        $studiesLevel->delete();

        return response()->json(null, 204);
    }
}
