<!DOCTYPE html>
<html lang="en">
<head>
	<title>::PHP POST GET CURL::</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

	<div class="jumbotron text-center">
		<h1 class="text-primary">CURL GET & POST REQUESTS</h1>
		<i>check urls for differences</i>
	</div>

	<div class="container">
		<div class="row">
			<?php include 'controller/curl.handler.php';?>
			<div class="center col-sm-6 col-xs-12 col-md-6">
				<form method="post" action="controller/curl_handler">
					<div class="page-header">
						<h1>Post requests</h1>      
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
					</div>

					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			<div class="center col-sm-6 col-xs-12 col-md-6">
				<form method="get" action="controller/curl_handler">
					<div class="page-header">
						<h1>Get requests</h1>      
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
					</div>

					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>


		</div>
	</div>

</body>
</html>
