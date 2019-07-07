<?php
function sum($max){
  $result = 0;
  for($i = 1;$i <= $max;$i++){
    $result += $i;
  }
  return $result;
}
echo sum(100);
?>

<?php
// 1から100までを順番に表示する関数
function print_number(){

    for($i = 0; $i < 100; $i++){
        echo $i;
    }
}
?>

<?php
$string = "ABCDEF";
echo strlen($string);
echo "\n";
?>

<?php
$string = "I LOVE Ruby";
$new_string = str_replace("Ruby","PHP",$string);
echo $new_string;
echo "\n";
?>

<?php
$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array);
?>

<?php
$array = array(2,5,9,7,3,1,8,6,4);
asort($array);
print_r($array);
?>



<?php
function f($a, $b){
 $result = $a + $b;
 return $result;
 }
 echo f(3, 4);
 ?>
 
<?php
$arr = array(1,3,5,7,9);
  echo $arr[0]* $arr[1]*$arr[2]*$arr[3]*$arr[4];
?>

<?php
function output($value){
    $result = $value * 2;
    return $result;
}
echo output(10);
echo "\n";
?>

<?php
$text = '<p>あいうえお</p><!-- Comment --> <a href="#fragment">かきくけこ</a>';
echo strip_tags($text);
echo "\n";

// <p> と <a> は許可します
echo strip_tags($text, '<p><a>');
echo "\n";
?>

<?php
$arr = array("肉","魚");
array_push($arr, "卵","野菜");
print_r($arr);
echo "\n";
?>

<?php
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array = array_merge($array1,$array2,$array3);
print_r($array);
echo "\n";
?>

<?php
echo "現在のUnixタイムスタンプ:".time();
echo "\n";

//3日後のタイムスタンプを取得
$nweek = time() + (3*24*60*60);
echo '3日後のUnixタイムスタンプ:'.$nweek;
echo "\n";

?>

<?php
$timestamp = mktime(0,0,0,8,20,1990);
echo '1990年8月20日0時0分0秒のUnixタイムスタンプは'.$timestamp;
echo "\n";
?>

<?php
$timestamp = time();
echo date("Y/m/d");
echo "\n";
?>

<?php
$timestamp = time();
echo date("Y年n月j日");
echo "\n";
?>