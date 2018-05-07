<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Grading Form</title>
</head>
<body>
<?php
include 'functions/functions.php';

if (count($_POST)) {
    $score = $_POST['score'];

    printf('The grade of a score %d is %s', $score, grader($score));

}

?>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <div>
        <label for="">Enter the Score</label>
        <input type="number" name="score" id="">
    </div>
    <div>
        <button type="submit">Get Grade</button>
    </div>
</form>
</body>
</html>