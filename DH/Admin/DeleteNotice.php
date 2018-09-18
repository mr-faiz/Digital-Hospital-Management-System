 <?php
	require 'connection.php';
	$nid=$_GET["nid"];
	$delete="delete from tbl_notice where NoticeId='$nid'";
	$result=$con->query($delete);
	if($result==true)
	{
		header('location:NoticeList.php');
	}
	else	
	{
		echo "Not Deleted";
	}
	
?>
