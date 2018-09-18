<?php
	require 'connection.php';
	$docId=$_GET["did"];
	$delete="delete from tbl_doctor where DoctorId='$docId'";
	$result=$con->query($delete);
	if($result==true)
	{
		header('location:DoctorList.php');
	}
	else	
	{
		echo "Not Deleted";
	}
	
?>
