<?php
include 'mysqli_object_orinted/connect_db.php';

echo "<br><br>";

include 'mysqli_procedural/connect_db.php';
echo "<br><br>";

include 'pdo/connect_db.php';

echo "<br><br>";

//Database Creation Using Object Oriented Method
include 'mysqli_object_oriented/create_db.php';

echo "<br><br>";

//Database Creation Using  Procedural Method

include 'mysqli_procedural/connect_db.php';
echo "<br><br>";

//Database Creation Using  PDO Method

include 'pdo/connect_db.php';

echo "<br><br>";

?>