<?php
include 'inc/connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = sprintf('delete from student where id = %s', escape($id));

    $result = mysqli_query($link, $sql);
}

header("Location: app.php");