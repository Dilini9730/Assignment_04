<?php

require_once "dbconnect.php";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone_number"];
    $city = $_POST["city"];
    $subject = $_POST["subject"];

  
    $sql = "INSERT INTO contact_messages (name, email,phone,city,subject) VALUES ('$name', '$email', ' $phone','$city',$subject)";
        
    if ($conn->query($sql) === TRUE) {
        echo "Form submitted and data stored successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // else {
    //     $stmt= $conn->prepare("INSERT INTO contact(name, email, phone, city, subject)
    //      Values (?,?,?,?,?)");
    //      $stmt->bind_param("ssiss",$name, $email, $phone, $city, $subject);
    //      $stmt->execute();
    //     echo "Successfully Submitted";
    //     $stmt->close();
    //     $conn->close();
    // }

?>


