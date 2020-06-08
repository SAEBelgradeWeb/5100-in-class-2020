<?php

function dd($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die;
}

function roman_numerals_converter($number)
{
    $out = "";

    $table = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    foreach ($table as $key => $value) {
        while ($number >= $value) {
            $out .= $key;
            $number -= $value;
        }
    }

    return $out;
}


//recursive function

function countdown($num) {
    if($num < 1) {
        return;
    }
    echo $num--;
    echo "<br>";
    countdown($num);
}


