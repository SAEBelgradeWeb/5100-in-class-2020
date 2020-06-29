<?php
include_once "./functions.php";


$result_categories = mysqli_query($db, "SELECT * FROM categories");
$result_users = mysqli_query($db, "SELECT * FROM users");
$result_tags = mysqli_query($db, "SELECT * FROM tags");

include_once "./views/post-form.view.php";