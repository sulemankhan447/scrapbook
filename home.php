<?php
	session_start();
	if($_SESSION)
	{
		?>
<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>SCRAP BOOK</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="section">
			<div class="logo">
				<a href="index.html">Scrap book</a>
			</div>
			<ul>
				<li class="selected">
					<a href="index.html">HOME</a>
				</li>
				<li>
					<a href="booksview.html">BOOKS</a>
				</li>
				<li>
					<a href="about.html">ABOUT</a>
				</li>
				<li>
					<a href="contact.html">CONTACT</a>
				</li>
			</ul>
		</div>
		<div class="article">
			<img src="img/headerbook.jpeg" alt="" height="250px">
			<h1>EXCHANGE YOUR SECOND HAND BOOKS</h1>
		</div>
	</div>
	<div id="body">
	
		<div>
			<div class="featured">
				<h2>User</h2>
				<h4>Welcome <?php echo $_SESSION['id'];?></h4>
				<br>
				<h4>Mobile:<?php echo $_SESSION['mobile'];?></h4>
				<br>
				<h4>Address:<?php echo $_SESSION['address'];?></h4>
				<!-- <p>
				LOGIN ID : <input type="id" name="id">
				</p>
				<p>
				Password :	<input type="id" name="pass">
				</p>
				<p>
					<input type="submit" value="LOGIN" name="LOGIN">
				</p> -->
			
				</div>
			<div class="section">
				<div class="article">
					<h2>SELL & BUY</h2>
					<h4>Click Here For :</h4> 
					<a href="sell.php"><h1> SELL</h1></a>
					<h4>Click Here For :</h4> 
					<a href="booksview.html"><h1> BUY</h1></a>

				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<div class="connect">
				<a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a>
				<a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a>
				<a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">googleplus</a>
				<a href="http://pinterest.com/fwtemplates/" id="pinterest">pinterest</a>
			</div>
			<p>
				SCRAP BOOK DISTRBUTION
			</p>
		</div>
	</div>
</body>
</html>

		<?php
	}
	else
	{
		header("Location:index.php");
	}
?>
