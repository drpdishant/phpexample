<?php
$db_host = "127.0.0.1";
$db_root_user = "root";
$db_root_password = "rootuser";
$db_name = "db_oo";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    echo ("Connection failed: " . $conn->connect_error);
}
else{
echo "Connected successfully using MySQLi Object Oriented";}
?>
