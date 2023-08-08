<?php



//function calc (int $a, int $b, ?Closure $callback = null){
//    if (is_callable($callback)){
//        $result = $callback($a,$b);
//    }else{
//        $result = $a + $b;
//    }
//    return $result;
//}
//echo calc(2,4,) . PHP_EOL;
//echo calc(2,4, function ($x, $y)
//{
//    return $x * $y;
//}) . PHP_EOL;

//$user = [
//    'name' => 'Саша',
//    'age' => 18,
//    'citi' => 'Київ',
//    'status' => false,
//
//];
//$user['phones'] = [
//    'main' => 380935487043,
//    'secondary' => [
//        380931231321,
//        380912312312,
//        380935487012,
//    ]
//];
//
//function recursiveEcho (array $values): void
//{
//    foreach ($values as $key => $value){
//        if (is_array($value)){
//            echo $key . ': ' . PHP_EOL;
//            recursiveEcho($value);
//        } else {
//            echo $key . ': ' . $value . PHP_EOL;
//        }
//    }
//}
//
//recursiveEcho($user);


//function generateGreeting(array $names): void
//{
//    $greetings = ['Привіт', 'Вітаю', 'Доброго дня' ];
//
//    foreach ($names as $name){
//        $randomGreeting = $greetings[array_rand($greetings)];
//        echo "$randomGreeting, $name!" . PHP_EOL;
//    }
//}
//
//generateGreeting([
//    'Sasha',
//    'Олена',
//    'Олег',
//    'Марина'
//]);
