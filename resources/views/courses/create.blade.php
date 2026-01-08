<form method="POST" action="{{ route('courses.store') }}">
@csrf
<input name="title" placeholder="Title">
<textarea name="description"></textarea>
<button>Create</button>
</form>
