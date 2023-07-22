<?php

$array = [
    1, 34, 21, 45, 112, 54, 2, 3, 4, 5, 6, 7, 8, 9, 90
];
//
//$min = rand(1, 10);
//$max = rand(80, 130);

//$newArray = array_filter($array, function ($val) use ($min, $max) {
//    return ($val > $min && $val < $max);
//});

//$array = array_map(function ($val){
//    return $val * $val;
//}, $array);

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] .PHP_EOL;
}
echo '___________________________' . PHP_EOL;
foreach ($array as $value){
    echo $value . PHP_EOL;
}

exit;
