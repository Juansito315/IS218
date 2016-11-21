<?php
echo "Qusetion No.1(addslashes))->ANSWER:";
$str = "<pre>addslashes adds the slash into string to avoid the query or code breaks for example Raza's house \n addcslashes function will put slash before single quote</pre>";

echo addslashes($str);

echo "OUTPUT: =<pre>addslashes adds the slash into string to avoid the query or code breaks for example Raza\'s house \n addcslashes function will put slash before single quote</pre>";

echo "</br>";
echo "</br>";

echo "Qusetion No.1(chr))->ANSWER:<pre>The chr() function returns a character from the specified ASCII value Lets Take an example</pre>";

$chr= chr(046); // parameters requires ASCII Value for example "046 is a ascii value of '&' it will print like this"

echo "<pre>You ".$chr." me are developer</pre>";

echo "OUTPUT: = <pre>You & me are developer</pre>";

echo "</br>";
echo "</br>";
echo "Qusetion No.1(chunk_split))->ANSWER:<pre>chunk_split used to maniplute the string at desired points chunk_split(a,b,c) where parameters 'a' is a string or body  'b' is that place where to put and 'c' is a value that what you want to be there </pre>";
$str = "Hello Guys!"; 
echo chunk_split($str,6,"...");
echo "</br>";
echo "OUTPUT: = Hello... Guys!...";

echo "</br>";
echo "</br>";
echo "Qusetion No.1(count_chars))->ANSWER:";
$str_count_char = "Hello World!";
echo count_chars($str_count_char,3);  // parameter "mode 3" will return the string of all characters that used in example,

echo "</br>";
echo "OUTPUT: = !HWdelor";
echo "</br>";

echo count_chars($str_count_char,4);  // parameter "mode 4" will return the string of all characters instead of used in example,
echo "</br>";
echo "OUTPUT: =All characters instead of these '!HWdelor'";
echo "</br>";
echo "Qusetion No.1(echo))->ANSWER:";

echo "Hello There?"; // echo is used to print string not array.

echo "</br>";
echo "</br>";
echo "Qusetion No.1(explode))->ANSWER:";

$str_explode = "Hello world. It's a beautiful day."; 
print_r (explode(" ",$str_explode)); // explode function will break the string by space and convert it into array 

echo "Array ( [0] => Hello [1] => world. [2] => It's [3] => a [4] => beautiful [5] => day. )";
echo "</br>";
echo "</br>";
$str_explode = "Hello,world,It's,a,beautiful,day.";
print_r (explode(",",$str_explode)); // explode function will break the string by comma and convert it into array 
echo "</br>";
echo "</br>";
echo "Array ( [0] => Hello [1] => world. [2] => It's [3] => a [4] => beautiful [5] => day. )";
echo "</br>";
echo "</br>";
echo "Qusetion No.1(htmlentities))->ANSWER:";

$str = "A 'quote' is <b>bold</b>";

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);
echo "</br>";
echo "OUTPUT";
?>
