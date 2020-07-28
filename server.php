<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'loginapp');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
	$fname = mysqli_real_escape_string($db, $_POST['first']);
	$lname = mysqli_real_escape_string($db, $_POST['last']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$mobile = mysqli_real_escape_string($db, $_POST['mobile']);
	$password_1 = mysqli_real_escape_string($db, $_POST['pass']);
	$password_2 = mysqli_real_escape_string($db, $_POST['confirm']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
	if (empty($fname)) { array_push($errors, "First Name is required"); }
	if (empty($lname)) { array_push($errors, "Last name is required"); }
	if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($mobile)) { array_push($errors, "Mobile Number is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (fname,lname,email,username,pnumber,password)
  			  VALUES('$fname', '$lname', '$email', '$username', '$mobile', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: start.php');
  }
}
// ...

// LOGIN USER

if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: start.php');
  	}else {

  		array_push($errors, "Wrong username/password combination");
  	 }
  }
}

?>
