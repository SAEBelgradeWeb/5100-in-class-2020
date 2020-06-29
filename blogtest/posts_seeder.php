<?php
include_once "functions.php";

$db = db_connect();

/** CATEGORIES */
mysqli_query($db, "INSERT INTO categories SET title='Sport'");
mysqli_query($db, "INSERT INTO categories SET title='Fashion'");
mysqli_query($db, "INSERT INTO categories SET title='Business'");
mysqli_query($db, "INSERT INTO categories SET title='Lifestyle'");

/** TAGS */

mysqli_query($db, "INSERT INTO tags SET title='hot'");
mysqli_query($db, "INSERT INTO tags SET title='summer'");
mysqli_query($db, "INSERT INTO tags SET title='cool'");
mysqli_query($db, "INSERT INTO tags SET title='awesome'");

/** USERS */

mysqli_query($db, "INSERT INTO users SET name='John Smith', email='john@gmail.com', password='1233'");
mysqli_query($db, "INSERT INTO users SET name='Jane Doe', email='jane@gmail.com', password='1233'");

/** POSTS */
for($i = 1; $i <= 10; $i++) {
    $user_id = rand(1, 2);
    $category_id = rand(1, 4);
    mysqli_query($db, "INSERT INTO posts SET title='Very cool post no {$i}', content='Lorem ipsum dolor sit amet, 
    consectetur adipisicing elit. Accusamus aliquam atque cum laboriosam libero, similique veniam. Atque dicta doloribus eaque, facere inventore nesciunt nisi reiciendis rerum veritatis! Obcaecati, repudiandae, voluptate.', user_id='{$user_id}', category_id='{$category_id}'");

    //post_tag - 1, 2; 1, 3
    for($x=0; $x <=rand(0, 4); $x++) {
        $tag_id = rand(1, 4);
        mysqli_query($db, "INSERT INTO post_tag SET post_id = {$i}, tag_id = '{$tag_id}'");
    }
}

