<?php session_start();include 'autoload.driver.php';?>
<?php  include 'process.helper.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>::login-signup::</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="main.js"></script>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<style type="text/css">
		.t-color{
			background-color: #4CAF50;
			color: #fff;
		}

	</style>

</head>
<body class="w3-light-grey w3-text-blue w3-margin w3-center" >

	<div class="w3-card w3-light-grey jumbotron text-center">
		<h1 class="w3-text-green">Login-sign up</h1>
		<i class="w3-text-red">A simple demonstration on login and sign up with database</i>
	</div>

	<div class="container">
		<div class="row">
			
			<div class="center col-sm-3 col-xs-12 col-md-3">
			</div>
			<div class="w3-light-grey w3-card-4 center col-sm-6 col-xs-12 col-md-6">
				<?php  
				if($status!=''){
					?><br>
					<div class="alert alert-danger">
						<strong>Warning!</strong> <?php echo $status;?>
						<script type="text/javascript">
							$(document).ready(function() {
								setTimeout(function(){ $('.alert').fadeOut() },3000);
							});
							
						</script>
					</div>
					<?php
				}?>
				<form id="signin-form" method="post" action="">
					<div class="page-header">
						<h1 class="w3-text-green">Login</h1>      
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="email" class="form-control" name="username"  placeholder="username@email.com">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password"  placeholder="NyK!@12#">
					</div>
					<div class="form-group">

						<button type="submit" name="sign-in" class="t-color w3-btn">Login</button>
						<a id="signup" class="t-color w3-btn">Signup</a>
						
					</div>
					
				</form>

				<form id="signup-form" hidden method="post" action="">
					<div class="page-header">
						<h1 class="w3-text-teal">SignUp</h1>      
					</div>
					<div class="form-group">
						<label for="fullname">Fullname</label>
						<input type="text" class="form-control" name="fullname"  placeholder="Firstname Lastname">
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="email" class="form-control" name="username"  placeholder="username@email.com">
					</div>
					<div class="form-group">
						<label for="location">Location</label>
						<input type="text" class="form-control" name="location"  placeholder="Your location">
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="number" class="form-control" name="phone"  placeholder="(954) 000 000 000">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="pass" name="password"  placeholder="NyK!@12#">
					</div>
					<p id="password_match"></p>
					<div class="form-group">
						<label for="cpassword">Confirm password</label>
						<input type="password" onkeyup="confirmPassword(this.value)" class="form-control" id="cpass" name="cpassword"  placeholder="NyK!@12#">
					</div>
					<div class="form-group">

						<button id="sign-go" name="sign-up" type="submit" class="t-color w3-btn">SignUp</button>
						<a id="login" class="t-color w3-btn">Login</a>
						
					</div>
					
				</form>
			</div>
			<div class="center col-sm-3 col-xs-12 col-md-3">
			</div>

		</div>

	</div>

</body>
</html>
