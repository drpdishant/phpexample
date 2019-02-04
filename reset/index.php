<?php
$servername = "db";
$username = "root";
$password = "rootuser";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "DROP DATABASE db_oo";

if ($conn->query($sql) === TRUE) {
    echo "Database Dropped SuccessFully - Data Reset";
} 
else {
    echo "Error Dropping Database: " . $conn->error;
}

$conn->close();
?>