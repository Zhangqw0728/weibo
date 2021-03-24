<li>
    <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
    <div>
        <h5>{{ $status->created_at->diffForHumans() }}</h5>
        {{ $status->content }}
    </div>

    @can('destroy', $status)
        <form action="{{ route('statuses.destroy', $status->id) }}" method="post" onsubmit="return confirm('确定删除？')">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit">删除</button>
        </form>
    @endcan
</li>
