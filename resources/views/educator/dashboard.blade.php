@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100">

    <!-- HEADER -->
    <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
        <div class="max-w-7xl mx-auto px-6 py-10">
            <h1 class="text-3xl font-bold">Educator Dashboard 🎓</h1>
            <p class="mt-2 text-indigo-100">
                Manage your courses, students, and virtual classes
            </p>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="max-w-7xl mx-auto px-6 py-10">

        <!-- STATS -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">

            <div class="bg-white rounded-xl shadow p-6">
                <h3 class="text-gray-500">Total Courses</h3>
                <p class="text-3xl font-bold text-indigo-600 mt-2">5</p>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <h3 class="text-gray-500">Students Enrolled</h3>
                <p class="text-3xl font-bold text-green-600 mt-2">120</p>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <h3 class="text-gray-500">Live Sessions</h3>
                <p class="text-3xl font-bold text-purple-600 mt-2">3</p>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <h3 class="text-gray-500">Pending Assignments</h3>
                <p class="text-3xl font-bold text-red-500 mt-2">8</p>
            </div>

        </div>

        <!-- ACTION CARDS -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- MANAGE COURSES -->
            <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
                <div class="text-4xl mb-4">📚</div>
                <h2 class="text-xl font-bold mb-2">Manage Courses</h2>
                <p class="text-gray-600 mb-4">
                    Create, edit, and manage your learning content.
                </p>
                <a href="{{ route('courses.index') }}"
                   class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                    Go to Courses
                </a>
            </div>

            <!-- LIVE CLASS -->
            <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
                <div class="text-4xl mb-4">🎥</div>
                <h2 class="text-xl font-bold mb-2">Live Classes</h2>
                <p class="text-gray-600 mb-4">
                    Host virtual classes and interact with learners.
                </p>
                <button
                    class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700">
                    Start Live Session
                </button>
            </div>

            <!-- STUDENTS -->
            <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
                <div class="text-4xl mb-4">👥</div>
                <h2 class="text-xl font-bold mb-2">My Students</h2>
                <p class="text-gray-600 mb-4">
                    View enrolled learners and their progress.
                </p>
                <button
                    class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                    View Students
                </button>
            </div>

        </div>

    </div>
</div>
@endsection
