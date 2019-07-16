<?php
	include('config.php');
	$status = false;
	$db = @mysqli_connect("$host", "$user", "$pass" , "$dbname");
	if(!mysqli_connect_error())
	{
		if(!file_exists('OK.f'))
		{
			mysqli_query($db, "CREATE TABLE `$dbname`.`Admin` ( `firstname` TEXT NOT NULL , `lastname` TEXT NOT NULL , `username` TEXT NOT NULL , `password` TEXT NOT NULL , `description` TEXT NOT NULL , `picture` TEXT NOT NULL , `email` TEXT NOT NULL )");
			mysqli_query($db, "INSERT INTO `admin` (`firstname`, `lastname`, `username`, `password`, `description`, `picture`, `email`) VALUES ('Mahdi', 'Moradi', 'Mahdi_Moradi', '1234', 'i am mahdi', 'mahdi.jpg', 'mahdi@mahdi.com') ");
			mysqli_query($db, "INSERT INTO `admin` (`firstname`, `lastname`, `username`, `password`, `description`, `picture`, `email`) VALUES ('Ahmad', 'Ahmadi', 'Ahmad_Ahmadi', '5678', 'i am ahmad', 'ahmad.jpg', 'ahmad@ahmad.com') ");
			$f = fopen('OK.f', 'w');
			fwrite($f,'DONT DELETE THIS FILE AT ALL!');
		}
		$status = true;
	}
?>