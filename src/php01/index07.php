<?php

// 関数にoutputNumberというタグをつける
function outputNumber()
{
    // 関数が呼び出されたときにHello worldと表示する
    echo "Hello world";
    echo '<br />';
}

// ブラウザに関数outputNumberを呼び出し表示する
outputNumber();// ①
?>

<?php

// 関数にtextというタグをつけ引数$number1と$number2というタグをつける
function text($number1, $number2)
{
    // 引数を足した結果をvalueに代入する
    $value = $number1 + $number2;
    echo $value . '<br />';
    // $valueを呼び出す
    return $value;
}

// 関数の結果を$totalに代入しブラウザに表示する
$total = text(2,4);
echo $total;
?>

