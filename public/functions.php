<?php

function getCircleArea (int|float $radiusCircle): void
{
    echo 'Площа кола: ' . pi() * pow($radiusCircle, 2) . PHP_EOL;
}

getCircleArea(readline('Введіть радіус кола для обчислення його площі: '));

function exponentiation (int|float $number, int|float $exponent ): float|int
{
    return pow($number, $exponent);
}

$numbers = readline('Введіть число яке хочете піднести до ступеню: ');
$exponent = readline('До якої ступені хочете піднести?: ');

echo 'Результат: ' . exponentiation($numbers, $exponent) . PHP_EOL;

$number = readline( 'Введить число: ');

function returnsNewNumber ($num): int|float
{
    return $num += 1;
}

function changeNumber (&$num): int|float
{
    return $num += 1;
}

echo 'Ваше число: ' . $number . PHP_EOL;
echo 'Змінене число: ' . returnsNewNumber($number) . PHP_EOL;

echo changeNumber($number) . PHP_EOL;
echo $number . PHP_EOL;
