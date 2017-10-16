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
					<a href="booksview.php">BOOKS</a>
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
			<img src="img/headerbook2.jpeg" alt="" height="250px">
			<h1>UPLOAD YOUR OLD BOOKS</h1>
		</div>
	</div>
	<div id="body">
	
		<div>
			<div class="featured">
				<h2>Upload your Books</h2>
							
			<!-- 	
			<form action="#" method="post" enctype="multipart/form-data">
 				Book Name : <input type="text" name="book"><br>
 				Book Title : <input type="text" name="title"><br>
 				Book condition : 
 					Average <input type="radio" name="condition" value="average" checked><br> 
 					Good <input type="radio" name="condition" value="good"><br>
 					Better <input type="radio" name="condition" value="better"><br>

 				 

 					<input type="hidden" name="MAX_FILE_SIZE" value="34688">
				upload your book: <input type="file" name="bookToUpload">
			</form>
				
 -->
				<!-- 	<a href="index2.html"><input type="submit" value="LOGIN" name="LOGIN"></a>
				 -->
					<div class="container">
					<div class="center">
						<form action="sellProcess.php" method="post" enctype="multipart/form-data">
							<label for="bookTitle">Book Title 
								<input type="text" name="bookTitle" id="bookTitle">
							</label>
							<br>
							<br>

							<label for="bookAuthor">Author Book
								<input type="text" name="bookAuthor" id="bookAuthor">
							</label>
							<br>
							<br>
	<!-- 						<label for="bookCondition">Condition of Book</label>
 -->							<!-- <select name="condition">
								<option value="good" name="">Good</option>
								<option value="average">Average</option>
								<option value="bad">Bad</option>
							</select> -->
<!-- 							<input type="text" name="condition" id="condition" placeholder="Enter Condition of Book"/> -->
							<br>
							<br>
							<label>Price for your Book
								<input type="text" name="price">
							</label>
							<br>
							<br>
		 					<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
							<input type="file" name="bookToUpload" id="bookToUpload">
							<br>
							<br>
							<input type="submit" name="submit" value="upload">
						</form>
					</div>
					</div>
				</div>
			<div class="section">
				<div class="article">
					<h2>Status</h2>
					 <p>
					 	<h1>
					 		<?php 
					 			if(isset($_GET['success']))
					 			{
					 				echo "Book Uploaded Successfuly";
					 			}
					 		?>
					 	</h1>
					 </p>
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