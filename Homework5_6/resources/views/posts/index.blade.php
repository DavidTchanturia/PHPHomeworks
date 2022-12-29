<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <div>
        <h1>Blog Posts</h1>

        @forelse ($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <a href="/posts/{{ $post->id }}">Read more</a>
        @empty
        <h1>There are no posts to display</h1>
        @endforelse

    </div>
    
</body>
</html>