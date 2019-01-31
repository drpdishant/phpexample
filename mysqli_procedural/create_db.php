<?php
$servername = "localhost";
$username = "root";
$password = "";

//Create Connection

$conn = mysqli_connect($servername, $username, $password);

//Check Connection
if (!$conn) {
    echo ("Connection Failed: " . mysqli_connect_error());
}

//Create Database
$sql = "CREATE DATABASE db_proc";
if(mysqli_query($conn,$sql)){
    echo "Database Created Successfully using Procedural Method";
} else {
    echo "Error Creating Database: " . mysqli_error($conn);
}

msqli_close($conn);
?>