<?php

$number = 5;
$text = 'ああああ';
$flag = true;
$test = null;

echo $number;
echo $text;
echo $flag;
//var_dump($flag);
echo $test;
//var_dump($test);

echo PHP_EOL;

$number1 = 10;
$number2 = 5;

$number3 = $number1 + $number2;
echo $number3;

$number3 = $number1 - $number2;
echo $number3;

$number3 = $number1 * $number2;
echo $number3;

$number3 = $number1 / $number2;
echo $number3;

$number3 = $number1 % $number2;
echo $number3;

echo PHP_EOL;

if(time() % 2 == 0){
    echo '偶数です';
}else{
    echo '奇数です';
}

echo PHP_EOL;

switch(time()){
    case time() % 2 == 0:
        echo '偶数です';
        break;
    default:
        echo '奇数です';
        break;
}

echo PHP_EOL;

for ($i = 1; $i <= 10; $i ++){
    echo $i;
}

echo PHP_EOL;

for ($i = 1; $i < 100; $i ++){
    if ($i % 3 === 0) {
        echo $i;
    }
}

echo PHP_EOL;

for($i = 1000; $i <= 2000; $i ++){
    if($i % 10 == 7) {
        echo $i;
        break;
    }
}

echo PHP_EOL;

$count = 1;

for($i = 0; $i < 3; $i ++){
    for ($j = 0; $j < $count; $j++) {
        echo "0"; }
        echo PHP_EOL; 
        $count ++;
}

$numberList = [1, 2, 3]; 
$numberList[] = 4;

echo $numberList[0];

echo PHP_EOL;

$count = count($numberList);

for($i = 0;$i < $count; $i++)
    echo $numberList[$i];

echo PHP_EOL;


foreach($numberList as $number){
    echo $number;
}
echo PHP_EOL;
?>