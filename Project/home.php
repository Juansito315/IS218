<?php include 'autoload.driver.php';?>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body class="w3-light-grey w3-text-blue w3-margin w3-center">

<style type="text/css">
		.t-color{
			background-color: #4CAF50;
			color: #fff;
		}

	</style>

	<div style="margin-top:10%" class=" container">
		<div class="row">

			<div class="center col-sm-2 col-xs-12 col-md-2">
			</div>
			<div class="w3-card-2 center col-sm-8 col-xs-12 col-md-8">
				<div id="profile_forms">
					<div id="onee" style="opacity:0.8"  class=" w3-light-grey w3-text-blue w3-margin w3-center  text-center">
						<?php @session_start();?>
						<div class="row">
							<div class="col-md-4 col-xs-12"><a id="edit" class="btn w3-text-teal">Edit</a><a id="all_users" class="pull-left btn w3-text-teal">All Users</a></div>
							<div class="col-md-4 col-xs-12">
								<h6 class="w3-text-blue">Mini Bio Card</h6>
							</div>
							<div class="col-md-4 col-xs-12">
								<a href="./"><span  class="w3-hover-white w3-text-teal w3-container w3-padding-1 w3-display-topright" title="Log out">Logout</span></a>
							</div>
						</div>
						<h6 class="w3-text-teal">
							<?php
							if ($_SESSION['profile']!='') {
								?>
								<img src="photos/<?php echo $_SESSION['profile']; ?>" alt="User" style="width:10%" class="w3-circle w3-margin-top">
								<?php
							}else{
								?>
								<img src="img_default.png" alt="User" style="width:10%" class="w3-circle w3-margin-top">
								<?php
							}

							?>
						</h6>
						<p class="w3-text-blue"><i class="w3-xxlarge w3-text-blue fa fa-user-o"></i> <?php echo $_SESSION['fullname'];?></p>
						<p class="w3-text-blue w3-margin-bottom"><i class="w3-xxlarge w3-text-blue fa fa-envelope-o"></i> <?php echo $_SESSION['email'];?></p>
						<p class="w3-text-blue w3-margin-bottom"><i class="w3-xxlarge w3-text-blue fa fa-phone"></i> <?php echo $_SESSION['phone'];?></p>
						<p class="w3-text-blue w3-margin-bottom"><i class="w3-xxlarge w3-text-blue fa fa-home"></i> <?php echo $_SESSION['location'];?></p>

					</div>
					<div hidden id="twoo"  style="opacity:0.8"  class=" w3-light-grey w3-text-blue w3-margin w3-center  text-center">

						<div class="row">
							<div class="col-md-4"><a id="back" class="pull-left btn w3-text-teal">Back</a></div>
							<div class="col-md-4">
								<h6 class="w3-text-teal"></h6>
							</div>
							<div class="col-md-4">
								<a href="./"><span  class="w3-hover-white w3-text-teal w3-container w3-padding-1 w3-display-topright" title="Log out">Logout</span></a>
							</div>
						</div>
						<form method="post" action="" enctype="multipart/form-data">
							<div class="form-group">
								<label for="file_image">Profile Pic</label>
								<input type="file" class="form-control"  name="file"/>
							</div>
							<div class="form-group">
								<label for="fullname">Fullname</label>
								<input type="text" class="form-control" name="fullname" value="<?php echo $_SESSION['fullname'];?>"  placeholder="Firstname Lastname">
							</div>
							<div class="form-group">
								<label for="username">Username</label>
								<input type="email" class="form-control" value="<?php echo $_SESSION['email'];?>" name="username"  placeholder="username@email.com">
							</div>
							<div class="form-group">
								<label for="location">Location</label>
								<input type="text" class="form-control" name="location" value="<?php echo $_SESSION['location'];?>"  placeholder="Your location">
							</div>
							<div class="form-group">
								<label for="phone">Phone</label>
								<input type="number" class="form-control" name="phone" value="<?php echo $_SESSION['phone'];?>"  placeholder="(954) 000 000 000">
							</div>
							<div class="form-group">
								<label for="password">New password</label>
								<input type="password" class="form-control" id="pass" name="password"  placeholder="NyK!@12#">
							</div>
							<p id="password_match"></p>
							<div class="form-group">
								<label for="cpassword">Confirm password</label>
								<input type="password" onkeyup="confirmPassword(this.value)" class="form-control" id="cpass" name="cpassword"  placeholder="NyK!@12#">
							</div>
							<div class="form-group">

								<button id="sign-go" name="edit_profile" type="submit" class="t-color w3-btn">Submit</button>


							</div>

						</form>
					</div>
				</div>
				<div hidden id="all_"  style="opacity:0.8"  class=" w3-light-grey w3-text-blue w3-margin w3-center  text-center">

					<div class="row">
						<div class="col-md-4"><a id="back_2" class="pull-left btn w3-text-teal">Back</a></div>
						<div class="col-md-4">
							<h6 class="w3-text-teal"></h6>
						</div>
						<div class="col-md-4">
							<a href="./"><span  class="w3-hover-white w3-text-teal w3-container w3-padding-1 w3-display-topright" title="Log out">Logout</span></a>
						</div>
					</div>
					<table class="table w3-text-center w3-text-black table-bordered">
						<thead>
							<tr>
								<th>Photo</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Location</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$res=$db_con->prepare("SELECT * FROM users");
							$res->execute();
							while($row=$res->fetch(PDO::FETCH_ASSOC))
							{
								if ($row['profile']!='') {
									print '<tr><td><img src="photos/'.$row['profile'].'" style="width:30%" alt="User"  class="w3-circle w3-margin-top"></td>';
								}else{
									print '<tr><td><img src="img_default.png" style="width:30%" alt="User"  class="w3-circle w3-margin-top"></td>';
								}
								
								print '
								<td class="text-center">'.$row['fullname'].'</td>
								<td class="center">'.$row['username'].'</td>
								<td class="center">'.$row['phone'].'</td>
								<td class="center">'.$row['location'].'</td>
							</tr>';

						}
						?>

					</tbody>
				</table>
			</div>
		</div>
		<div class="center col-sm-2 col-xs-12 col-md-2">
		</div>

	</div>

</div>

<script type="text/javascript">
	$(document).ready(function() {
		$("#edit").click(function(){

			$("#onee").slideUp("slow",function(){
				$("#twoo").slideDown("slow");
			});
		});

		$("#back").click(function(){

			$("#twoo").slideUp("slow",function(){
				$("#onee").slideDown("slow");
			});
		});
		$("#back_2").click(function(){

			$("#all_").slideUp("slow",function(){
				$("#profile_forms").slideDown("slow");
			});
		});

		$("#all_users").click(function(){

			$("#profile_forms").slideUp("slow",function(){
				$("#all_").slideDown("slow");
			});
		});


	});
</script>
</body>
</html>
