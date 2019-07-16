<?php
session_start();
include("db.php");
if($_POST['username'] == '' or $_POST['password'] == '')
{
	header("location:../login.html?s=e");
}
else
{
if($status == false)
{
	echo "<span style = 'color :red; font-size: 35px;' >ERROR :( </br > You must first Config db.cgf file,<br /> or may be you enter invalid information at that file! check it! :)</span>";
}

	$data = mysqli_query($db, 'Select * From Admin');
	$username = '';
	$flag = false;
	while($row = mysqli_fetch_assoc($data))
	{
		if($row['username'] == $_POST['username'] and $row['password'] == $_POST['password'])
		{
			$username = $row['username'];
			$flag = true;
			break;
		}
	}
	
	if($flag)
	{
		$_SESSION['username'] = $username;
		header('location:../index.php?');
	}
	else
	{
		header('location:../login.html?s=i');
	}
}
