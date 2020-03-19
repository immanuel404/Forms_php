<?php
	include_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP CONTACT</title>

<style>
body {
	text-align: center;
	color: darkblue;
	margin: 40px;
}
.container {
	background-color: #f2f2f2;
	border-radius: 10px;
	padding-top: 20px;
	padding-bottom: 20px;*/
	width: auto;
	margin-left: 20px;
 	margin-right: 20px;
}
input {
	border: 2px solid #ccc;
	height: 40px;
	border-radius: 5px;
	margin: 10px;
	width: 50%;
}
button {
	position: absolute;
	color: white;
	height:30px;
	border: 1px solid #ccc;
	border-radius: 4px;
	background-color: grey;
}
</style>

</head>
<body>
	<h1 style=>PHP<br>Contact Form</h1>
	<div class="container">
		<form action= "contact.php" method="POST">
		<label for = "name">Name:</label>
		<input type = "text" name ="name" required>

		<label for = "email"><br><br>Email:</label>
		<input type = "text" name ="email" required>

		<label for = "subject"><br><br>Subject:</label>
		<input type = "text" name ="subject" required>

		<label for = "message"><br><br>Message:</label>
		<input type = "text" name ="message" size="40" style="height:200px" required>

		<label for = ""><br></label>
		<button type='submit' name="submit"><b>Submit<b></button>
		</form>
	</div>
</body>
</html>