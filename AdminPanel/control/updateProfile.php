<?php
session_start();
if($_POST['firstname'] == '' 
	or $_POST['lastname'] == ''
	or $_POST['username'] == '' 
	or $_POST['password'] == '' 
	or $_POST['passwordConfirm'] == ''
	or $_POST['email'] == '' 
	)
{
	header('location:../profile.php?s=e');
}
else if($_POST['password'] != $_POST['passwordConfirm'])
{
	header('location:../profile.php?s=c');
}
else
{
	include('db.php');
	$query = "UPDATE `admin` SET `firstname`='".$_POST['firstname']."',`lastname`='".$_POST['lastname']."',`username`='".$_POST['username']."',`password`='".md5($_POST['password'])."',`email`='".$_POST['email']."' WHERE username ='".$_SESSION['username']."'";
	mysqli_query($db,$query);
	header('location:../profile.php?s=s');
	
}

?>