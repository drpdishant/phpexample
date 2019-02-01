<?php
$servername = "localhost";
$username = "root";
$password = "";

//Create Connection

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    $sql = "CREATE DATABASE db_pdo";
    $conn->exec($sql);
    echo("Database Created Successfully using PDO Method");
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>