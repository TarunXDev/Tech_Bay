<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header("Location: index.php"); 
    exit;
}
?>

<h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
<p>You are successfully logged in!</p>
<a href="logout.php">Logout</a>
