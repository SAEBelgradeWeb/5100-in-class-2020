<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css">
</head>
<body>
<div class="container">
    <a href="./post_form.php" class="btn btn-primary">ADD NEW POST</a>
<?php while($row = mysqli_fetch_assoc($result_posts)): ?>
    <article>
        <h1 class="text-uppercase"><?= $row['title'] ?> <a href="./delete_posts.php?id=<?= $row['id'] ?>" class="btn
        btn-danger
        btn-sm
">DELETE</a></h1>

        <h3 class="text-primary">Category: <?= $row['category'] ?></h3>
        <h4>Author: <?= $row['author'] ?></h4>
        <div>
            <?php
            $query = sprintf("SELECT tags.* FROM tags LEFT JOIN post_tag ON tags.id = post_tag.tag_id WHERE post_tag.post_id = '%d'", $row['id']);
            $result_tags = mysqli_query($db, $query);
            ?>
            Tags:
            <?php while($row_tag = mysqli_fetch_assoc($result_tags)): ?>
                <?= $row_tag['title'] ?>
            <?php endwhile; ?>
        </div>
        <p>
            <?= $row['content'] ?>
        </p>
        <hr>
    </article>
<?php endwhile; ?>


</div>
</body>
</html>