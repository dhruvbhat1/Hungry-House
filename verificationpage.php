<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Verfication</title>
	<link rel="stylesheet" type="text/css" href="\HTML PROJECT\styleverify.css">
</head>
<body>
	<div id="container">
		<img src="\HTML PROJECT\p22.png" alt="" class="imgstyle">

		<main id="main">
			<div id="loginuicontainer">
				<div id="login-tab" class="active">Login</div><div id="register-tab">Register</div>
				<div id="logincontainer">



					<form action="verificationpage.php" method="post" onsubmit="return validation1()">
						<?php include('errors.php'); ?>
					<div class="form-group">
						<label class="labels">Login ID:</label>
						<input type="text" class="form-control inputbox" name="username" id="login-username" placeholder="Username" autocomplete="off" required>
						<span id="emailaddresss" class="text-danger font-weight-bold"></span>

					</div>
					<div class="form-group">
						<label class="labels">Password:</label>
						<input type="password" class="form-control inputbox" name="password" id="login-password" placeholder="Password" autocomplete="off" required>
						<span id="passwordss" class="text-danger font-weight-bold"></span>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="Login">
					</div>


					<div class="textcenter signuptext ">Don't have an account? <a href="#" class="link registerlink">Sign up</a></div>
					<p class="textcenter forgetext"><a href="\HTML PROJECT\dbcont.php" class="link forgetlink"> Forgot password? or Update profile</a></p>

				</div>
			        </form>



				<div id="registercontainer" hidden>
					<form action="verificationpage.php" method="post" onsubmit="return validation()">
						<?php include('errors.php'); ?>
					<div class="form-group">
						<label class="labels">Firstname:</label>
						<input type="text" class="form-control inputbox" name="first" id="login-fname" placeholder="Firstname" autocomplete="off">
						<span id="firstname" class="text-danger font-weight-bold"></span>
					</div>

					<div class="form-group">
						<label class="labels">Lastname:</label>
						<input type="text" class="form-control inputbox" name="last" id="login-lname" placeholder="Lastname" autocomplete="off">
						<span id="lastname" class="text-danger font-weight-bold"></span>
					</div>

					<div class="form-group">
						<label class="labels">Email:</label>
						<input type="text" class="form-control inputbox" name="email" id="login-email" placeholder="Email ID" autocomplete="off">
						<span id="emailaddress" class="text-danger font-weight-bold"></span>
					</div>

					<div class="form-group">
						<label class="labels">Username</label>
						<input type="text" class="form-control inputbox" name="username" id="login-email" placeholder="Username" autocomplete="off">
						<span id="emailaddress" class="text-danger font-weight-bold"></span>
					</div>

					<div class="form-group">
						<label class="labels">Phone Number:</label>
						<input type="text" class="form-control inputbox" name="mobile" id="login-mobileno" placeholder="Phone number" autocomplete="off">
						<span id="mobilenos" class="text-danger font-weight-bold"></span>
					</div>

					<div class="form-group">
						<label class="labels">Password:</label>
						<input type="password" class="form-control inputbox" name="pass" id="register-password" placeholder="Password" autocomplete="off">
						<span id="passwords" class="text-danger font-weight-bold"></span>
					</div>

					<div class="form-group">
						<label class="labels">Confirm Password:</label>
						<input type="password" class="form-control inputbox" name="confirm" id="register-cnfmpassword" placeholder="Confirm Password" autocomplete="off" >
						<span id="confirmpasswords" class="text-danger font-weight-bold"></span>
					</div>

					<div class="form-group">

						<input type="submit" name="reg_user" class="btn btn-primary" value="Register">
					</div>

					<div class="textcenter signuptext ">Already have an account? <a href="#" class="link loginlink">Login</a></div>

				</div>
			</form>
			</div>
		</main>
	</div>
	<script type="text/javascript" src="\HTML PROJECT\main.js"></script>

</body>
</html>
