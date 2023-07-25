<?php

$arrayColor = [
    '1' => 'green',
    '2' => 'red',
    '3' => 'blue',
    '4' => 'brown',
    '5' => 'violet',
    '6' => 'black',
];

$valueColor = readline('Введіть номер кольору: ');

if (!is_numeric($valueColor)){
    echo 'Error: Введіть число!' . PHP_EOL;
    exit;
}

if (array_key_exists($valueColor, $arrayColor)){
    echo $arrayColor[$valueColor] . PHP_EOL;
}else{
    echo 'white' . PHP_EOL;
}
