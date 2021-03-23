<li>
    <a href="{{ route('users.show', $user) }}">{{ $user->name }}</a>
    @can('destroy', $user)
        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit">删除</button>
        </form>
    @endcan
</li>
