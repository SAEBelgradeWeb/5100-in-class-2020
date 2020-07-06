<?php
include_once "./functions.php";

$query = sprintf("DELETE FROM posts WHERE id = '%d'", $_GET['id']);
mysqli_query($db, $query);

header("Location: ./index.php");