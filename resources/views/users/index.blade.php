@extends('layouts.default')
@section('title', '用户列表')

@section('content')
    <div>
        <h2>所有用户</h2>
        <div>
            <ul>
                @foreach($users as $user)
                    @include('users._user')
                @endforeach
            </ul>
        </div>
        <div>
            {!! $users->render() !!}
        </div>
    </div>
@stop
