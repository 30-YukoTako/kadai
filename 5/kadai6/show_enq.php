<html>
<head>
    <meta charset="UTF-8">
    <title>アンケート表示</title>
</head>
<body>
<?php
     $name=htmlspecialchars($_POST["name"],ENT_QUOTES);
     $age=htmlspecialchars($_POST['age'],ENT_QUOTES);
     $email=htmlspecialchars($_POST['email'],ENT_QUOTES);
     $sex=htmlspecialchars($_POST['sex'],ENT_QUOTES);

     //csvに出力する配列
     $array = array($name,$age,$email,$sex);

     //ファイルを開く
     $handle=fopen('question.csv','a');

     //ロック
     flock($handle,LOCK_EX);

     //書き込み
     fputcsv($handle, $array);

     //ロック解除
     flock($handle,LOCK_UN);

     //閉じる
     fclose($handle);
  ?>
</body>
</html>