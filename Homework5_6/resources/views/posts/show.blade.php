<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>

    <h2>Comments:</h2>

    @forelse ($comments as $comment)

    <h4>{{ $comment->name }}</h4>
    <p>{{ $comment->body }}</p>

    @empty
        There are no comments to display
    @endforelse


    <h2>Add a Comment</h2>

<form id="comment-form" action="/comments" method="post">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <div>
        <label for="name">username:</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="body">Comment:</label>
        <textarea id="body" name="body"></textarea>
    </div>
    <button type="submit">Submit Comment</button>
</form>

<script src="https://unpkg.com/axios/dist/axios.min.js">
    document.getElementById('comment-form').addEventListener('submit', function(e) {
        e.preventDefault();

        var form = this;
        var formData = new FormData(form);

        axios.post(form.action, formData)
            .then(function(response) {
                console.log(response.data);
            })
            .catch(function(error) {
                console.error(error);
            });
    });
</script>

</body>
</html>