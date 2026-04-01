<?php
$conn = new mysqli("localhost", "root", "", "event_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO users (name, email, phone)
VALUES ('$name', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
   echo "Registration Successful!<br><br>";
echo "<a href='index.html'>Go Back</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>