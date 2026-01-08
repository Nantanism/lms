<x-app-layout>
    <h2 class="mb-4">Available Courses</h2>

    @if(auth()->check() && auth()->user()->role === 'educator')
        <a href="{{ route('courses.create') }}" class="btn btn-success mb-3">
            + Add Course
        </a>
    @endif

    <div class="row">
        @forelse($courses as $course)
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->title }}</h5>
                        <p class="card-text">{{ $course->description }}</p>

                        @if(auth()->check() && auth()->user()->role === 'educator')
                            <a href="{{ route('courses.edit', $course) }}" class="btn btn-sm btn-warning">
                                Edit
                            </a>

                            <form method="POST" action="{{ route('courses.destroy', $course) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">
                                    Delete
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <p>No courses available.</p>
        @endforelse
    </div>
</x-app-layout>
