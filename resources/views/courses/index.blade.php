@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto p-6">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Courses</h1>

        @if(auth()->user()->role === 'educator')
            <a href="{{ route('courses.create') }}"
               class="bg-indigo-600 text-white px-4 py-2 rounded-lg">
                + Add Course
            </a>
        @endif
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($courses as $course)
            <div class="bg-white rounded-xl shadow p-4">
                <h2 class="font-bold text-lg">{{ $course->title }}</h2>
                <p class="text-gray-600 text-sm mt-2">
                    {{ Str::limit($course->description, 100) }}
                </p>

                @if(auth()->user()->role === 'educator')
                    <div class="flex gap-2 mt-4">
                        <a href="{{ route('courses.edit', $course) }}"
                           class="text-blue-600">Edit</a>

                        <form method="POST" action="{{ route('courses.destroy', $course) }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600">Delete</button>
                        </form>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection
