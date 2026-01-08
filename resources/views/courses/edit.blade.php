<form method="POST" action="{{ route('courses.update', $course) }}">
@csrf @method('PUT')
<input name="title" value="{{ $course->title }}">
<textarea name="description">{{ $course->description }}</textarea>
<button>Update</button>
</form>
