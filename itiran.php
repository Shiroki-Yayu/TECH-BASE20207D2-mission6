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


    <div style="margin-left:5%;padding:2% 3%;width:60%;float:left;">
      ここにデータベースから取得した結果を表示したい
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

</body>
</html>