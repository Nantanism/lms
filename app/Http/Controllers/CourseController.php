<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        if (auth()->user()->role !== 'educator') {
            abort(403);
        }
        return view('courses.create');
    }

    public function store(Request $request)
    {
        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth()->id()
        ]);

        return redirect()->route('courses.index');
    }

    public function edit(Course $course)
    {
        if (auth()->user()->role !== 'educator') {
            abort(403);
        }
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $course->update($request->all());
        return redirect()->route('courses.index');
    }

    public function destroy(Course $course)
    {
        if (auth()->user()->role !== 'educator') {
            abort(403);
        }
        $course->delete();
        return redirect()->route('courses.index');
    }
}
