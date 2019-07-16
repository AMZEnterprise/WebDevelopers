<?php
	include('config.php');
	$status = false;
	$db = @mysqli_connect("$host", "$user", "$pass" , "$dbname");
	if(!mysqli_connect_error())
	{
		$status = true;
	}
?>