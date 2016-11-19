<?php

// This will add a backslash where the double quotes are
$mystr = addslashes('Hi I am not a programmer but I am trying hard "lol"');
echo ($mystr);
echo '<br>';

//chr function
$chrs = "I am just testing chr function of php";
$chrs .= chr(4); //Adds 4 characters of space after the end
echo ($chrs);

echo '<br>';
//chunk_split function
$chunk = "Hi there Juan";
echo chunk_split($chunk,1," ");
echo '<br>';
echo 'unique characters used in chunk string  with count_chars' . '<br>'
. " " . count_chars($chunk,3);

//explode converts string to array separated by delimiter
echo '<br>';
$separte = 'This is a string that we are going separate';
print_r (explode (" ",$separte));

//HTML entities
echo '<br>';
$htmlentity  = "We will get rid of the quotes";
echo htmlentities($htmlentity, ENT_COMPAT) ;//converts only double quotes




?>
