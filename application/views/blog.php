<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
</head>

<body>

    <h1>my article</h1>

    <h4> <a href="<?php echo site_url('blog/insert/'); ?>"> Tambah Article </a></h4>

    <form action="">
        <input type="text" name="search">
        <button type="submit">Search</button>
    </form>

    <?php foreach ($blogs as $key => $value) : ?>
    <h3>
        <a href="<?php echo site_url('blog/detail/' . $value['url']); ?>">
            <?php echo $value['title']; ?></a>
    </h3>
    <a href="<?php echo site_url('blog/edit/' . $value['id']); ?>">Edit</a>
    <a href="<?php echo site_url('blog/delete/' . $value['id']); ?>">Delete</a>
    <br>

    <?php echo $value['content']; ?>
    <?php endforeach; ?>
</body>

</html>