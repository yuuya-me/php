<?php
$a = 7;
$c = 10;

// $aが5の場合6行目の文がweb上に表示される
if ($a === 5) {
    echo "\$aは5です";   
} else if ($c === 7) { // $cが７の場合10行目の文がweb上に表示される
    echo "\$cは7です";
} else { // 上記の条件に当てはまらない場合14行目の文がweb上に表示される
    echo "\$aは5以外です";
}
echo "<br />";
?>

<?php
$people = "Saburo";

// $peopleの中身に応じて以下の文をweb上に表示する
switch ($people) {
    // $peopleの中身がSaburoの場合26行目の文がweb上に表示される
    case "Saburo":
        echo "三郎です";
        break;
    // $peopleの中身がTarouの場合30行目の文がweb上に表示される        
    case "Tarou":
        echo "太郎です";
        break;
    // $peopleの中身が条件に当てはまらない場合34行目の文がweb上に表示される            
    default:
        echo "エラー";
        break;
}
echo "<br />";
?>

<?php
$a = 7;
// $aの中身が4より大きい場合TRUE4未満の場合FALSEとweb上に表示される
$result =($a > 4) ? "TRUE" :"FALSE";
echo $result;