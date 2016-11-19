<?php
echo "Qusetion No.6(read this article about pass by value and reference )->ANSWER:";
echo'Functions with Arbitrary Number of Arguments';
function mumble(){
    $args = func_get_args();
    foreach ($args as $arg){
        ... whatever
    }
}
 echo'Using Glob() to Find Files';

// Does not support flag GLOB_BRACE
function rglob($pattern, $flags = 0) {
    $files = glob($pattern, $flags); 
    foreach (glob(dirname($pattern).'/*', GLOB_ONLYDIR|GLOB_NOSORT) as $dir) {
        $files = array_merge($files, rglob($dir.'/'.basename($pattern), $flags));
    }
    return $files;
}

echo' Memory Usage Information';

ini_set('memory_limit', '1M');
$x = '';
while(true) {
  echo "not real: ".(memory_get_peak_usage(false)/1024/1024)." MiB\n";
  echo "real: ".(memory_get_peak_usage(true)/1024/1024)." MiB\n\n";
  $x .= str_repeat(' ', 1024*25); //store 25kb more to string
}



 echo'CPU Usage Information';
function onRequestStart() {
	$dat = getrusage();
	define('PHP_TUSAGE', microtime(true));
	define('PHP_RUSAGE', $dat["ru_utime.tv_sec"]*1e6+$dat["ru_utime.tv_usec"]);
}
 
function getCpuUsage() {
    $dat = getrusage();
    $dat["ru_utime.tv_usec"] = ($dat["ru_utime.tv_sec"]*1e6 + $dat["ru_utime.tv_usec"]) - PHP_RUSAGE;
    $time = (microtime(true) - PHP_TUSAGE) * 1000000;
 
    // cpu per request
    if($time > 0) {
        $cpu = sprintf("%01.2f", ($dat["ru_utime.tv_usec"] / $time) * 100);
    } else {
        $cpu = '0.00';
    }
 
    return $cpu;
}
echo'Magic Constants';
class MySample
{
    private $myArray = array();
    public function __set($prop, $value) {
        $this->myAarray[$prop] = $value;
    }
    public function __get($prop) {
        return $this->myArray[$prop];
    }
    public function __isset($prop) {
        return isset($this->myArray[$prop]);
    }
    public function __unset($prop) {
        unset($this->myArray[$prop]);
    }
    public function __toString() {
        return __CLASS__ . ":" . $this->name;
    }
}
$obj = new MySample();
if (!isset($obj->name)) {
    $obj->name = "Alireza";
}
echo $obj->name; // Alireza
echo $obj; // MySample:Alireza


echo'Generating Unique ID';

//creates a unique id with the 'about' prefix
$a = uniqid(about);
echo $a;
echo "<br>";

//creates a longer unique id with the 'about' prefix
$b = uniqid (about, true);
echo $b;
echo "<br>";

//creates a unique ID with a random number as a prefix - more secure than a static prefix 
$c = uniqid (rand(), true);
echo $c;
echo "<br>";

//this md5 encrypts the username from above, so its ready to be stored in your database
$md5c = md5($c);
echo $md5c;

echo'Serialization';
$serialized_data = serialize(array('Math', 'Language', 'Science'));  
echo  $serialized_data . '<br>';

echo' Compressing Strings';

$string = str_repeat('1234567890'.implode('',range('a','z')),48800);

echo strlen($string);//1756800 bytes


$compressed = gzdeflate($string,  9);
$compressed = gzdeflate($compressed, 9);

echo '<br/>'.strlen($compressed).'<br/>';//99 bytes

echo gzinflate(gzinflate($compressed));


echo'Register Shutdown Function';

 echo "Here is my little script";

  function endScript(){
       echo "My little Script has finished";
  }

  register_shutdown_function('endScript');
?>