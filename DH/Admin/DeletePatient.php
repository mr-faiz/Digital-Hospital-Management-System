<?php
	require 'connection.php';
	$pId=$_GET["pid"];
	$delete="delete from tbl_patient where PatientId='$pId'";
	$result=$con->query($delete);
	if($result==true)
	{
		header('location:PatientList.php');
	}
	else	
	{
		echo "Not Deleted";
	}
	
?>
