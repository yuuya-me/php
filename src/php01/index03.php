<?php
// itemにJavaScriptという値を入れる
$item = "JavaScript";
//　itemにPHPという値を入れる
$item = "PHP";
// itemの中身をweb上に表示する
echo $item;
?>

<?php
// FFLANGUAGEにVue.jsという値を入れる
const FELANGUAGE = "Vue.js";
// FFLANGUAGEの中身をweb上に表示する
echo FELANGUAGE;
?>

<?php
// name1にSatoとTaroという値を入れる
$name1 = "Sato" . "Taro";
// name2にTanakaという値を入れる
$name2 =  "Tanaka";
// last_nameにYamadaという値を入れる
$last_name = "Yamada";
// first_nameにSaburoという値を入れる
$first_name = "Saburo";

// name1の中身をweb上に表示する
echo $name1;
// 改行する
echo "<br />";
// name2の中身とJiroを繋げてweb上に表示する
echo $name2 . "Jiro";
echo "<br />";
// last_nameとfirst_nameを繋げてweb上に表示する
echo $last_name . $first_name;
echo "<br />"
?>

<?php
$name = "Tanaka";
$last_name = "Ymada";
$first_name = "Saburo";

echo $name . "Jiro";
echo "<br />";
echo $last_name . $first_name;