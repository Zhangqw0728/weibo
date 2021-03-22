@extends('layouts.default')
@section('title', '更新个人信息')
@section('content')
    @include('shared._errors')
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div>
            <label for="name">名称</label>
            <input type="text" name="name" value="{{ $user->name }}">
        </div>
        <div>
            <label for="email">邮箱</label>
            <input type="text" name="email" value="{{ $user->email }}" disabled>
        </div>
        <div>
            <label for="password">密码</label>
            <input type="text" name="password" value="{{ old('password') }}">
        </div>
        <div>
            <label for="password_confirmation">确认密码</label>
            <input type="text" name="password_confirmation" value="{{ old('password_confirmation') }}">
        </div>
        <button type="submit">更新</button>
    </form>
@stop
