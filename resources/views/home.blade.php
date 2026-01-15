@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="bg-gradient-to-br from-indigo-700 via-purple-600 to-pink-500 text-white">
    <div class="max-w-7xl mx-auto px-6 py-20 text-center">
        <h1 class="text-5xl font-extrabold mb-6">
            Edu Fairuzullah Learning Management System
        </h1>
        <p class="text-xl mb-8 text-indigo-100">
            A cloud-based platform for educators and learners to teach, learn, and grow together.
        </p>

        @guest
            <div class="flex justify-center gap-4">
                <a href="{{ route('register') }}"
                   class="bg-white text-indigo-700 px-8 py-3 rounded-xl font-semibold hover:bg-indigo-100 transition">
                    Get Started
                </a>

                <a href="{{ route('login') }}"
                   class="border border-white px-8 py-3 rounded-xl font-semibold hover:bg-white hover:text-indigo-700 transition">
                    Login
                </a>
            </div>
        @endguest
    </div>
</section>

<!-- FEATURES SECTION -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">
            Platform Features
        </h2>

        <div class="grid md:grid-cols-2 gap-10">

            <!-- Educator -->
            <div class="bg-white rounded-2xl shadow p-8 text-center hover:shadow-lg transition">
                <div class="text-5xl mb-4">🎓</div>
                <h3 class="text-2xl font-semibold mb-3">For Educators</h3>
                <p class="text-gray-600">
                    Create and manage courses, upload learning materials, and conduct virtual classes
                    with ease using our secure cloud-based LMS.
                </p>
            </div>

            <!-- Learner -->
            <div class="bg-white rounded-2xl shadow p-8 text-center hover:shadow-lg transition">
                <div class="text-5xl mb-4">📘</div>
                <h3 class="text-2xl font-semibold mb-3">For Learners</h3>
                <p class="text-gray-600">
                    Access course materials, participate in online learning sessions, and track your
                    learning progress anytime, anywhere.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- HOW IT WORKS -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-12 text-gray-800">
            How It Works
        </h2>

        <div class="grid md:grid-cols-3 gap-10">

            <div>
                <div class="text-4xl mb-4">📝</div>
                <h3 class="text-xl font-semibold mb-2">Register</h3>
                <p class="text-gray-600">
                    Sign up as an Educator or Learner based on your role.
                </p>
            </div>

            <div>
                <div class="text-4xl mb-4">📚</div>
                <h3 class="text-xl font-semibold mb-2">Access Courses</h3>
                <p class="text-gray-600">
                    Educators manage content while learners explore courses.
                </p>
            </div>

            <div>
                <div class="text-4xl mb-4">☁️</div>
                <h3 class="text-xl font-semibold mb-2">Learn on the Cloud</h3>
                <p class="text-gray-600">
                    Enjoy scalable, secure, and high-performance cloud learning.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="bg-indigo-700 text-white py-16">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4">
            Ready to Start Learning or Teaching?
        </h2>
        <p class="mb-6 text-indigo-100">
            Join Edu Fairuzullah LMS today and experience modern cloud-based education.
        </p>

        @guest
            <a href="{{ route('register') }}"
               class="bg-white text-indigo-700 px-8 py-3 rounded-xl font-semibold hover:bg-indigo-100 transition">
                Register Now
            </a>
        @endguest
    </div>
</section>

@endsection

