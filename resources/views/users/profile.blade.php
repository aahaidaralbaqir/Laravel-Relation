<h1>Profile {{$user->name}} - passport nya {{ $user->passport->no_pass }}</h1>

<h2>Daftar Forum</h2>
<ul>
    @foreach($user->forums as $forum)
        <li>{{$forum->title}}</li>
    @endforeach
</ul>