<?php
include 'inc/connection.php';
if ($_POST) {
    $id = $_POST['id'];
    $name = $_POST['name'];

    // $sql = 'insert into student (id, name) value ('."'{$id}'".', '."'{$name}'".')';
    $sql = sprintf("insert into student (id, name) values (%s, %s)", escape($id), escape($name));

    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
}

header("Location: app.php");