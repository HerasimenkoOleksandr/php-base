<?php

function counter(): int
{
    $count = 0;
    function () use ($count){
        $count ++;
    };
    return $count;
}
echo counter();
exit;

$myCallback  = function ()
{
    echo 1 . PHP_EOL;
};

function process ( array $data, ?callable $callback = null)
{
    $sum = 0;
    foreach ($data as $d) {
        if (($d % 2) == 0 && !is_null($callback)){
            $callback($d);
        }
        $sum += $d;
    }
    return $sum;
}

$result = process([1, 2, 5, 1, 4]);

exit;
