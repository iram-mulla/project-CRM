<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    $sql = "INSERT INTO users (name, username, password, contact, gender, address)
    VALUES ('$name', '$username', '$password', '$contact', '$gender', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "User created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("location:login.php"); // Redirect to login page
    exit();
}

$conn->close();
?>
