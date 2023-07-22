<?php

$valueColor = $argv;

$arrayColor = [
    '1' => 'green',
    '2' => 'red',
    '3' => 'blue',
    '4' => 'brown',
    '5' => 'violet',
    '6' => 'black',
];
foreach ($arrayColor as $key => $value){
    if ($valueColor[1] > 6 || $valueColor[1] < 1){
        echo 'white' . PHP_EOL;
        exit;
    }
    if ($key == $valueColor[1]) {
        echo $value . PHP_EOL;
        exit;
    }
}
