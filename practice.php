<?php
echo 'hello php!';
echo "\n";
$integer = 20;
echo $integer;
echo "\n";
$integer = 20;
$new_integer = $integer+10;
echo $new_integer;
echo "\n";
$array = [2017,2018,2019,2020];
echo $array[0];
echo "\n";
$array = ["spring","summer2,2winter","autumn"];
echo $array[2];
echo "\n";
$animals = ["cat"=>"猫","dog"=>"犬","bird"=>"鳥"];
echo $animals["cat"];
echo "\n";
echo "\n";
$result = true;
if($result == true){
  echo "成功しました";
} else{
  echo "失敗しました";
}
echo "\n";
$value = 6;
echo $value+2;
echo "\n";

$value = "AAA";
echo $value."BBB";
echo "\n";

$Value = 10;
$result = $Value == 20;
var_dump($result);
echo "\n";

$value = 10;
$result = $value == 20;
var_dump($result);
echo "\n";

$a = "20";
$b = 20;

$result = $a == $b;
var_dump($result);
echo "\n";

$value = 10;
++$value;
echo $value;
$value = 10;
$value += 5;
echo $value;
echo "\n";

$value = 'apple';
$value .= 'orange';
echo $value;
echo "\n";

$value = 10;
$result = ($value < 20)?'$valueは20より小さい' : '$valueは20より大きい';
echo $result;



