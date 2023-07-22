<?php

function getCircleArea (int|float $radiusCircle): void
{
    echo 'Площа кола: ' . pi() * pow($radiusCircle, 2) . PHP_EOL;
}

getCircleArea(10);
getCircleArea(78);


function exponentiation (int|float $number, int|float $expression): float|int
{
    return pow($number, $expression);
}

echo exponentiation(10.1, 2.2) . PHP_EOL;
