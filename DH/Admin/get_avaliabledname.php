<?php
	require 'connection.php';
	if(isset($_POST['dname']))
	{
		$dname=$_POST['dname'];
		$sql="select * from tbl_department where DeptName='".$dname."'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_num_rows($result);
		echo $row;
	}
?>