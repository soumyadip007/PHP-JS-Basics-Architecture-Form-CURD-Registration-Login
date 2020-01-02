<?php
session_start();
$servername = "remotemysql.com";
$server_user = "VHXyDfVav2";
$server_pass = "OpSezSA1FR";
$dbname = "VHXyDfVav2";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>