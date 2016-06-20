<?php 


include("obj/dbconn.php");

$sql = "SELECT * FROM todotasks";

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

			<button id="action" type="button" class="btn btn-success">ADD TASK</button>

		</form>
</div>

<div class="col-md-1"> </div>

</div>

<div class="row">
 <div class="col-md-10">

 <div class="nav nav-pills">
 <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#todayTasks" aria-controls="home" role="tab" data-toggle="tab">Today</a></li>
    <li role="presentation"><a href="#weeklyTasks" aria-controls="profile" role="tab" data-toggle="tab">This Week</a></li>
    <li role="presentation"><a href="#completedTasks" aria-controls="messages" role="tab" data-toggle="tab">Done</a></li>
    <li role="presentation"><a href="#allTasks" aria-controls="settings" role="tab" data-toggle="tab">All Tasks</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">...</div>
    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>

</div>

</ul>

 </div>

 </div>



 <?php
for($i = 0; $i < $num; $i++){
	$row = mysqli_fetch_array($rec);
	echo "<li id='".$row['taskID']."'>";
	echo "<table class='tasksTable'><tr>";
	echo "<td>";
	echo $row['taskName'];
	echo "</td>";
	echo "<td class='taskActions'>";
	echo "<span class='fa fa-check'></span>";
	echo "<span class='fa fa-trash'></span>";
	echo "</td>";
	echo "</tr></table>";
	echo "</li>";

	
   }
?>




<script src="js/jquery.min.js"></script>
<script src="js/validator.js"></script>
<script src="js/custom.js"></script>
</body>
</html>