@extends('layouts.default')
@section('title', $user->name)
@section('content')
    {{ $user->name }} - {{ $user->email }}
    <section>
        @include('shared._user_info', ['user' => $user])
    </section>
    <section>
        @if($statuses->count() > 0)
            <ul>
                @foreach($statuses as $status)
                    @include('statuses._status')
                @endforeach
            </ul>
            <div>
                {!! $statuses->render() !!}
            </div>
        @else
            <p>没有数据！</p>
        @endif
    </section>
@stop
