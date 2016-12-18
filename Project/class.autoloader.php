<?php 
/**
* Autoloader class
*/
class Autoloader
{
	
	public static function loader($class_name){
		$filename = strtolower($class_name). '.php';
		$file =$filename;
		if (!file_exists($file))
		{
			return false;
		}
		include $file;
	}
}