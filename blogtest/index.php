<?php
include_once "./functions.php";

$result_posts = mysqli_query($db, "SELECT posts.*, categories.title AS 'category',  users.name AS 'author' FROM posts 
LEFT JOIN categories ON categories.id = posts.category_id 
LEFT JOIN users ON users.id = posts.user_id ORDER BY posts.id DESC");


include_once "./views/index.view.php";