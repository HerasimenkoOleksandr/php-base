<?php

$randArray = [];

for ($i = 1; $i <= 20; $i++){
    $randArray[] = rand();
}

$minValue = min($randArray);
$maxValue = max($randArray);

sort($randArray);

echo 'Найменший елемент массива: ' . $minValue . PHP_EOL;
echo 'Найбільший елемент массива: ' . $maxValue . PHP_EOL;

print_r($randArray);
