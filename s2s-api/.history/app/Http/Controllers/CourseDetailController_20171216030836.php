<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseDetailDetailController extends Controller
{
    public function index()
    {
        return CourseDetail::all();
    }

    public function show(CourseDetail $courseDetail)
    {
        return $courseDetail;
    }

    public function store(Request $request)
    {
        $courseDetail = CourseDetail::create($request->all());

        return response()->json($courseDetail, 201);
    }

    public function update(Request $request, CourseDetail $courseDetail)
    {
        $courseDetail->update($request->all());

        return response()->json($courseDetail, 200);
    }

    public function delete(CourseDetail $courseDetail)
    {
        $courseDetail->delete();

        return response()->json(null, 204);
    }
}
