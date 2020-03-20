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
	background: url(phpform.png) no-repeat;
	background-size: cover;
	font-family: sans-serif;
	text-align: center;
	font-size: 25px;
}
.container {
	width: 70%;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	color: darkblue;
	margin: 30px;
}
input {
	font-size: 20px;
	background: none;
	border: 2px solid #ccc;
	height: 40px;
	border-radius: 5px;
	margin: 10px;
	width: 50%;
}
button {
	color: white;
	height:30px;
	border: 1px solid #ccc;
	border-radius: 4px;
	background-color: grey;
	margin-bottom: 30px;
}
button:hover {
  background-color: darkblue;
}
/*h1 {
	text-decoration: underline;
}*/
</style>

</head>
<body>
	<div class="container">
		<h1>Contact Form</h1>
		<form action= "contact.php" method="POST">
		<input type = "text" name ="name" placeholder="  Name" required>
		<input type = "text" name ="email" placeholder="  Email" required>
		<input type = "text" name ="subject" placeholder="  Subject" required>
		<input type = "text" name ="message" size="40" placeholder="  Write Your Message Here" style="height:200px" required>
		<label for =""><br></label>
		<button type='submit' name="submit" placeholder="Submit"><b>Submit<b></button>
		</form>
	</div>
</body>
</html>