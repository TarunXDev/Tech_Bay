<?php

session_start();


if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}


echo "Welcome, " . $_SESSION['fullName'] . "!<br>";
echo "Your email: " . $_SESSION['emailAddress'] . "<br>";
echo "<a href='logout.php'>Logout</a>";
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

