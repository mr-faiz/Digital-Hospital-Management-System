<?php
	require 'connection.php';
	$sid=$_GET["sid"];
	$delete="delete from tbl_schedule where ScheduleId='$sid'";
	$result=$con->query($delete);
	if($result==true)
	{
		header('location:ScheduleList.php');
	}
	else	
	{
		echo "Not Deleted";
	}
	
?>
