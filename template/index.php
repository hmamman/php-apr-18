<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Template Inclusion</title>
</head>
<body>
<?php
include ('nav-bar.php');
?>

<div>
    this is content
    <?php
    msg();

    ?>
</div>

<?php include 'footer.php'; ?>
</body>
</html>