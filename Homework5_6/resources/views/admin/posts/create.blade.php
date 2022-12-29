<h1>Create a New Post</h1>

<form method="POST" action="/posts">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="body">Body:</label>
        <textarea name="body" id="body"></textarea>
    </div>
    <button type="submit">Create Post</button>
</form>
