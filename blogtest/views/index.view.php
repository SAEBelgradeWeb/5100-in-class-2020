<?php
include_once "./views/header.view.php";

?>
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


<?php
include_once "./views/footer.view.php";
?>