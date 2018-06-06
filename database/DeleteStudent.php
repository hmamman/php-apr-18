<?php
include 'Student.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $student = new Student();
    $data = $student->deleteStudent($id);
}

header("Location: app.php");