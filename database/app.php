<?php
include 'inc/connection.php';

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
<form action="InsertStudent.php" method="post">
  <table>
    <tr>
      <td>Id: <input type="number" name="id"></td>
    </tr>
    <tr>
      <td>
        Name: <input type="text" name="name">
      </td>
    </tr>
    <tr>
      <td>
        <button type="submit">Save</button>
      </td>
    </tr>
  </table>
</form>
<hr>
<br>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    <?php foreach ($data as $student):?>
    <tr>
        <td><?=$student['id']?></td>
        <td><?=$student['name']?></td>
        <td>
          <a href="EditStudent.php?id=<?=$student['id']?>">Edit</a> |
          <a href="DeleteStudent.php?id=<?=$student['id']?>">Delete</a>
        </td>
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>
