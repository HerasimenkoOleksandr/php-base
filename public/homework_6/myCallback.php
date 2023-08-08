<?php

$firstValue = readline('Перше число: ');
$secondValue = readline('Друге число: ');

function multiplication (int|float $a, int|float $b, ?Closure $callback = null): float|int
{
    $result = $a * $b;
    if ($callback){
         $callback($result);
    }
    return $result;
}

multiplication($firstValue, $secondValue, function($result){
    echo 'Результат множення: ' . $result . PHP_EOL;
});
