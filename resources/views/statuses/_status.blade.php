<li>
    <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
    <div>
        <h5>{{ $status->created_at->diffForHumans() }}</h5>
        {{ $status->content }}
    </div>
</li>
