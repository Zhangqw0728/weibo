@if($feed_items->count() > 0)
    <ul>
        @foreach($feed_items as $status)
            @include('statuses._status', ['user' => $status->user])
        @endforeach
    </ul>
    <div>
        {!! $feed_items->render() !!}
    </div>
@else
    <p>没有数据</p>
@endif
