<!-- // INSERTING DATA FROM FORM INTO DATABASE -->
<?php
	include_once 'connect.php';

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$subject = mysqli_real_escape_string($conn, $_POST['subject']);
	$message = mysqli_real_escape_string($conn, $_POST['message']);


 	$sql = "INSERT INTO contactform (name, email, subject, message) VALUES ('$name', '$email', '$subject', 'message');";
	mysqli_query($conn, $sql);

	header("Location: index.php?signup=success");

?>