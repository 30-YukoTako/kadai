
<?php
session_start();

$errors = array();

if(isset($_POST['submit'])){
    
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$sex = $_POST['sex'];

    $name = htmlspecialchars($name, ENT_QUOTES);
    $age = htmlspecialchars($age, ENT_QUOTES);
    $email = htmlspecialchars($email, ENT_QUOTES);
    $sex = htmlspecialchars($sex, ENT_QUOTES);
    
if($name === ""){
 $errors["name"] = "お名前が入力されていません";
}
if($name === ""){
 $errors["age"] = "年齢が入力されていません";
}
if($name === ""){
 $errors["email"] = "メールが入力されていません";
}
if($name === ""){
 $errors["sex"] = "性別が入力されていません";
}
    if(count($errors) === 0) {
        
        $_SESSION['name'] = $name;
         $_SESSION['age'] = $age;
         $_SESSION['email'] = $email;
         $_SESSION['sex'] = $sex;
        
        header('Location: http://localhost/kadai6/confirm_enq.php');
        exit();
}
       }

//echo"<pre>";
//var_dump($errors);
//echo"</pre>";
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>アンケート入力ページ</title>
</head>
<body>
<?php

echo"<ul>";
foreach($errors as $value){
    echo"<li>";
    echo $value;
    echo"</li>";
}

echo"</ul>";

?>

<form action="confirm_enq.php" method="post">
    <table>
        <tr>
            <th>名前</th><td><input type="text" name="name" value="<?php if(isset($name)){echo $name;}?>"></td>
        </tr>
        <tr>
            <th>年齢</th><td><input type="text" name="age" value="<?php if(isset($age)){echo $age;}?>"></td>
        </tr>
        <tr>
            <th>E-Mail</th><td><input type="text" name="email" value="<?php if(isset($email)){echo $email;}?>"></td>
        </tr>
        <tr>
            <th>性別</th><td><input type="radio" name="sex" value="men">男<input type="radio" name="sex" value="women">女</td>
        </tr>
        <tr>
        <td><input type="submit" name="submit" value="確認画面へ"></td>
        </tr>
    </table>
</form>

</body>
</html>