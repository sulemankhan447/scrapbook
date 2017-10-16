<?php
	if($_POST)
	{
		session_start();
		require_once("connection.php");
		define('UPLOAD_PATH','books/');
		$bookTitle = $_POST['bookTitle'];
		$bookAuthor = $_POST['bookAuthor'];
	//	$condition = $_POST['condition'];
		$price = $_POST['price'];
		$fileName = $_FILES['bookToUpload']['name'];
		$seller_mobile = $_SESSION['mobile'];
		$target = UPLOAD_PATH.$fileName;
		$sql = "insert into books(book_title,author_name,price,book_path,seller_mobile) 
		values('$bookTitle','$bookAuthor','$price','$fileName','$seller_mobile')";
		mysqli_query($con,$sql);
		if(move_uploaded_file($_FILES['bookToUpload']['tmp_name'],$target))
		{
			echo "Uploaded";
		}
		else
		{
			echo mysqli_error($con);
			echo $_FILES['bookToUpload']['error'];
		}
	}
	else
	{
		header("Location:sell.php");
	}

?>