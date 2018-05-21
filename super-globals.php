<?php
$fn = $_POST['fn'];
$sn = $_POST['sn'];

echo $fn - $sn;


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$level = $_POST['level'];
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
<table>
    <tr>
        <td>First name</td>
        <td><?=$first_name;?></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><?=$last_name?></td>
    </tr>
    <tr>
        <td>Level</td>
        <td><?=$level?></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
</table>
</body>
</html>
