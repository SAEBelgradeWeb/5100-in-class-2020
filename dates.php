<?php
include "functions.php";
//echo time();

//echo mktime(19,10,00,5,2,1998);

$drugiPetak = strtotime("Friday 01-04-2020 +1 week");
$treciPetak = strtotime("Friday 01-04-2020 +2 week");

$vremeProslo = $treciPetak - $drugiPetak;
//echo 60 * 60 * 24 * 7;

//echo date('d. M Y. H:i:s', $treciPetak);

$date = getdate($treciPetak);
//dd($date);

for($i = 0; $i < 16; $i++) {
    $ts1 = strtotime("1st March 2020 +{$i} week Monday");
    $ts2 = strtotime("1st March 2020 +{$i} week Wednesday");
    echo date('d.m.Y D', $ts1);
    echo "<br>";
    echo date('d.m.Y D', $ts2);
    echo "<br>";
}

