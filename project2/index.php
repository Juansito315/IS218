<!DOCTYPE html>
<html lang="en">
<head>
	<title>::Autoloader SPL::</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

	<div class="jumbotron text-center">
		<h1 class="text-primary">Autoloader implementation</h1>
		<i>using SPL (mobile responsive)</i>
	</div>

	<div class="container">
		<div class="row">
			<?php include 'core/driver/autoload.driver.php';?>
			<div class="center col-sm-6 col-xs-12 col-md-6">
				<form method="post" action="">
					<div class="page-header">
						<h1 class="text-primary">Simple interest example</h1>      
					</div>
					<div class="form-group">
						<label for="principal">Principal:</label>
						<input type="number" class="form-control" name="principal"  placeholder="Enter pricipal amount">
					</div>
					<div class="form-group">
						<label for="duration">Duration:</label>
						<input type="number" class="form-control" name="duration"  placeholder="Enter duration">
					</div>
					<div class="form-group">
						<label for="rate">Rate:</label>
						<input type="number" class="form-control" name="rate"  placeholder="Enter rate">
					</div>

					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			<div class="center col-sm-6 col-xs-12 col-md-6">
				<div class="page-header">
					<h1 class="text-success">Simple interest</h1>      
				</div>
				<?php
				if (isset($_POST['principal'])) {
					$si=new SimpleInterest($_POST['principal'],$_POST['duration'],$_POST['rate']);

					?>
					<div class="page-header">
						<h1><?php	echo $si->calculate_si();?></h1>      
					</div>
					<?php

				}

				?>
			</div>


		</div>

		<div class="row">
			<div class="center col-sm-6 col-xs-12 col-md-6">
				<form method="post" action="">
					<div class="page-header">
						<h1 class="text-primary">Simple password generator</h1>      
					</div>
					<div class="form-group">
						<label for="length">Password length:</label>
						<input type="number" class="form-control" name="length"  placeholder="Enter desired length">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			<div class="center col-sm-6 col-xs-12 col-md-6">
				<div class="page-header">
					<h1 class="text-success">Your password</h1>      
				</div>
				<?php
				if (isset($_POST['length'])) {
					$pass=new PasswordGenerator($_POST['length']);
					
					?>
					<div class="page-header">
						<h1><?php	echo $pass->generateRandomPass();?></h1>      
					</div>
					<?php

				}

				?>
			</div>


		</div>

		<div class="row">
			<div class="center col-sm-6 col-xs-12 col-md-6">
				<form method="post" action="">
					<div class="page-header">
						<h1 class="text-primary">Fibonacci sequence</h1>      
					</div>
					<div class="form-group">
						<label for="flength">Fibbo length:</label>
						<input type="number" class="form-control" name="flength"  placeholder="Enter desired length">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			<div class="center col-sm-6 col-xs-12 col-md-6">
				<div class="page-header">
					<h1 class="text-success">Your Fibonacci</h1>      
				</div>
				<?php
				if (isset($_POST['flength'])) {
					$fb=new Fibonacci($_POST['flength']);
					
					?>
					<div class="page-header">
						<h1><?php	echo $fb->getFib();?></h1>      
					</div>
					<?php

				}

				?>
			</div>


		</div>
	</div>

</body>
</html>
