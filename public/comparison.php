<?php

function comparisonOfTypes ($firstValue, $secondValue): void
{
    $getFirstValueString = getString($firstValue);
    $getSecondValueString = getString($secondValue);

    if ($firstValue == $secondValue){
        echo 'В несуворому порівнянні приведені данні ' . $getFirstValueString . ' та '.$getSecondValueString . ' рівні' . PHP_EOL;
    }else {
        echo 'В несуворому порівнянні приведені данні ' . $getFirstValueString . ' та '.$getSecondValueString . ' не рівні' . PHP_EOL;
    }

    if ($firstValue === $secondValue){
        echo 'В суворому порівнянні приведені данні ' . $getFirstValueString . ' та '.$getSecondValueString . ' рівні' . PHP_EOL;
    }else {
        echo 'В суворому порівнянні приведені данні ' . $getFirstValueString . ' та '.$getSecondValueString . ' не рівні' . PHP_EOL;
    }
    echo '_____________________________________________________________________________________' . PHP_EOL;
}

function getString ($value)
{
    if (is_bool($value)){
        return $value ? 'true' : 'false';
    }elseif ($value === null){
        return 'null';
    }
    if (is_string($value)){
        return  '\'' . $value . '\'';
    }
    return  $value;
}

comparisonOfTypes(10, '10');
comparisonOfTypes(true, 1);
comparisonOfTypes(false, 0);
comparisonOfTypes(true, '1');
comparisonOfTypes(false, '0');
comparisonOfTypes(null, 0);
comparisonOfTypes(null, '0');
comparisonOfTypes(null, null);
comparisonOfTypes(null, 'null');
comparisonOfTypes(3.14, '3.14');
comparisonOfTypes(null, '3.14');
