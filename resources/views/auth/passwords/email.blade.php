@extends('layouts.default')
@section('title', '重置密码')
@section('content')
    <div>
        <div>重置密码</div>
    </div>
    <div>
        @if(session('status'))
            {{ session('status') }}
        @endif
    </div>
    <div>
        <form action="{{ route('password.email') }}" method="POST">
            <div>
                {{ csrf_field() }}
                <label for="email">邮箱地址</label>
                <input type="text" name="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <strong>{{ $errors->first('email') }}</strong>
                @endif
            </div>
            <div>
                <button type="submit">发送密码重置邮件</button>
            </div>
        </form>
    </div>
@stop
