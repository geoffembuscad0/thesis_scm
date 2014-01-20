<html>
<head>
	<script src="./assets/js/jquery1102.js"></script>
</head>
<body>

<p>Employee ID:
<input type="text" name="emp_id" placeholder="Employee ID"/></p>
<button class="timein">Time In</button>
<button class="timeout">Time Out</button>

<script>
$(document).ready(function(){
	$(".timein").on('click', function(){
		var emp_id = $("input[name='emp_id']").val();
		$.ajax({
			url: '<?php echo URL::site('employeetime/update_timesheet',null,false);?>',
			data: { 'timein':1 , 'emp_id':emp_id },
			type: 'POST',
			success: function(responseTimein){
				alert(responseTimein);
			}
		});
	});
	
	$(".timeout").on('click', function(){
		var emp_id = $("input[name='emp_id']").val();
		$.ajax({
			url: 'alcore.php',
			data: { 'time_out':1, 'emp_id':emp_id },
			type: 'POST',
			success: function(reponseTimeout){
				alert(responseTimeout);
			}
		});
	});
});
</script>
</body>
</html>