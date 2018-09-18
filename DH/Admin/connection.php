<?php 
	session_start();
	$con=new mysqli("localhost","root","","db_hospital");
	if(!isset($_SESSION['uname']))
	{
		header('location:../login.php');
	}
?>