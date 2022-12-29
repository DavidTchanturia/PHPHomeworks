<form action="/posts/{{ $post->id }}" method="post">
    @csrf
    @method('PATCH')

    <label for="title">Title</label>
    <input type="text" name="title" value="{{ $post->title }}">

    <label for="body">Body</label>
    <textarea name="body">{{ $post->body }}</textarea>

    <button type="submit">Update</button>

    @foreach ($comments as $comment)
    <p>{{ $comment->name }}: {{ $comment->body }}</p>
    <form action="/comments/{{ $comment->id }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Delete comment</button>
    </form>
    @endforeach

</form>
