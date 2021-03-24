@extends('layouts.default')
@section('title', '主页')
@section('content')
    @if(Auth::check())
        <div>
            <div>
                @include('shared._status_form')
            </div>
            <div>
                @include('shared._user_info', ['user' => Auth::user()])
            </div>
        </div>
    @else
        <h1>主页</h1>
        <a href="{{route('signup')}}">现在注册</a>
    @endif
@stop
