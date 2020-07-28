<?php 
if (isset($_POST['submit'])) {
	$username = $_POST['emails'];
	$password = $_POST['passs'];


	$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
	$query = "INSERT INTO users(username,password) VALUES ('$username', '$password')";

	$result = mysqli_query($connection,$query);
}

?>