<?php
if (!session_start()) {
    session_start();
}

$_SESSION['name'] = 'Hussaini Mamman';

echo $_SESSION['name'];
?>

<a href="form.php">Forms</a>
