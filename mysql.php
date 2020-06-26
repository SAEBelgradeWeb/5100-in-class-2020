<?php
include_once "config.php";
include_once "functions.php";


$db = db_connect();

$result = mysqli_query($db, "SELECT * FROM products");

//while($row = mysqli_fetch_assoc($result)) {
//    echo $row['title'];
//}

//mysqli_query($mysql, "INSERT INTO products SET title = 'Srafciger', price = '100'");
//mysqli_query($mysql, "DELETE FROM products WHERE id = 5");

?>
<ul>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <li><?= $row['title'] . " - " . $row['price'] ?></li>
    <?php endwhile; ?>
</ul>
<?php

mysqli_close($db);
//dd($row);