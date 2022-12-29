<h1>Admin Panel</h1>
<h2><a href="/posts/create">create new post</a></h2>


<h2>Blog Posts</h2>

@foreach ($posts as $post)
    <h3>post title: {{ $post->title }}</h3>
    <p>post body: {{ $post->body }}</p>
    <a href="/posts/{{ $post->id }}/edit">Edit</a>
    <form action="/posts/{{ $post->id }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete Post</button>
    </form>
@endforeach
