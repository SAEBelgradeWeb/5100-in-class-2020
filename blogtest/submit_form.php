<?php
include_once "./functions.php";

$query = sprintf("INSERT INTO posts SET title = '%s', content='%s', category_id='%d', user_id='%d'", $_POST['title'],
    $_POST['content'], $_POST['category_id'], $_POST['user_id']);
mysqli_query($db, $query);
$new_post_id = mysqli_insert_id($db);

foreach ($_POST['tags'] as $tag_id) {
    $query = sprintf("INSERT INTO post_tag SET post_id='%d', tag_id='%d'", $new_post_id, $tag_id );
    mysqli_query($db, $query);
}
header("Location: ./index.php");