<?php
include 'db_connection.php';

$sql = "SELECT * FROM customer_info"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. ", Name: " . $row["name"]. ", Username: " . $row["username"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
