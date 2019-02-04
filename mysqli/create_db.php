<?php
$db_host = "127.0.0.1";
$db_root_user = "root";
$db_root_password = "rootuser";
$db_name = "db_oo";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE db_oo";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully using Object Oriented Method";
} 
else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>