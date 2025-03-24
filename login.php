<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stored_password = $row['password'];

        if ($password === $stored_password) {
            header("Location: berjaya.html");
            exit();
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with that email!";
    }

    $stmt->close();
    $conn->close();
} else {

    echo "Invalid request method.";
}
