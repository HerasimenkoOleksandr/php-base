<?php

for ($i = 3; $i <= 100; $i += 3){
//    echo $i . PHP_EOL;
    if (($i - 3) % 5 == 0){
        echo $i - 3 . PHP_EOL;
    }
}
