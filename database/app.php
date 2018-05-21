<?php

$link = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_apr_18'
) or die (mysqli_connect_error());

$sql = 'select * from student';

$result= mysqli_query($link, $sql) or die (mysqli_error($link));

$data= [];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
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
    <style>
        body {
            font-family: arial;
            font-size: 16px;
        }
        table, table th, table td {
            border: 1px solid #0000ee;
            border-collapse: collapse;
            margin: 0;
        }

        table th, table td {
            padding: 6px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    <?php foreach ($data as $student):?>
    <tr>
        <td><?=$student['id']?></td>
        <td><?=$student['name']?></td>
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>
