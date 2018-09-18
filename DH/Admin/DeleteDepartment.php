<?php
	require 'connection.php';
	$dId=$_GET["id"];
	$delete="delete from tbl_department where DeptId='$dId'";
	$result=$con->query($delete);
	if($result==true)
	{
		header('location:DepartmentList.php');
	}
	else	
	{
		echo "Not Deleted";
	}
	
?>
