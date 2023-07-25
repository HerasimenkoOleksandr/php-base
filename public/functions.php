<?php

//function getCircleArea (int|float $radiusCircle): void
//{
//    echo 'Площа кола: ' . pi() * pow($radiusCircle, 2) . PHP_EOL;
//}
//
//getCircleArea(readline('Введіть радіус кола для обчислення його площі: '));
//
//function exponentiation (int|float $number, int|float $exponent ): float|int
//{
//    return pow($number, $exponent);
//}
//
//echo exponentiation(
//    readline('Введіть число яке хочете піднести до ступеню: '),
//    readline('До якої ступені хочете піднести: ')
//    ) . PHP_EOL;

$numberOne = 10;

function changeNumber (&$num): int|float
{
    return $num += 1;
}

$numberTwo = 10;

function returnsNewNumber ($num): int|float
{
    return $num += 2;
}

echo changeNumber($numberOne) . PHP_EOL;
echo $numberOne . PHP_EOL;
echo returnsNewNumber($numberTwo) . PHP_EOL;
echo $numberTwo . PHP_EOL;