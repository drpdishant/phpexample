<?php
$db_host = "localhost";
$db_root_user = "root";
$db_root_password = "";
//Create Connection
$conn = new mysqli($db_host,$db_root_user,$db_root_password);
//Check Connection

if(!$conn->connect_erorr)
{
    echo("Connection failed:" . $conn->connect_error);
}
$sql = "CREATE TABLE TaskList 
    (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    TaskName VARCHAR(30) NOT NULL,
    TaskDescription VARCHAR(300),
    date_time TIMESTAMP
    )";
if ($conn->query($sql) === TRUE)
{
    echo "Table TaskList Created SuccessFully"
}
else
{
    echo("Error Creating Table: ". $conn->error;)
}
?>