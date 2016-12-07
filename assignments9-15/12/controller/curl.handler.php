<?php
error_reporting(E_ALL);
require 'curl.post.get.php';
$curl=new CurlPostGet();
//post
if (isset($_POST['email'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];

	$url='web.njit.edu/~jr339/IS218/assignments9-15/12/controller/curl.post.results.php';

	$data_params = array(
		"email" => $email,
		"password" => $password
		
		);
	$results=$curl->curl_post($url,$data_params);
	echo $results;
}

//get
if (isset($_GET['email'])) {
	$email=$_GET['email'];
	$password=$_GET['password'];

	$url='http://localhost/app/controller/curl.get.results.php?email='.$email.'&password='.$password.'';
	$results=$curl->curl_get($url);
	echo $results;
}
