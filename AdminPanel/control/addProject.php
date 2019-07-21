<?php
	include('db.php');
	$query = "INSERT INTO `project` (`firstname`, `lastname`, `status`, `phonenumber`, `email`, `description`, `userfile`, `date`, `cost`) VALUES ('".$_POST['add_firstName'] ."', '". $_POST['add_LastName'] ."', '". " " ."', '". $_POST['add_phoneNumber'] ."', '". $_POST['add_email'] ."', '". " " ."', '" . " " . "', '" . " " ."', '". " " ."')" ;
	mysqli_query($db , $query);
	header('location:../projects.php?s=a');
?>