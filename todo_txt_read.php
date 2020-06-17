<?php
// 出力用の文字列（ここに読み込んだデータをタグに入れた形式で追加していく）
// $str = "";
// ファイルを開く処理
// $file = fopen('data/todo.csv', 'r');
// ファイルロックの処理
// flock($file, LOCK_EX);
// ファイル書き込み処理
// 1行づつ取り出す
// if ($file) {
//   while ($line = fgets($file)) {
//     $str .= "<tr><td>{$line}<td><tr>";
//   }
// }


// ファイルアンロックの処理
// flock($file, LOCK_UN);
// ファイル閉じる
// fclose($file);

//ファイルを変数に入れる
$csv_file = file_get_contents('data/todo.csv');

//変数を改行毎の配列に変換
$aryList = explode("\n", $csv_file);

$aryCsv = [];
foreach ($aryList as $key => $value) {
  //if($key == 0) continue; 1行目が見出しなど、取得したくない場合
  if (!$value) continue; //空白行が含まれていたら除外
  $aryCsv[] = explode(",", $value);
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>集計結果リスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>集計結果リスト（一覧画面）</legend>
    <a href="todo_txt_input.php">入力画面</a>

    <table>
      <tr>
        <th>名前</th>
        <th>email</th>
        <th>サッカー</th>
        <th>野球</th>
        <th>ラグビー</th>
        <th>卓球</th>
        <th>レスリング</th>
        <th>好プレー</th>
        <th>珍プレー</th>
        <th>フェアプレー</th>
        <th>感動</th>
        <th>伝説</th>
      </tr>
      <?php foreach ($aryCsv as $value) { ?>
        <tr>
          <td><?php echo $value[0] ?></td>
          <td><?php echo $value[1] ?></td>
          <td><?php echo $value[2] ?></td>
          <td><?php echo $value[3] ?></td>
          <td><?php echo $value[4] ?></td>
          <td><?php echo $value[5] ?></td>
          <td><?php echo $value[6] ?></td>
          <td><?php echo $value[7] ?></td>
          <td><?php echo $value[8] ?></td>
          <td><?php echo $value[9] ?></td>
          <td><?php echo $value[10] ?></td>
          <td><?php echo $value[11] ?></td>
        </tr>
      <?php } ?>
    </table>
    <!-- <table>
      <thead>
        <tr>
          <th>リスト</th>
        </tr>
      </thead>
      <tbody id="output_csv">
        <?= $str ?>
      </tbody>
    </table> -->
  </fieldset>

  <style>
    th,td{
      border: solid 1px black;
    }
  </style>

  <script>
    // const outputElement = document.getElementById('output_csv');

    // function getCsvData(dataPath) {
    //   const request = new XMLHttpRequest();
    //   request.addEventListener('load', (event) => {
    //     const response = event.target.responseText;
    //     convertArray(response);
    //   });
    //   request.open('GET', dataPath, true);
    //   request.send();
    // }

    // function convertArray(data) {
    //   const dataArray = [];
    //   const dataString = data.split('\n');
    //   for (let i = 0; i < dataString.length; i++) {
    //     dataArray[i] = dataString[i].split(',');
    //   }
    //   outputElement.innerHTML = dataArray;
    // }

    // getCsvData('data/todo.csv');
  </script>
</body>

</html>