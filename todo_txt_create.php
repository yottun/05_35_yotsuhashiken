<?php
// var_dump($_POST);
// exit();

// データの受取
$name = $_POST['name'];
$email = $_POST['email'];
$soccer = $_POST['soccer'];
$baseball = $_POST['baseball'];
$rugby = $_POST['rugby'];
$tableTennis = $_POST['tableTennis'];
$wrestling = $_POST['wrestling'];

$finePlay = $_POST['finePlay'];
$unusualPlay = $_POST['unusualPlay'];
$fairPlay = $_POST['fairPlay'];
$impressive = $_POST['impressive'];
$legend = $_POST['legend'];


// 書き込みデータの作成（スペース区切りで最後に改行コードを追加）
// $write_data = "{$todo} {$deadline}\n";

$ary = array(
    // array("名前", "年齢", "血液型"),
    array(
        "{$name}",
        "{$email}",
        "{$soccer}",
        "{$baseball}",
        "{$rugby}",
        "{$tableTennis}",
        "{$wrestling}",
        "{$finePlay}",
        "{$unusualPlay}",
        "{$fairPlay}",
        "{$impressive}",
        "{$legend}"
        )
);

// ファイルを開く処理
$file = fopen('data/todo.csv', 'a');
// ファイルロックの処理
flock($file, LOCK_EX);
// ファイル書き込み処理
// fwrite($file, $write_data);
if ($file) {
    foreach ($ary as $line) {
        fputcsv($file, $line);
    }
}
// ファイルアンロックの処理
flock($file, LOCK_UN);
// ファイルを閉じる処理
fclose($file);
// 入力画面へ移動
header("Location:todo_txt_input.php");

// csvファイルへの書き込みのみ行うので表示する画面は存在しない
