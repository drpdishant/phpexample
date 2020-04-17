<?php
$db_host = "MYSQL_HOSTNAME";
$db_root_user = "MYSQL_ROOT_USER";
$db_root_password = "MYSQL_ROOT_PASSWORD";
$db_name = "MYSQL_DATABASE";

// Create connection

$conn = new mysqli($db_host,$db_root_user,$db_root_password);

// Check connection
if ($conn->connect_error) {
    echo ("Connection failed: " . $conn->connect_error);
}
else{
echo "Connected successfully using MySQLi Object Oriented";}
?>
