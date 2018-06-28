<?php

include "database/Users.php";

$user = new Users();

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = $user->loginUser($username, $password);

    if ($login) {
        $_SESSION['user'] = $username;
        $_SESSION['isLoggedIn'] = true;
        unset($_SESSION['loginError']);

        header('Location: form.php');
    } else {
      $_SESSION['loginError'] = 'Your username or password is invalid';
        header('Location: login.php');
    }
}

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<div>
  <?=isset($_SESSION['loginError']) ? $_SESSION['loginError']: ''?>
</div>
<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    <label for="">Username</label>
    <input type="text" name="username" id=""><br>
    <label for="">Password</label>
    <input type="password" name="password" id=""><br>
    <input type="submit" value="Login">
</form>
</body>
</html>