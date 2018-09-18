<?php 
	function gen_random_string($length=6)
	{
		$chars ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$final_rand ='';
		for($i=0;$i<$length; $i++)
		{
			$final_rand .= $chars[ rand(0,strlen($chars)-1)];
		}
		return $final_rand;
	}
	echo gen_random_string()."\n"; //generates a string 
	?>" readonly disabled>