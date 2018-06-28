<?php
if (!session_start()) {
    session_start();
}

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}

if (isset($_SESSION['isLoggedIn'])) {
    unset($_SESSION['isLoggedIn']);
}

session_destroy();

header('Location: login.php');