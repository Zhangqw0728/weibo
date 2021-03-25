@extends('layouts.default')
@section('title', $title)

@section('content')
    <div>
        <h2>{{ $title }}</h2>
        <div>
            @foreach($users as $user)
                <div style="border-bottom: 1px solid black">{{ $user->name }}</div>
            @endforeach
        </div>
        <div>
            {!! $users->render() !!}
        </div>
    </div>
@stop
