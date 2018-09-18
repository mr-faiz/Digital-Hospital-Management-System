<?php 
	require 'connection.php';
	$sid=$_POST['state'];
	
	if(isset($sid))
	{
		$sql="select * from tbl_city where StateId='".$sid."' order by CityName";
		$result=$con->query($sql);
		echo "<option value=''>Select City </option>";
		while($row=$result->fetch_assoc())
		{
?>
		<option value="<?php echo $row['CityId'];?>"><?php echo $row['CityName'];?></option>
<?php
		}
	}
?>