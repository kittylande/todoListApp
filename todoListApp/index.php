<?php 


include("obj/dbconn.php");

$sql = "SELECT * FROM todotask";

$rec = $conn->query( $sql);
$num = $rec->num_rows;

echo $num;

?>


<!DOCTYPE html>
<html>
<head>
	<title>	TO DO LIST </title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/custum.css">
</head>
<body>

<div  class="container">

<div class="row">
	
<div class="col-md-1"> </div>

<div class="col-md-10">

		<form id="todoForm" action="processData.php" method="post">

			<input name="task" id="task" type="text" class="form-control" placeholder="Text input">

			<button id="action" type="button" class="btn btn-success">Success</button>

		</form>
</div>

<div class="col-md-1"> </div>

</div>

<div class="row">
 <div class="col-md-12">

 </div>


<script src="js/jquery.min.js"></script>
<script src="js/validator.js"></script>
<script src="js/custom.js"></script>
</body>
</html>