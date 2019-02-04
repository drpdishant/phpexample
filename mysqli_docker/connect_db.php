<?php
$servername = "db";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    echo ("Connection failed: " . $conn->connect_error);
}
else{
echo "Connected successfully using MySQLi Object Oriented";}
?>
