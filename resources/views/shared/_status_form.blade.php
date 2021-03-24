<form action="{{ route('statuses.store') }}" method="post">
    @include('shared._errors')
    {{ csrf_field() }}
    <textarea name="content" id="" placeholder="聊聊新鲜事儿" cols="90" rows="10">{{ old('content') }}</textarea>
    <div>
        <button type="submit">发布</button>
    </div>
</form>
