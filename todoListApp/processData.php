<?php 


include("obj/dbconn.php");

echo "hello";

$taskName = $_POST["task"];

echo $taskName;

$sql = "INSERT INTO todoTask(taskName) VALUES('".$task."')"

$rec = $conn->query( $sql );

header( "Location:index.php");

?> 