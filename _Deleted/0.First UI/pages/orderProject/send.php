<?php
$database = mysqli_connect('localhost', 'root', '', 'webdevelopers');
// mysqli_connect($database,"SET NAMES utf16");
if(!mysqli_connect_error()){
if($_POST['firstName'] != "" and $_POST['lastName'] != "" and $_POST['email'] != "" and $_POST['phoneNumber'] != "" and $_POST['description'] != "" and $_POST['ProjectType'] != "")
{
	
	$first = $_POST['firstName'];
	$last = $_POST['lastName'];
	$email = $_POST['email'];
	$phone = $_POST["phoneNumber"];
	$text = $_POST['description'];
	$type = $_POST['ProjectType'];
	$query = "insert into info (firstName, lastName, email, phoneNumber, description, ProjectType) values ('". $first ."' , '". $last ."', '". $email ."', '". $phone . "', '" . $text . "', '". $type ."')";
	mysqli_query($database, $query);
	echo "OK!";
}
	else{
		echo "Error!";
	}
	mysqli_close($database);

}

?>