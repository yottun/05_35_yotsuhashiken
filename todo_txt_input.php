<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート（入力画面）</title>
  <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
</head>

<body>
  <form action="todo_txt_create.php" method="POST">
    <fieldset>
      <legend>アンケート（入力画面）</legend>
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
        <input id="finePlay" type="checkbox" name="finePlay" value="finePlay">
        <label for="finePlay">好プレー</label>
        <input id="unusualPlay" type="checkbox" name="unusualPlay" value="unusualPlay">
        <label for="unusualPlay">珍プレー</label>
        <input id="fairPlay" type="checkbox" name="fairPlay" value="fairPlay">
        <label for="fairPlay">フェアプレー</label>
        <input id="impressive" type="checkbox" name="impressive" value="impressive">
        <label for="impressive">感動</label>
        <input id="legend" type="checkbox" name="legend" value="legend">
        <label for="legend">伝説</label>
      </div>
      <div>
        <button>ここを押してね！！</button>
      </div>
    </fieldset>
  </form>
  <div>
    <h2 class="">おすすめ</a></h2>
  </div>
  <div class="">
    <div class="col-md-6 col-md-offset-3">
      <form action="#">
        <!-- 動画検索 -->
        <p><input type="text" id="search" placeholder="検索" autocomplete="off" class="form-control"></p>
        <p><input id="searchBtn" type="submit" value="search" class="form-control btn btn-orimary w100"></p>
      </form>
      <div id="results"></div>
    </div>
  </div>

  <style>
    label {
      margin-right: 10px;
    }
  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="main.js"></script>
  <script src="https://apis.google.com/js/client.js?onload=init"></script>
  <script>
    // const url = 'https://www.googleapis.com/youtube/v3/channels?part=contentDetails&forUsername=ユーザーID&key=AIzaSyATs4tZoydPgiDZSTU1oC4Wbq6KREH5MUI'

    //step1:uploadsのplaylistIdの取得を試みる
    // $.ajax({
    //   "timeout": 5000,
    //   "url": "https://www.googleapis.com/youtube/v3/channels",
    //   "type": "GET",
    //   "dataType": "jsonp",
    //   "data": {
    //     "part": "contentDetails",
    //     "key": AIzaSyATs4tZoydPgiDZSTU1oC4Wbq6KREH5MUI,
    //     "forUsername": ユーザーID,
    //     // または "id": チャンネルID,
    //   },
    //   "success": function(res) {
    //     if (!res || !res.items || !res.items[0] || !res.items[0].contentDetails || !res.items[0].contentDetails.relatedPlaylists || !res.items[0].contentDetails.relatedPlaylists.uploads) {
    //       //error処理
    //       alert("error!");
    //       return "";
    //     }

    //     var playlistId = res.items[0].contentDetails.relatedPlaylists.uploads;

    //     //step2:uploadsのplaylistIdが動画リストを取得する
    //     $.ajax({
    //       "timeout": 5000,
    //       "url": "https://www.googleapis.com/youtube/v3/playlistItems",
    //       "type": "GET",
    //       "dataType": "jsonp",
    //       "data": {
    //         "part": "snippet",
    //         "key": AIzaSyATs4tZoydPgiDZSTU1oC4Wbq6KREH5MUI,
    //         "playlistId": playlistId,
    //         "maxResults": 10
    //         // 件数(～50)
    //       },
    //       "success": function(res) {
    //         if (!res || !res.items || !res.items[0] || !res.items[0].snippet || !res.items[0].snippet.resourceId || !res.items[0].snippet.resourceId.videoId) {
    //           //error処理
    //           alert("error!");
    //           return "";
    //         }

    //         var videoIds = [];
    //         for (var i = 0; i < res.items.length; i++) {
    //           var id = res.items[i].snippet.resourceId.videoId;
    //           if ($.inArray(id, videoIds) != -1) {
    //             continue;
    //           }
    //           videoIds.push(id);
    //         }

    //         //videoIdsの取得成功
    //         alert(videoIds.join("\n"));
    //       },
    //       "error": function(res, status) {
    //         //error処理
    //         alert("error!");
    //         return "";
    //       }
    //     });
    //   },
    //   "error": function(res, status) {
    //     //error処理
    //     alert("error!");
    //     return "";
    //   }
    // });
  </script>

</body>

</html>