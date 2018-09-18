<?php 
	require 'connection.php';
	$cid=$_POST["country"];
	if(isset($cid))
	{
		$sql="select * from tbl_state where CountryId='".$cid."' order by StateName";
		$result=$con->query($sql);
		echo "<option value=''>Select State </option>";
		while($row=$result->fetch_assoc())
		{
?>
		<option value="<?php echo $row['StateId'];?>"><?php echo $row['StateName'];?></option>	
<?php
		}
	}
?>