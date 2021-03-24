@extends('layouts.default')
@section('title', '更新密码')

@section('content')
    <div>
        <h5>更新密码</h5>
    </div>

    <div>
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="text" name="token" value="{{ $token }}">
            <div>
                <label for="email">email地址</label>
                <input type="email" id="email" name="email" value="{{ $email ?? old('email') }}">
                @if($errors->has('email'))
                    <strong>{{ $errors->first('email') }}</strong>
                @endif
            </div>
            <div>
                <label for="password">密码</label>
                <input type="text" id="password" name="password">
                @if($errors->has('password'))
                    <strong>{{ $errors->first('password') }}</strong>
                @endif
            </div>
            <div>
                <label for="password-confirm">确认密码</label>
                <input type="text" id="password-confirm" name="password_confirmation">
            </div>
            <div>
                <button type="submit">重置密码</button>
            </div>
        </form>
    </div>
@stop
