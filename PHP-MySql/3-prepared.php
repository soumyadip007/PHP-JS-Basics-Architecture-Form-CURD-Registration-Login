<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resell";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO account (email, name, mobile, pass)  VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $email, $name, $mobile, $pass);

// set parameters and execute
$email = "john1@example.com";
$name = "John Dao";
$mobile = "768702803";
$pass = "pass";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>