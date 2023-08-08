<?php

$isValidName = 0;

while (!$isValidName) {

    $userName = trim(readline('Як тебе звати? '));

    if (empty($userName)) {
        echo "Error: Будь ласка введіть ім'я!" . PHP_EOL;
        continue;
    }

    $isValidName = preg_match('/^[а-яіїєА-Яa-zA-Z\s]+$/u', $userName);

    if (!$isValidName) {
        echo "Error: Ім'я повинно містити тільки літери!" . PHP_EOL;
    }
}

echo 'Привіт, ' . $userName . '!' . PHP_EOL;
echo 'Дякую ' . $userName . ' <3 !' . PHP_EOL;
