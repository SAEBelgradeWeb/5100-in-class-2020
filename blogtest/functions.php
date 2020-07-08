<?php
include_once "./config.php";
$db = db_connect();

function dd($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die;
}

function db_connect() {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
    if(!$conn) {
        die('Connection to mysql not successful');
    }

    $db = mysqli_select_db($conn, DB_BASE);
    if(!$db) {
        die('Connection to database not successful');
    }

    return $conn;
}