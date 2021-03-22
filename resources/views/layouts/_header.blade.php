<div>
    @if(Auth::check())
        <div>
            <a href="#">用户列表</a>
        </div>
        <div>
            {{ Auth::user()->name }}
        </div>
        <form action="{{ route('logout') }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit">退出</button>
        </form>
    @else
        <a href="{{ route('help') }}">帮助</a>
        <br>
        <a href="{{ route('login') }}">登录</a>
    @endif
</div>

<hr>
