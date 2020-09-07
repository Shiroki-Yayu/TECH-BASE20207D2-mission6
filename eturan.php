<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>アイデア宝石店</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body style="margin:0;">
  <div class="newheader">会員トップページ</div> 
  <br><br><br>

  <div class="cf">
    <div style="float:left">
      <div style="margin-left:5%;padding:2% 3%;width:80%;">
        アイデア名：ここにデータベースからの情報を書きたい<br>
        詳細：<br>
        ここにデータベースからの情報を書きたい
      </div>
      <form action='hontourokucheck.php' method="post" style="margin-left:5%;padding:2% 3%;width:60%;">
        <div style="font-size:15pt;">コメント</div>
        <textarea name="comment" cols="120" rows="8" style="font-size:10pt;"></textarea>
        <input type="submit" name="submit" value="送信" style="font-size:15pt;">
      </form>
    </div>

    <div style="float:right;">
      <div class="memberimformation">
        <h2 style="padding-left: 15%;">ログイン中の<br>会員情報</h2>
        <br>
        氏名：データベースから情報を取得したい
        <br>
        投稿数：データベースから情報を取得したい
        <br>
        コメント数：データベースから情報を取得したい
        <br>
        <form action='logoutcheck.php' method="post">
          <input type="submit" name="logout" value="ログアウト" style="margin:10%35%;padding:auto;">
        </form>
      </div>

      <a href="mission6top-page.php">トップページに戻る</a>
    </div>
  </div>

  <div style="margin-left:5%">
    つけられたコメント<br>
    この下のエリアにデータベースから取得したコメントのデータを表示したい。
  </div>
</body>
</html>