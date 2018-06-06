<?php
include 'Student.php';

$student = new Student();
$data = $student->insertStudent();

header("Location: app.php");