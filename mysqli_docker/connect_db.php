<?php
$db_host = "db";
$db_root_user = "root";
$db_root_password = "rootuser";

// Create connection

$conn = new mysqli($db_host,$db_root_user,$db_root_password);

// Check connection
if ($conn->connect_error) {
    echo ("Connection failed: " . $conn->connect_error);
}
else{
echo "Connected successfully using MySQLi Object Oriented";}
?>
