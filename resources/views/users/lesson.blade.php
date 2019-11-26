<h2>{{ $lesson->title }}</h2>

<h2>Daftar Lesson</h2>
<ul>
    @foreach($lesson->users as $user)
        <li>{{$user->name}}</li>
    @endforeach
</ul>