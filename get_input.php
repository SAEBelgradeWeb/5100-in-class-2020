<?php
        if(isset($_GET['id'])) {
            switch ($_GET['id']) {
                case 1;
                    $image = "https://www.obaku.com/content/watch/V178GXUURZ_ROLIG_GUNTAN.jpg";
                    $title = "Classy man watch";
                    $description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam asperiores commodi eaque iure molestias odit optio, sequi similique voluptatibus. Architecto debitis deserunt dicta, dignissimos esse expedita laboriosam natus nulla.";
                    break;
                case 2;
                    $image = "https://images-na.ssl-images-amazon.com/images/I/71vKyimxsiL._UX342_.jpg";
                    $title = "Sport watch";
                    $description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam asperiores commodi eaque iure molestias odit optio, sequi similique voluptatibus. Architecto debitis deserunt dicta, dignissimos esse expedita laboriosam natus nulla.";
                    break;
                case 3;
                    $image = "https://lh3.googleusercontent.com/proxy/39V4yx6fvbfP5SEZSqA-U_jAijQNDdzUCY_OWG4Pd-PsZ6X9L07sNC7DzppuysrI3DGhbORCHxaIhxXeVMo9SdWuenSmScusE4ctsLziuB0AQIk6JBkwWU72ecmY2-ZkZ-pYX5h8NBOs-i_aLTGVQrjX1E9zx5CSCg0Q";
                    $title = "Digital watch";
                    $description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam asperiores commodi eaque iure molestias odit optio, sequi similique voluptatibus. Architecto debitis deserunt dicta, dignissimos esse expedita laboriosam natus nulla.";
                    break;
            }
        }

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<nav>
    <ul>
        <li><a href="/get_input.php?id=1">Classy</a></li>
        <li><a href="/get_input.php?id=2">Sport</a></li>
        <li><a href="/get_input.php?id=3">Digital</a></li>
    </ul>
</nav>

<?php if(isset($_GET['id']) && isset($title)) : ?>
    <img src="<?= $image ?>" width="120" alt="">
    <h1><?= $title ?></h1>
    <p><?= $description ?></p>
<?php else: ?>
    <h2>Dear user, we can't find any product with this url. Please try again.</h2>
<?php endif; ?>
</body>
</html>

