<?php

$ar1 = ['one', 'two', 'three'];
$ar2 = ['four', 'five', 'six'];
$mix = [];
foreach ($ar1 as $key => $element) {
    $mix[] = $ar1[$key];
    $mix[] = $ar2[$key];
}
$brElemenata = count($ar1);
for ($i = 0; $i < $brElemenata; $i++) {

}

//$el = "";
//$lenght = 0;
//foreach ($array as $key => $element) {
//    if(strlen($element) > $lenght) {
//        $el = $element;
//    }
//
//}