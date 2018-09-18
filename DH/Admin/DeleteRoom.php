 <?php
	require 'connection.php';
	$roomid=$_GET["rid"];
	$delete="delete from tbl_room where RoomId='$roomid'";
	$result=$con->query($delete);
	if($result==true)
	{
		header('location:ViewBedList.php');
	}
	else	
	{
		echo "Not Deleted";
	}
	
?>
