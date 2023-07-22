<?php

if ($argc == 1){
    echo 'Error: Введіть числа!' . PHP_EOL;
    exit;
}

$sum = 0;
$arithmeticAverage = 0;
//$sum = array_sum($argv);
for ($i = 1; $i < $argc; $i++){
    if (is_numeric($argv[$i])) {
        $sum = $sum + $argv[$i];
    }else {
        echo 'Error: Введено невірні дані!' . PHP_EOL;
        exit;
    }
}

$arithmeticAverage = $sum / ($argc - 1);

echo 'Сумма чисел: ' . $sum . PHP_EOL;
echo 'Середне арифметичне: ' . $arithmeticAverage . PHP_EOL;
