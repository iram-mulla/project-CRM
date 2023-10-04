<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    $sql = "INSERT INTO customer_info (id, name, username, password, contact, gender, address)
            VALUES ('$id', '$name', '$username', '$password', '$contact', '$gender', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("Location: login.html"); // Redirect to login page
    exit();
}

$conn->close();
?>
