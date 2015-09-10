
<?php
//var_dump($_POST);
/*session_start();

if(isset($_SESSION['name'])){

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
}
*/?>


<?php
/*
session_start();

if(isset($_SESSION['name'])){
    
    $name = $_SESSION['name'];
    $age = $_SESSION['age'];
    $email = $_SESSION['email'];
    $sex = $_SESSION['sex'];
}
  */  


?>

<html>
<head>
<meta charset="utf-8">
<title>確認画面 - お問い合わせ</title>
</head>
<body>

<html>
<head>
<meta charset="utf-8">
<title>確認画面 - お問い合わせ</title>
</head>
<body>
<p>入力内容をご確認ください</p>
<form action="input_finish.php" method="post">
<table>
<tr>
    <th>名前</th><td><?php echo $_POST["name"]; ?></td>
</tr>
<tr>
    <th>年齢</th><td><?php echo $_POST["age"]; ?></td>
</tr>
<tr>
    <th>e-mail</th><td><?php echo $_POST["email"]; ?></td>
</tr>
<tr>
    <th>性別</th><td><?php echo $_POST["sex"]; ?></td>
</tr>
<tr>
    <td colspan="2"><input type="submit" name="submit" value="送信する"></td>
</tr>
</table>
</form>

<p><a href="input_enq.php?action=edit">入力画面へ戻る</a></p>




<form  action ="show_enq.php" method="POST">
<input type="hidden" name="name" value="<?php echo $name; ?>">
<input type="hidden" name="age" value="<?php echo $age; ?>">
<input type="hidden" name="email" value="<?php echo $email; ?>">
<input type="hidden" name="sex" value="<?php echo $sex; ?>">
<input type="submit" value="送信">
</form>
</body>
</html>