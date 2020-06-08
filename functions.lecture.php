<?php
include "functions.php";
//$hello = 'Hi world';
//$pozicija = strpos($hello, " ");
//$helloArr = explode(" ", $hello);
//var_dump($helloArr);
//echo $helloArr[1];
//echo substr($hello, $pozicija + 1);
//echo str_replace("world", "people", $hello);

//str_replace($search, $replace, $subject);
//substr($string, $start);
//strpos($haystack, $needle);
//explode($delimiter, $string);

round(125.146); //125
round(125.146, 2); //125.15

//echo $name;
//
//$name = "Vlada";
$lastname = "Lelicanin";

function imeIPrezime($param1, $param2 = '') {
    global $lastname;
    return $param1 . " " . $param2;
}

$rezult = imeIPrezime("Vladimir", "Lelicanin");
echo $rezult;
//
//function dva() {
//
//}
//$name = "Vladimir";
//$lastname = "Lelicanin";
$arr = ['one', 'two'];

countdown(100);