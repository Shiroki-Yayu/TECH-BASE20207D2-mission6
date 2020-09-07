<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>アイデア宝石店</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body style="margin:0;">
  <div class="newheader">本登録フォーム</div>
  <br><br>
  
  <div style="text-align:center;margin:auto;padding:0.5%5%;width:30%;background-color:lightblue;">
    本登録情報記入欄
  </div>
  
  <form action='hontourokucheck.php' method="post" style="margin:auto;padding:3% 5%;border:1px solid black;width:30%;background-color:blue">
    <div style="font-size:15pt;color:white">ユーザーID(メールアドレス)</div>
    <input type="text" name="mail" style="width:100%;font-size:10pt;"><br><br>
    <div style="font-size:15pt;color:white">氏名：</div>
    <input type="text" name="name" style="width:80%;font-size:10pt;"><br><br>
    <div style="font-size:15pt;color:white">氏名カナ：</div>
    <input type="text" name="namekana" style="width:80%;font-size:10pt;"><br><br>
    <div style="font-size:15pt;color:white">パスワード:</div>
    <input type="text" name="password" style="width:80%;font-size:10pt;"><br><br>
    <input type="submit" name="submit" value="送信" style="font-size:15pt;margin-left:90%;">
  </form>

  <br><br><br>
  <a href="mission6top-page.php" style="margin-left:20%;">トップページに戻る</a>
</body>

</html>