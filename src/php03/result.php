<?php

// 指定されたファイルを一度だけ読み込む
require_once('config/status_codes.php');

$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);

// 
if (!$option) {
  // ブラウザが自動的に指定されたURLに移動する
  header('Location: index.php');
}

// $statusus_codesから変数$status_codesを表示する
foreach ($status_codes as $status_code) {
  //  
  if ($status_code['code'] === $answer_code)
  {
    $code = $status_code['code'];
    $description = $status_code['description'];
  }
}

$result = $option === $code;

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Code Quiz</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
  <!--  htmlで外部のCSSファイルを読み込むためのタグ　-->
</head>

<body>
<header class="header">
  <div class="header__inner">
    <a class="header__logo" href="/">
      Status Code Quiz
    </a>
  </div>
</header>
<!-- ヘッダー名Status Code Quiz -->

<main>
  <div class="result__content">
    <div class="result">
      <?php if ($result): ?>
      <h2 class="result__text--correct">正解</h2>
      <?php else: ?>
      <h2 class="result__text--incorrect">不正解</h2>
      <?php endif; ?>
      <!-- 結果に応じて成否判定 // -->
    </div>
    <div class="answer-table">
      <table class="answer-table__inner">
      <tr class="answer-table__row">
        <th class="answer-table__header">ステータスコード</th>
        <td class="answer-table__text">
        <?php echo $code ?>
        </td>
        <!-- ステータスコードを表示する -->
      </tr>
      <tr class="answer-table__row">
        <th class="answer-table__header">説明</th>
        <td class="answer-table__text">
        <?php echo $description ?>
      </td>
      <!-- ステータスコードの説明を表示する　-->
      </tr>
      </table>
    </div>
  </div>
</main>
</body>

</html>
