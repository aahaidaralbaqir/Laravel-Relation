<h1>Profile {{$user->name}} - passport nya {{ $user->passport->no_pass }}</h1>

<h2>Daftar Forum</h2>
<ul>
    @foreach($user->forums as $forum)
        <li>{{$forum->title}}</li>
    @endforeach
</ul>

<h2>Daftar Kelas</h2>
<ul>
    @foreach($user->lessons as $lesson)
        <li>{{$lesson->title}}</li>
    @endforeach
</ul>