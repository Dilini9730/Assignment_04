<?php
require_once "dbconnect.php"; 

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {
            echo "Login successful!";
            header("Location: index.php"); 
            exit();
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }

    // $conn = new mysqli('localhost','root','','traveldb');
    
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // else {
    //     $stmt= $conn->prepare("INSERT INTO login(username, password)
    //      Values (?,?");
    //      $stmt->bind_param("ss",$username, $password);
    //      $stmt->execute();
    //     echo "Login Successfully";
    //     $stmt->close();
    //     $conn->close();
    // }

?>
