<?php  
	require 'connection.php';
	$n1 = count($_POST["floor"]);
	
	$a=100;
	if($n1 > 0)  
	{  
		for($i=0; $i<$n1; $i++)  
		{  
			$nr = $_POST["noofroom"];
			$nb = $_POST["bedcap"];
			
			$rf="insert into tbl_roomfloorinfo(RTId,No_of_Floor,No_of_Room,BedCapacity) values('".mysqli_real_escape_string($con, $_POST["rtype"][$i])."','".mysqli_real_escape_string($con, $_POST["floor"][$i])."','".mysqli_real_escape_string($con, $_POST["noofroom"][$i])."','".mysqli_real_escape_string($con, $_POST["bedcap"][$i])."')";
			mysqli_query($con, $rf);
			
			$last= mysqli_insert_id($con);
			
			$fet="select * from tbl_roomfloorinfo trf, tbl_roomtype trt where trf.RTId=trt.RTId and trf.RFId='$last'";
			$res=$con->query($fet);
			if($res==true)
			{
				while($row=$res->fetch_assoc())
				{
					for($x=1;$x<=$nr[$i];$x++)
					{
						for($y=1;$y<=$nb[$i];$y++)
						{
							$val=$a+$y;
							$cd=$row["RTCode"]."-".$val."-".$_POST["floor"][$i];
							$rs="insert into tbl_roomstatus(RFId,RoomNo) values('$last','$cd')";
							mysqli_query($con, $rs);
						}
						$a=$a+100;
					}
					$a=100;
				}
			}
		} 
		header("Location:FloorRoomAllocation.php");
	}  
	else  
	{  
		echo "Please Enter Name";  
	}  
 ?> 