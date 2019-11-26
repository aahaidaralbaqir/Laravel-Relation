<h2>{{ $lesson->title }}</h2>

<h2>Daftar Lesson</h2>
<ul>
    @foreach($lesson->users as $user)
        <li>{{$user->name}} | {{$user->pivot->created_at}} </li>
    @endforeach
</ul>