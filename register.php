<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";


    if ($conn->query($sql) === TRUE) {

        header("Location: login.html");
        exit();
    } else {

        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
} else {

    echo "Invalid request method.";
}
