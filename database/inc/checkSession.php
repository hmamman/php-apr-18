<?php
if (!session_start()) {
    session_start();
}
$user = $_SESSION['user'];
$isLoggedIn = $_SESSION['isLoggedIn'];

if (!$user && !$isLoggedIn) {
    header('Location: login.php');
}