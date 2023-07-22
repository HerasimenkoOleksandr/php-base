<?php
$color = 'red';

/*
red = ff0000
green = 00ff00
blue = 0000ff
 */

echo match ($color){
    'red' => 'ff0000',
    'green' => '00ff00',
    'blue' => '0000ff',
};

$map = [
    'red' => 'ff0000',
    'green' => '00ff00',
    'blue' => '0000ff',
];

function getColorByName ($text, array $map)
{


    return $map[$text] ?? '000000';

}

$colorCode = getColorByName('red', $map);
