<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resell";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO account (email, name,mobile, pass)
VALUES ('John@gmail.com', 'John', '7687028083', 'password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>