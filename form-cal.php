<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculator</title>
</head>
<body>
<?php

if (count($_POST)) {
    $fn = $_POST['fn'];
    $sn = $_POST['sn'];

    echo $fn - $sn;}
?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <div>
        <label for="">First Number</label>
        <input type="number" name="fn" id="">
    </div>

    <div>
        <label for="">Last number</label>
        <input type="number" name="sn" id="">
    </div>
    <div>
        <button type="submit">Send</button>
    </div>
</form>
</body>
</html>