@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100">

    <!-- HEADER -->
    <div class="bg-gradient-to-r from-green-500 to-teal-500 text-white">
        <div class="max-w-7xl mx-auto px-6 py-10">
            <h1 class="text-3xl font-bold">Learner Dashboard 📘</h1>
            <p class="mt-2 text-green-100">
                Access your courses and continue learning
            </p>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="max-w-7xl mx-auto px-6 py-10">

        <!-- STATS -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">

            <div class="bg-white rounded-xl shadow p-6">
                <h3 class="text-gray-500">Enrolled Courses</h3>
                <p class="text-3xl font-bold text-green-600 mt-2">4</p>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <h3 class="text-gray-500">Completed Lessons</h3>
                <p class="text-3xl font-bold text-blue-600 mt-2">18</p>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <h3 class="text-gray-500">Upcoming Classes</h3>
                <p class="text-3xl font-bold text-purple-600 mt-2">2</p>
            </div>

        </div>

        <!-- ACTIONS -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
                <div class="text-4xl mb-4">📚</div>
                <h2 class="text-xl font-bold mb-2">My Courses</h2>
                <p class="text-gray-600 mb-4">
                    View and continue your enrolled courses.
                </p>
                <a href="/courses"
                   class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                    View Courses
                </a>
            </div>

            <div class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">
                <div class="text-4xl mb-4">🎥</div>
                <h2 class="text-xl font-bold mb-2">Live Classes</h2>
                <p class="text-gray-600 mb-4">
                    Join scheduled virtual learning sessions.
                </p>
                <button
                    class="bg-teal-600 text-white px-4 py-2 rounded-lg hover:bg-teal-700">
                    Join Session
                </button>
            </div>

        </div>

    </div>
</div>
@endsection
