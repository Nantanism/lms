<x-app-layout>
    <h2>Dashboard</h2>

    @if(auth()->user()->role === 'educator')
        <div class="alert alert-primary">
            <h5>Educator Dashboard</h5>
            <p>Manage courses, upload materials, and host virtual classes.</p>
            <a href="/courses" class="btn btn-primary">Manage Courses</a>
        </div>
    @else
        <div class="alert alert-success">
            <h5>Learner Dashboard</h5>
            <p>Browse courses and access learning materials.</p>
            <a href="/courses" class="btn btn-success">View Courses</a>
        </div>
    @endif
</x-app-layout>
