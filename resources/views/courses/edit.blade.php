@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-6">
    <h2 class="text-xl font-bold mb-4">Edit Course</h2>

    <form method="POST" action="{{ route('courses.update', $course) }}">
        @csrf
        @method('PUT')

        <input name="title" value="{{ $course->title }}"
               class="w-full border rounded p-2 mb-4">

        <textarea name="description"
                  class="w-full border rounded p-2 mb-4">{{ $course->description }}</textarea>

        <input name="category" value="{{ $course->category }}"
               class="w-full border rounded p-2 mb-4">

        <button class="bg-indigo-600 text-white px-4 py-2 rounded">
            Update
        </button>
    </form>
</div>
@endsection
