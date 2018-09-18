<?php 
	require 'connection.php';
	$sql="SELECT max(substr(UserId,2))as code from tbl_doctor";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($result);
	echo $row['code']+1;
?>