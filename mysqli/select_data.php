<?php
$db_host = "127.0.0.1";
$db_root_user = "root";
$db_root_password = "";
$db_name = "db_oo";

$conn = new mysqli($db_host, $db_root_user, $db_root_password, $db_name);

if($conn->connect_error)
{
    echo("Connection Failed: " . $conn->connect_error);
}
$sql = "select TaskName, TaskDescription, date_time FROM TaskList";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "Task Name   | Task Description                          | Time Stamp <br>";
    while ($row = $result->fetch_assoc())
    {
        echo $row["TaskName"]." | ".$row["TaskDescription"] . "  |  " . $row["date_time"]. "<br>"; 
    }
}
else
{
    echo("0 Results");
}
$conn->close();
?>