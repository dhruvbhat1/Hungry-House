
<?php 
		if (isset($_POST['update'])) {
			$username = $_POST['emails'];
			$newusername = $_POST['newusername'];
			$password = $_POST['passs'];

			// echo $username.' ';
			// echo $newusername.' ';
			// echo $password;
			$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
			$selquery2 = "SELECT username FROM users WHERE username = '$username'";
			$result2 = mysqli_query($connection,$selquery2);
		
			if ($result2){
				 $updquery = "UPDATE users SET email = '$newusername' WHERE email = '$username'";
				$result3 = mysqli_query($connection,$updquery);
				echo "Your Email has been successfully updated";
				
			}
			else{
				echo "No Such User";
			}
		}


		//delete query make delete button first-submit2
	if (isset($_POST['delete'])) {
		$username = $_POST['emails'];
		$password = $_POST['passs'];

		$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
		$selquery = "SELECT username FROM users WHERE username = '$username'";
		$result1 = mysqli_query($connection,$selquery);
	
		if ($result1){
			$delquery = "DELETE FROM users WHERE email = '$username'";
			$result3 = mysqli_query($connection,$delquery);
		}
		else{
			echo "No Such Username Exits!";
		}
	


}






?>