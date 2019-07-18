<?php
session_start();
include('db.php');
if(isset($_POST['deletePhoto']))
{
	mysqli_query($db , "UPDATE `admin` SET `picture` = 'userAvatar.png' where `username` = '". $_SESSION['username'] ."' ");
	echo $_POST['deletePhoto'] . ", Please Reload page for see the Change!!:)";
}
else if(isset($_POST['changePhoto']))
{
	
	if($_FILES['url']['name'] != '')
	{
		$path = '../assets/images/' . $_FILES['url']['name'];
		move_uploaded_file($_FILES['url']['tmp_name'], $path );
		mysqli_query($db , "UPDATE `admin` SET `picture` = '".  $_FILES['url']['name']  ."' where `username` = '". $_SESSION['username'] ."' " );
		header('location:../profile.php?s=s');
	}
	else
	{
		header('location:../profile.php?s=z');
	}
	
}

?>