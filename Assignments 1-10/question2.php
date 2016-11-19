<?php
echo "Qusetion No.2(10 Common Array Functions ))->ANSWER:";
sizeof($arr);

echo 'This function returns the number of elements in an array.';

$data = array("red", "green", "blue");

echo "Array has " . sizeof($data) . " elements";


//Output:
echo 'Array has 3 elements';


array_values($arr);
echo'This function accepts a PHP array and returns a new array containing only its values (not its keys). Its counterpart is the array_keys() function.';

$data = array("hero" => "Holmes", "villain" => "Moriarty");
print_r(array_values($data));


//Output:
Array
(
[0] => Holmes
[1] => Moriarty
)

array_keys($arr);

echo'This function accepts a PHP array and returns a new array containing only its keys (not its values). Its counterpart is the array_values() function.';

$data = array("hero" => "Holmes", "villain" => "Moriarty");
print_r(array_keys($data));


Output:
Array
(
[0] => hero
[1] => villain
)

array_pop($arr);
echo'This function removes an element from the end of an array.';
$data = array("Donald", "Jim", "Tom");
array_pop($data);
print_r($data);


//Output:
Array
(
[0] => Donald
[1] => Jim
)

array_push($arr, $val);

$data = array("Donald", "Jim", "Tom");
array_push($data, "Harry");
print_r($data);
echo'This function adds an element to the end of an array.'; 

//Output:
Array
(
[0] => Donald
[1] => Jim
[2] => Tom
[3] => Harry
)

array_shift($arr);
echo'This function removes an element from the beginning of an array.';
$data = array("Donald", "Jim", "Tom");
array_shift($data);
print_r($data);

//Output:
Array
(
[0] => Jim
[1] => Tom
)

array_flip($arr);
echo'The function exchanges the keys and values of a PHP associative array.

Use this function if you have a tabular (rows and columns) structure in an array, and you want to interchange the rows and columns.';

$data = array("a" => "apple", "b" => "ball");
print_r(array_flip($data));

//Output:
Array
(
[apple] => a
[ball] => b
)

array_reverse($arr);

echo'The function reverses the order of elements in an array';

$data = array(10, 20, 25, 60);
print_r(array_reverse($data));

//Output:
Array
(
[0] => 60
[1] => 25
[2] => 20
[3] => 10
)

array_merge($arr);
echo'This function merges two or more arrays to create a single composite array. Key collisions are resolved in favor of the latest entry.';
$data1 = array("cat", "goat");
$data2 = array("dog", "cow");
print_r(array_merge($data1, $data2));


//Output:
Array
(
[0] => cat
[1] => goat
[2] => dog
[3] => cow
)
array_rand($arr);
echo'This function selects one or more random elements from an array.';
$data = array("white", "black", "red");
echo "Today's color is " . $data[array_rand($data)];


//Output:
echo'Today color is red';

array_unique($data);
echo 'This function strips an array of duplicate values';
$data = array(1,1,4,6,7,4);
print_r(array_unique($data));


//Output:
Array
(
[0] => 1
[3] => 6
[4] => 7
[5] => 4
)
?>