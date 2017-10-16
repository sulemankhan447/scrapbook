<?php
	if(isset($_POST))
	{
		require_once("connection.php");
		$id = $_POST['id'];
		$pass = $_POST['pass'];
		$sql = "select * from user where user_name='$id' and password='$pass'";
		$rows = mysqli_query($con,$sql);
		if(mysqli_num_rows($rows)>0)
		{
			session_start();
			$_SESSION['id'] = $id;
			$result = mysqli_fetch_array($rows);
			$_SESSION['mobile'] = $result['contact'];
			$_SESSION['address'] = $result['address'];
			echo "<script>alert('Welcome user');</script>";
			header("Refresh: 0; url=home.php");
		}
		else
		{
			echo "<script>alert('Invalid username or password');</script>";
		}
	}
	else
	{
		header("Location:index.php");
	}
?>