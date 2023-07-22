<?php

$rabndomNumberArray = rand(0, 100);
shuffle($rabndomNumberArray);

foreach ($rabndomNumberArray as $item){
    echo $item . PHP_EOL;
}
