<?php
//1. array_combine:
	//		Creates an array by using one array for keys and another for its values.
		//	Example:
				$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);
echo "<br>";
//2. array_change_key_case:
	//		Changes the case of all keys in an array.
		//	Example:
				$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));
echo "<br>";
//3. array_count_values:
	//		Counts all the values of an array.
//			Example:
$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));
echo "<br>";
//4. array_map:
	//		Applies the callback to the elements of the given arrays.
		//	Example:
			function myfunction($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));
echo "<br>";
//5. array_multisort:
	//		Sort multiple or multi-dimensional arrays.
//			Example:
				$a=array("Dog","Cat","Horse","Bear","Zebra");
array_multisort($a);
print_r($a);
echo "<br>";
//6. array_merge:
	//		Merge one or more arrays.
		//	Example:
			$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
echo "<br>";
//7. array_slice:
			//Extracts a slice of an array.
			//Example:
			$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));    
		//	Output:
	//			"c", "d", and "e"
echo "<br>";
//8. array_search:
			//Searches the array for a given value and returns the first corresponding key if successful.
			//Example:
				$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);
echo "<br>";
//9. array_reverse:
//			Return an array with elements in reverse order.
	//		Example:
			$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));
echo "<br>";
//10. array_rand:
	//		Pick one or more random entries out of an array.
		//	Example:
			$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
?>