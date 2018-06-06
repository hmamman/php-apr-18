<?php
include 'Student.php';

$student = new Student();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $data = $student->getStudent($id);
}

if ($_POST) {
  $result = $student->updateStudent();

  if ($result) {
      header("Location: app.php");
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
<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    <table>
        <tr>
            <td>Id: <?=$data['id'];?></td>
        </tr>
        <tr>
            <td>
                Name: <input type="text" value="<?=$data['name'];?>" name="name">
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="id" value="<?=$data['id'];?>">
                <button type="submit">Save</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
