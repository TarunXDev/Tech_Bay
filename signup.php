<?php

include 'connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(isset($_POST['fullName']) && isset($_POST['emailAddress']) && isset($_POST['passWord'])) {
       
        $full_name = $_POST['fullName'];
        $email = $_POST['emailAddress'];
        $password = $_POST['passWord'];

       
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

       
        $sql = "INSERT INTO signup (full_name, email, password) VALUES (?, ?, ?)";

        
        $stmt = $conn->prepare($sql);

        
        if ($stmt === false) {
            die('Error preparing query: ' . $conn->error);
        }

       
        $stmt->bind_param("sss", $full_name, $email, $hashed_password); 

        if ($stmt->execute()) {
            echo "Signup successful! Data stored in the database.";
        } else {
            echo "Error executing query: " . $stmt->error;
        }

        
        $stmt->close();
    } else {
        echo "Please fill all the fields.";
    }
}


$conn->close();
?>