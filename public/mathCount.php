<?php

if ($argc == 1){
    echo 'Error: Введіть числа!' . PHP_EOL;
    exit;
}

$sum = null;
$arithmeticAverage = null;

for ($i = 1; $i < $argc; $i++){
    if (!is_numeric($argv[$i])) {
        echo 'Error: Введено невірні дані!' . PHP_EOL;
        exit;
    }
    $sum += $argv[$i];
}

$arithmeticAverage = $sum / ($argc - 1);

echo 'Сумма чисел: ' . $sum . PHP_EOL;
echo 'Середне арифметичне: ' . $arithmeticAverage . PHP_EOL;
