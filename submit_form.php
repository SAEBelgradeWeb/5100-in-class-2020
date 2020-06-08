<?php

if(isset($_POST['username']) && isset($_POST['password'])){
    //file_put_contents('rezultat_forme.txt', $_GET['username']);
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    echo "Your form has been submitted successfully";
}
//$_REQUEST['username']