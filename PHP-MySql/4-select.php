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

$sql = "SELECT  email, name,mobile, pass FROM account";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
     echo " - Email - Name - Mobile - Password<br>";
    while($row = $result->fetch_assoc()) {
        echo  $row["email"]. " " . $row["name"]." " . $row["mobile"]." " . $row["pass"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>