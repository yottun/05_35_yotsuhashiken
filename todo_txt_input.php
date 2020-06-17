<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>textファイル書き込み型todoリスト（入力画面）</title>
</head>

<body>
  <form action="todo_txt_create.php" method="POST">
    <fieldset>
      <legend>textファイル書き込み型todoリスト（入力画面）</legend>
      <a href="todo_txt_read.php">一覧画面</a>
      <div>
        名前: <input type="text" name="name">
      </div>
      <div>
        email: <input type="text" name="email">
      </div>
      <div>
        あなたの好きなスポーツは？<br>
        <input id="soccer" type="checkbox" name="soccer" value="soccer">
        <label for="soccer">サッカー</label>
        <input id="baseball" type="checkbox" name="baseball" value="baseball">
        <label for="baseball">野球</label>
        <input id="rugby" type="checkbox" name="rugby" value="rugby">
        <label for="rugby">ラグビー</label>
        <input id="tableTennis" type="checkbox" name="tableTennis" value="tableTennis">
        <label for="tableTennis">卓球</label>
        <input id="wrestling" type="checkbox" name="wrestling" value="wrestling">
        <label for="wrestling">レスリング</label>

        <!-- phpでチェックボックスを生成 -->
        <?php
        // $favoriteSports = array(1 => 'soccer', 2 => 'baseball', 3 => 'rugby', 4 => 'tableTennis', 5 => 'wrestling');
        // foreach($favoriteSports as $key => $value) {
        //   echo '<label><input type="checkbox" name="favoriteSports[]" value="'.$key.'"/>'.$value.'<label>'."\n";
        // }
        ?>
      </div>
      <div>
        あなたの好きなジャンルは？:<br>
        <input id="finePlay" type="radio" name="genre" value="finePlay">
        <label for="finePlay">好プレー</label>
        <input id="unusualPlay" type="radio" name="genre" value="unusualPlay">
        <label for="unusualPlay">珍プレー</label>
        <input id="fairPlay" type="radio" name="genre" value="fairPlay">
        <label for="fairPlay">フェアプレー</label>
        <input id="impressive" type="radio" name="genre" value="impressive">
        <label for="impressive">感動</label>
        <input id="legend" type="radio" name="genre" value="legend">
        <label for="legend">伝説</label>
      </div>
      <div>
        <button>ここを押してね！！</button>
      </div>
    </fieldset>
  </form>
  <div></div>

  <style>
    label {
      margin-right: 10px;
    }
  </style>

</body>

</html>