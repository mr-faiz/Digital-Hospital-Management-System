<?php
	require 'connection.php';
	$aId=$_GET["aid"];
	$delete="delete from tbl_appointment where AppointmentId='$aId'";
	$result=$con->query($delete);
	if($result==true)
	{
		header('location:AppointmentList.php');
	}
	else	
	{
		echo "Not Deleted";
	}
	
?>
