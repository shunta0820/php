<?php
echo 'hello php!';
echo "\n";

$height = 160;
if ($height < 150){
  echo "150cm未満の方はご乗車になれません";
} else{
  echo "ご乗車になれます";
}
echo "\n";

$height = 230;
if ($height < 150){
 echo "150cm未満の方はご乗車になれません";  
} else if ($height >= 200){
  echo "200cm以上の方はご乗車できません";
} else{
  echo "ご乗車になれます。";
}
echo "\n";

$weekday = "木曜";
switch ($weekday) { 
  case "月曜":
  case "木曜":
    echo "可燃ごみの日です。";
    break;
  case "水曜":
    echo "資源ごみの日です。";
    break;
  default:
    echo "回収はありません。";
}
echo "\n";

$weekday = "月曜";
switch($weekday){
  case "月曜":
  echo "可燃ごみの日です";
  break;
  case "水曜":
  echo "資源ごみの日です";
  break;
  default:
    echo "回収しません";
}
echo "\n";

$a = 3;
$b = 3;
$C = "3";
var_dump($a == $b);
echo "\n";
var_dump($a != $b);
echo "\n";

for ($i = 0;$i < 10;$i++){
  echo $i;
}
echo "\n";

$total = 0;
for($i = 0;$i <= 100;$i++){
 $total+=$i;
}
echo $total;
echo "\n";

$fruits = array("apple","orange","lemon");
for($i=0;$i < count($fruits);$i++){
  echo "要素は".$fruits[$i];
  echo "\n";
}
echo "\n";

$animals = array("dog","cat","rabbit");
foreach ($animals as $animal){
  echo "要素は".$animal;
  echo "\n";
}