<?php



//echo filesize('uploads/slika.jpg');

//$dir = scandir('.');
//
//foreach ($dir as $item) {
//    if($item != '.' && $item != ".." && is_dir($item)) {
//        echo $item . "\n";
//    }
//}

$resource = fopen("rezultat_forme.txt", 'c+');
//echo fread($resource, filesize("rezultat_forme.txt"));
fclose($resource);

//var_dump($resource);

$current = file_get_contents("rezultat_forme.txt");
//file_put_contents("rezultat_forme.txt", $current . "Pera");

$dir = opendir('uploads');

while ($item = readdir($dir)) {
    echo $item . "\n";
}