
<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "tarunKumar"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to the database: $dbname";
}

$conn->close();
?>
