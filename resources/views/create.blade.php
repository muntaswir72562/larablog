<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create post</title>
</head>
<body>
    <form action="/newPost" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title "><br>
        <label for="description">description</label>
        <input type="text" name="description" id="description "><br>
        <label for="content">content</label>
        <input type="text" name="content" id="content "><br>
        <button>submit</button>
    </form>
</body>
</html>