<?php
	require_once("connection.php");
	$username =$_POST['username'];	
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$sql = "insert into user(user_name,password,contact,address) values('$username','$password','$contact','$address')";
	if(mysqli_query($con,$sql)){
		header("Location:home.php");		
	}
	else
	{
		echo mysqli_error($con);
	}
?>