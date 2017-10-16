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
		<div class="container">
			<div class="row">
			<?php
				require_once("connection.php");
				$sql = "select * from books";
				$results = mysqli_query($con,$sql);
				while($row = mysqli_fetch_array($results))
				{
					echo "<div class='col-md-3'>";
					echo "<br>";
					echo '<img src="books/'.$row['book_path'].'" height="169px" width="210px"></img>';
					echo '<a href=""></a>';
					echo "</div>";
					echo "<br>";

				}	
			?>
			</div><!-- row end-->
		</div><!-- container end-->
<!-- 	<div id="body">
		<h3><b>AVAILABLE BOOK</b></h3>
		<ul>
			<li>
				<a href=""><img src="img/book1.jpeg" alt=""  height="169px" width="210px" ></a>
			</li>
			<li>
				<a href="#"><img src="#" alt=""  height="169px" width="210px" ></a>
			</li>
			<li>
				<a href="#"><img src="#" alt=""  height="169px" width="210px" ></a>
			</li>
			<li>
				<a href="#"><img src="#" alt=""  height="169px" width="210px" ></a>
			</li>
			<li>
				<a href="#"><img src="#" alt=""  height="169px" width="210px" ></a>
			</li>
			<li>
				<a href="#"><img src="#" alt=""  height="169px" width="210px" ></a>
			</li>
			<li>
				<a href="#"><img src="#" alt=""  height="169px" width="210px" ></a>
			</li>
			<li>
				<a href="#"><img src="#" alt=""  height="169px" width="210px" ></a>
			</li>
			<li>
				<a href="#"><img src="#" alt=""  height="169px" width="210px" ></a>
			</li>
			<li>
				<a href="#"><img src="#" alt=""  height="169px" width="210px" ></a>
			</li>
			<li>
				<a href="#"><img src="#" alt=""  height="169px" width="210px" ></a>
			</li>
			<li>
				<a href="#"><img src="#" alt=""  height="169px" width="210px" ></a>
			</li>
			
		</ul>
		<a href="#" class="more">show more</a>
	</div>
 -->	
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