<?php
include 'library/auth.php';

if(isset($_COOKIE['username']) and isset($_COOKIE['token'])){
	$username = $_COOKIE['username'];
	$token = $_COOKIE['token'];

	if(verify_session($username, $token)){
		header("Location: home.php");
	}
}

$flag = 0;
if(isset($_POST['password']) and isset($_POST['cpassword'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$emailid = $_POST['emailid'];

	if($password == $cpassword){
		$sresult = do_signup($username, $password,$emailid);
		if($sresult){
			header("Location: index.php?signup=success");
		} else {
			$flag = -2;
		}
	} else {
		$flag = -1; //password and confirm password do not match
	}
}


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Signup | MSEC</title>

	<!-- Bootstrap core CSS -->
	<link href="bootstrap.min.css" rel="stylesheet">


	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	<!-- Custom styles for this template -->
	<link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">
	<main class="form-signin">
	<form class="form-signin" action="signup.php" method="POST">
		<?php
		if($flag == -1){
			?>
			<div class="alert alert-danger" role="alert">
				Password and confirm password do not match
			</div>
			<?php
		} else if($flag == -2) {
			?>
			<div class="alert alert-danger" role="alert">
				Cannot signup, username already taken.
			</div>
			<?php
		}
		?>
		<h1 class="h3 mb-3 font-weight-normal">Welcome, Signup</h1>
		<div class="form-floating">
		
		<input name="username" type="text" id="floatingInput" class="form-control" placeholder="Username" required>
		<label for="floatingInput" class="sr-only">Username</label>
		</div>
		<div class="form-floating">
		
		<input name="emailid" type="text" id="floatingInput1" class="form-control" placeholder="abcd@xyz.com" required >
		<label for="floatingInput1" class="sr-only">Email ID</label>
		</div>
		<div class="form-floating">
		
		<input name="password" type="password" id="floatingPassword" class="form-control" placeholder="Password" required>
		<label for="floatingPassword" class="sr-only">Password</label>
		</div>
		<div class="form-floating">
			
			<input name="cpassword" type="password" id="floatingPassword1" class="form-control" placeholder="Confirm Password" required>
			<label for="floatingPassword1" class="sr-only">Confirm Password</label>
		</div>
		<input type="hidden" id="form_id" name="form_id" value="signup_form">
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
		<br>
		<a target="_self"  href="index.php">Already have an account? Signin!</a>
	</form>
</main>
</body>
</html>
