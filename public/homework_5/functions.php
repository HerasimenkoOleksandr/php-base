<?php

function getCircleArea (int|float $radiusCircle): float|int
{
    return pi() * pow($radiusCircle, 2);
}

$radius = readline('Введіть радіус кола для обчислення його площі: ');

echo 'Площа кола: ' . getCircleArea($radius) . PHP_EOL;

function exponentiation (int|float $number, int|float $exponent ): float|int
{
    return pow($number, $exponent);
}

$numbers = readline('Введіть число яке хочете піднести до ступеню: ');
$exponent = readline('До якої ступені хочете піднести?: ');

echo 'Результат: ' . exponentiation($numbers, $exponent) . PHP_EOL;

$number = readline( 'Введіть число: ');
$condition = readline('Якщо хочете змінити ваше число введіть 1 якщо ні введіть 0: ');

function returnsNewNumber (&$num, $condition): int|float
{
    if ($condition == 1){
        return $num += 1;
    }
    return $num + 1;
}

echo 'Змінене число: ' . returnsNewNumber($number, $condition) . PHP_EOL;
echo 'Ваше число: ' . $number . PHP_EOL;
