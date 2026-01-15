@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-6">
    <h2 class="text-xl font-bold mb-4">Create Course</h2>

    <form method="POST" action="{{ route('courses.store') }}">
        @csrf

        <input name="title" placeholder="Course Title"
               class="w-full border rounded p-2 mb-4">

        <textarea name="description" placeholder="Course Description"
                  class="w-full border rounded p-2 mb-4"></textarea>

        <input name="category" placeholder="Category"
               class="w-full border rounded p-2 mb-4">

        <button class="bg-indigo-600 text-white px-4 py-2 rounded">
            Save
        </button>
    </form>
</div>
@endsection
