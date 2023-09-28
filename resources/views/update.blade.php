<!-- resources/views/posts/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Use PUT method for updating -->

        <label for="content">Content</label><br>
        <textarea name="content" id="content" rows="10" cols="50">{{ $post->content }}</textarea><br>

        <label for="picture">Picture</label><br>
        <input type="file" name="picture" id="picture"><br>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</body>
</html>
