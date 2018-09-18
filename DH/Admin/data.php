<?php  
	require 'connection.php';
	$n1 = count($_POST["days"]); 
	if($n1 > 0)  
	{  
		for($i=0; $i<$n1; $i++)  
		{  
			if((trim($_POST["doctor_id"] != '')) || (trim($_POST["days"][$i] != '')) || (trim($_POST["start_time"][$i] != '')) || (trim($_POST["end_time"][$i] != '')) ) 
			{  
				$sql = "INSERT INTO tbl_schedule(DoctorId,AvailableDay,StartTime,EndTime) VALUES('".mysqli_real_escape_string($con, $_POST["doctor_id"])."','".mysqli_real_escape_string($con, $_POST["days"][$i])."','".mysqli_real_escape_string($con, $_POST["start_time"][$i])."','".mysqli_real_escape_string($con, $_POST["end_time"][$i])."')";
				mysqli_query($con, $sql);  	
			}  
		} 
		echo "Data Inserted";  
	}  
	else  
	{  
		echo "Please Enter Name";  
	}  
 ?> 