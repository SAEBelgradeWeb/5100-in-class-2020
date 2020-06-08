<?php

if (isset($_FILES['image'])) {
    $dir = getcwd();
    $name = str_replace(" ", "_", $_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $dir . "/uploads/" . time() . "_" . $name);
}


// excersize: 1. text field, checkbox, radio button, select - submit to separate file and echo the answers