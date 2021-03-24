@extends('layouts.default')
@section('title', '主页')
@section('content')
    @if(Auth::check())
        <div>
            <div>
                @include('shared._status_form')
                <h4>微博列表</h4>
                <hr>
                @include('shared._feed')
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
