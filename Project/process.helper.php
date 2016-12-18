<?php
$db=new Connection();
$db_con=$db->connect();
$status='';
error_reporting(E_ALL);
if (isset($_POST['sign-in'])) {
	$r=new Login($_POST['password'],$_POST['username'],$db_con);
	$res=$r->login();
	switch ($res) {
		case 0:
		header("Location:user_profile");
		break;
		case 1:
		$status="Wrong password";
		break;
		case 2:
		$status="User does not exist";
		break;

		
		default:
			# code...
		break;
	}
}else if (isset($_POST['sign-up'])) {
	$r=new Signup($_POST['username'],$_POST['password'],$_POST['fullname'],$_POST['phone'],$_POST['location'],$db_con);
	$res=$r->new_user();
}

if (isset($_POST['edit_profile'])) {
    $newfilename=$_FILES['file']['name'];
	$profile_pic=$newfilename;
	$r=new Signup($_POST['username'],$_POST['password'],$_POST['fullname'],$_POST['phone'],$_POST['location'],$db_con);
	$res=$r->user_edit($profile_pic);
	if($_FILES['file']['size']>0){
		move_uploaded_file($_FILES['file']['tmp_name'],"photos/".$newfilename);
	}
}

