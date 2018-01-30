{{ csrf_field() }}

<div>
    <input type="text" name="title" value="{{ $post->title }}" required autofocus>
</div>
<div>
    <textarea name="body">{{ $post->body }}</textarea>
</div>
<button type="submit" class="btn btn-primary">
    保存
</button>
