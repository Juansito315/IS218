<?php

echo "Qusetion No.7(Create example and explain the purpose of  each superglobal )->ANSWER:";
 
$_GET and $_POST
$_GET and $_POST are used to get information sent in the page request. Parameters sent in the URL are made available by $_GET.echo '<pre> For example, this URL:';
http://example.com/profile.php?uid=12345

//will send the parameter uid to profile.php, which you can then access the value in profile.php as $_GET["uid"].

//When you have a form submission that is sent using method="get", the values are appended to the URL so they are available using $_GET as well. Forms submitted using method="post" send their values in the body of the HTTP request; posted data is available in your script by using $_POST. Here’s a sample web form which posts a username and password to a login script:';

$form ='<form action="login.php" method="post">
Username: <input type="text" name="uname"><br>
Password: <input type="password" name="pass"><br>
<input type="submit" value="Login">
</form>';

$_SESSION

session_start();
$_SESSION["videogame"] = "Battletoads";

<a href="page2.php">Go to page 2</a>

//When the user clicks on the link to page2.php, it calls session_start() to resume the session, retrieves the value from $_SESSION["videogame"] and displays it: 


session_start();
echo $_SESSION["videogame"];

echo $_SERVER;
//The $_SERVER superglobal array stores information about both the web server and the request made to it. Some of the more useful $_SERVER values are:

$_SERVER["PHP_SELF"] – the name of the currently running PHP script
$_SERVER["REQUEST_METHOD"] – which HTTP method was used to request the page (GET, POST, etc)
$_SERVER["REQUEST_TIME"] – the time the page request was received, represented as an integer known as a unix timestamp
$_SERVER["HTTP_REFERER"] – the address of the previously visited page, if available.


$GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).
echo 'For example';
$x = 75; 
$y = 25;
 
function addition() { 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
 
addition(); 
echo $z; 

$_ENV


$_ENV The $_ENV Superglobal represents data available to a PHP script from the environment in which PHP is running.
$_FILES

$_FILES The $_FILES Superglobal represents data available to a PHP script from HTTP POST file uploads. Using $_FILES is the currently preferred way to handle uploaded files in PHP.





?>