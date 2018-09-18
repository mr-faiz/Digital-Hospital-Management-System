<?php  
	require 'connection.php';
	$n1 = count($_POST["role"]); 
	if($n1 > 0)  
	{  
		for($i=0; $i<$n1; $i++)  
		{  
			if((trim($_POST["title"] != '')) || (trim($_POST["description"] != '')) || (trim($_POST["role"][$i] != '')) || (trim($_POST["noticedate"] != '')) || (trim($_POST["startdate"] != '')) || (trim($_POST["enddate"] != '')) ) 
			{  
				$sql = "INSERT INTO tbl_notice(Title,Description,RoleId,NoticeDate,StartDate,EndDate) VALUES('".mysqli_real_escape_string($con, $_POST["title"])."','".mysqli_real_escape_string($con, $_POST["description"])."','".mysqli_real_escape_string($con, $_POST["role"][$i])."','".mysqli_real_escape_string($con, $_POST["noticedate"])."','".mysqli_real_escape_string($con, $_POST["startdate"])."','".mysqli_real_escape_string($con, $_POST["enddate"])."')";
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