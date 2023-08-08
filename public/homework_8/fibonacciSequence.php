<?php

//function fibonacciSequence (int $number): array
//{
//    $result = [0, 1];
//    while (end($result) < $number){
//        $sumTwo = ($result[array_key_last($result)] + $result[array_key_last($result) - 1]);
//        $result[] += $sumTwo;
//    }
//    if (end($result) > $number){
//        array_pop($result);
//    }
//
//    return $result;
//}
function fibonacciSequence (int $number): Generator
{
    $first = 0;
    $second = 1;

    $number == 0 ? yield $first : yield $second . yield $first;

    while ($second < $number){
        $result = $first + $second;
        $first = $second;
        $second = $result;
        if ($result <= $number) {
            yield $result;
        }
    }
}

$fibonacci = fibonacciSequence(1);

foreach ($fibonacci as $value){
    echo $value . PHP_EOL;
}
