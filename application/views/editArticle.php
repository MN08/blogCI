<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>From Edit Article</title>
</head>

<body>
    <h1>Update article</h1>

    <form method="POST" action="">
        <label for="">Title</label><br>
        <input type="text" name="title" value=<?php echo $blog['title']; ?>><br>

        <label for="">Content</label><br>
        <textarea name="content" id="content" cols="30" rows="10"><?php echo $blog['content']; ?></textarea><br>

        <label for="">URL</label><br>
        <input type="text" name="url" value=<?php echo $blog['url']; ?>><br>

        <br>
        <button type="submit">Uodate</button>
    </form>
</body>

</html>