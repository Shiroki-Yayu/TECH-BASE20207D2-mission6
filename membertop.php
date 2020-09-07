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

  <div style="float:left;margin-left:5%;width:20%">
  <br><br><br>
  <a href="toukou.php" style="margin-left:20%;">・アイデア投稿画面へ</a>
  <br><br><br>
  <a href="itiran.php" style="margin-left:20%;">・アイデア一覧画面へ</a>
  </div>

  <div class="memberimformationtop">
    <h2 style="padding-left: 15%;">ログイン中の<br>会員情報</h2>
    <br><br><br>
    氏名：データベースから情報を取得したい
    <br>
    投稿数：データベースから情報を取得したい
    <br>
    コメント数：データベースから情報を取得したい
    <br><br><br>
    <form action='logoutcheck.php' method="post">
      <input type="submit" name="logout" value="ログアウト" style="margin:10%40%;padding:auto;">
    </form>
  </div>

</body>

</html>