<!DOCTYPE html>
<html lang="en">
<head>
	<title>::PHP JSON CURL</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

	<div class="jumbotron text-center">
		<h1 class="text-primary">php csv to json - search parameter - curl json response to csv</h1>
		
	</div>

	<div class="container">
		<div class="row">
			<div class="center col-sm-4 col-xs-12 col-md-4">
				<form method="GET" action="">
					<div class="col-sm-8 col-xs-12 col-md-8">
						<div class="input-group">
							<span class="input-group-addon">M</span>
							<input  type="text" class="form-control" name="make" placeholder="Enter car make to search">
						</div>
					</div>
					<div class="col-sm-4 col-xs-12 col-md-4">
						<div class="input-group">
							
							<input href="" type="submit" class="btn btn-primary active" value="Submit">
							
						</div>
					</div>
					
				</form>
			</div>
			<div class="center col-sm-4 col-xs-12 col-md-4">
				<a href="?csv_to_json=1" class="btn btn-info" role="button">CSV-JSON</a>
			</div>
			<div class="center col-sm-4 col-xs-12 col-md-4">
			<div class="center col-sm-6 col-xs-12 col-md-6">
				<a href="?curl=1" class="btn btn-primary" role="button">CURL</a>
			</div>
			<div class="center col-sm-6 col-xs-12 col-md-6">
				<a href="curltocsv.csv" class="btn btn-danger" role="button">CSV FILE</a>
			</div>
				
			</div>

			<div class="col-sm-12 col-xs-12 col-md-12"><br><br></div>
			<div class="col-sm-12 col-xs-12 col-md-12">
			<?php
			include 'controller/controller.class.php';
			if (isset($_GET['curl'])) {
				include 'controller/curl.class.php';
			}elseif (isset($_GET['make'])) {
				?>
				<table class="table">
					<thead>
						<tr>
							<th>Make</th>
							<th>Model</th>
							<th>Year</th>
						</tr>
					</thead>
					<tbody>
						<?php  search();?>
					</tbody>
				</table><?php
			}elseif (isset($_GET['csv_to_json'])) {
				?>
				
				<?php  csv_to_json();?>
				<?php
			}

			?>
				
			</div>


		</div>
	</div>

</body>
</html>
