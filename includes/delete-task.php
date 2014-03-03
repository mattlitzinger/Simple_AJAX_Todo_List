<?php 
	$task_id = strip_tags( $_POST['task_id'] );

	require("connect.php");

	mysql_query("DELETE FROM tasks WHERE id='$task_id'");
?>