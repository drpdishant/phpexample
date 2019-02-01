<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "DROP DATABASE db_oo";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully using Object Oriented Method";
} 
else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>