<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->role === 'educator') {
            $courses = Course::where('user_id', $user->id)->get();
        } else {
            $courses = Course::all();
        }

        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        abort_if(auth()->user()->role !== 'educator', 403);
        return view('courses.create');
    }

    public function store(Request $request)
    {
        abort_if(auth()->user()->role !== 'educator', 403);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('courses.index')->with('success', 'Course created!');
    }

    public function edit(Course $course)
    {
        abort_if(auth()->user()->role !== 'educator', 403);
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        abort_if(auth()->user()->role !== 'educator', 403);

        $course->update($request->only('title', 'description', 'category'));

        return redirect()->route('courses.index')->with('success', 'Course updated!');
    }

    public function destroy(Course $course)
    {
        abort_if(auth()->user()->role !== 'educator', 403);

        $course->delete();
        return back()->with('success', 'Course deleted!');
    }
}
