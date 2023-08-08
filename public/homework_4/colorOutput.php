<?php

do {
    $valueColor = readline('Введіть номер кольору: ');
} while (!is_numeric($valueColor));
// Перший варіант
$color = match ($valueColor) {
    '1' => 'green',
    '2' => 'red',
    '3' => 'blue',
    '4' => 'brown',
    '5' => 'violet',
    '6' => 'black',
    default => 'white',
};

echo $color . PHP_EOL;

// Є багато ідей як реалізовати, тому залишаю декілька закоменьтованич варіантів виконнаня
//$arrayColor = [
//    '1' => 'green',
//    '2' => 'red',
//    '3' => 'blue',
//    '4' => 'brown',
//    '5' => 'violet',
//    '6' => 'black',
//];
//
//echo $arrayColor[$valueColor] ?? 'white';
//echo PHP_EOL;

// Ще один варіант
//$arrayColor = [
//    '1' => 'green',
//    '2' => 'red',
//    '3' => 'blue',
//    '4' => 'brown',
//    '5' => 'violet',
//    '6' => 'black',
//];
//if (array_key_exists($valueColor, $arrayColor)){
//    echo $arrayColor[$valueColor] . PHP_EOL;
//}else{
//    echo 'white' . PHP_EOL;
//}
