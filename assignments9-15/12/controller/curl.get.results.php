<?php
if (isset($_GET['email'])) {
	echo 'From get::Hey '.$_GET['email'].' your password is '.md5($_GET['password']).'lol! its encrypted';
}