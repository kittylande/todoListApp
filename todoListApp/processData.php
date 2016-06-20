<?php 


include("obj/dbconn.php");

echo "hello";

$taskName = $_POST["task"];

echo $taskName;

$sql = "INSERT INTO todoTasks(taskName) VALUES('".$taskName."')";

$rec = $conn->query( $sql );
 echo $sql;
 echo $rec;

header( "Location:index.php");

?> 