<?php
$arr = [
    'name' => 'Johnny',
    'lastName' => 'Daniels',
    'age' => 21,
    'married' => true
];

foreach ($arr as $key => $value) {
    if (is_int ($value)) {
        //echo $key;
    }
}

$numeric_array = ['one', 'two', 'three'];

for($i = 2; $i >= 0; $i--) {
 //echo $numeric_array[$i];
}

$arr2=[];
//foreach($numeric_array as $item){
//    array_push($arr2,strtoupper($item));
//}

foreach($numeric_array as $key => $item){
    $arr2[$key + 1] = strtoupper($item);
}

//foreach($numeric_array as $key => $item){
//    $arr2[] = strtoupper($item);
//}
var_dump($arr2);