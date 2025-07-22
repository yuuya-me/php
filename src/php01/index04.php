<?php
// $a$b$cに数字の値を入れる
$a = 15;
$b = 3;
$c =10;

// $aに$bの足した値をweb上に表示する
echo $a + $b;
//　改行を入れる
echo "<br />";
//　$aから$bを引いた値をweb上に表示する
echo $a - $b;
echo "<br />";
// $aに$bを掛けた値をweb上に表示する
echo $a * $b;
echo "<br />";
// $aから$bを割った値をweb上に表示する
echo $a / $b;
echo "<br />";
// $aに$bを掛け$cで割った余りの値をweb上に表示する
echo $a * $b % $c;
echo "<br />";

?>

<?php
// $a$b$c$dに数字の値を入れる
$a = 15;
$b = 3;
$c = 10;
$d = 5;

// $aに$bの値を入れweb上に表示する
echo $a=$b;
echo "<br />";
// $cに$dの値を足してweb上に表示する
echo $c+=$d;
echo "<br />";
?>

<?php
$a = 20;
$b = 5;

// $aが$bより大きい場合1をweb上に表示する
if ($a >$b) {
  echo 1;
}
echo "<br />";
?>

<?php
$a = 20;
$b = 5;

//$aが10より大きく30より小さい場合1を表示する 
if (10<$a&&$a<30){
  echo 1;
}
echo "<br />";
?>

<?php
$a = 10;
$b = 10;
$c = 5;
$d = 5;

// $aに1を足した後に値をweb上に表示する
echo ++$a;
echo "<br />";
// $bの値をweb上に表示した後に1を足す
echo $b++;
echo "<br />";
// $cから1を引いた後に値をweb上に表示する
echo --$c;
echo "<br />";
// $dの値をweb上に表示した後1を引く
echo $d--;