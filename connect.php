<?php
session_start();
$conn = mysqli_connect("localhost","root","","ci_test");
	
$message="";
if(!empty($_POST["login"])) {
	$result = mysqli_query($conn,"SELECT * FROM users WHERE uname='" . $_POST["name"] . "' and pswd = '". $_POST["password"]."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["user_id"] = $row['id'];
	} else {
	$message="Invalid Username or Password!";
	}
}
if(!empty($_POST["logout"])) {
	$_SESSION["user_id"] = "";
	session_destroy();
	header("Location:userlogin.php")	;
}

if(!empty($_SESSION["user_id"])) { 
header("Location: welcome.php")	;
}
else{	
header("Location:userlogin.php");	
}
?>