<?php

	$status = false;
	$db = @mysqli_connect('localhost', 'root', '' , 'WebDevelopers');
	if(!mysqli_connect_error())
	{
		$status = true;
	}
?>