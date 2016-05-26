$(document).ready(function(){
	//READY!
	console.log("ready!");
 		$("#task").focus();

 var task = "";

	$("#action").click( function() {
		console.log("Click Test : Success");

		task = $("#task").val();

		alert(task);

		task = cleanUp(task);

		alert(task);

		$("#todoForm").submit();
	});
});


