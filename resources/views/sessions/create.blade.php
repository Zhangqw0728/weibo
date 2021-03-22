@extends('layouts.default')
@section('title', '登录')
@section('content')
    <div>
        <h5>登录</h5>
    </div>
    <div>
        @include('shared._errors')
    </div>
    <div>
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div>
                <label for="email">邮箱</label>
                <input type="text" name="email" value="{{ old('email') }}">
            </div>
            <div>
                <label for="password">密码</label>
                <input type="text" name="password" value="{{ old('password') }}">
            </div>
            <div>
                <input type="checkbox" name="remember" >
                <label for="remember">记住我</label>
            </div>
            <div>
                <button type="submit">登录</button>
            </div>
        </form>
    </div>
@stop
