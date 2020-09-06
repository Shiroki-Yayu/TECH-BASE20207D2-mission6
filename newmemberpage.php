<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>アイデア宝石店</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body style="margin:0;">
  <div class="newheader">仮登録フォーム</div>
  <br><br>
  <div class="boxlightblue">
    会員登録のためにメールアドレスを入力してください。<br>
    メールアドレス入力後に本登録フォームへのリンクをお送りいたします。
  </div>
  <form action='mailcheck.php' method="post" style="margin:auto;padding:3% 5%;border:1px solid black;width:30%;background-color:blue">
    <div style="font-size:15pt;color:white">メールアドレス</div>
    <input type="text" name="mail" style="width:100%;font-size:10pt;"><br><br>
    <input type="submit" name="submit" value="送信" style="font-size:15pt;margin-left:90%;">
  </form>

  <br><br><br>
  <a href="mission6top-page.php" style="margin-left:20%;">トップページに戻る</a>
</body>

</html>