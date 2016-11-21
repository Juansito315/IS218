<?php

	
echo "Qusetion No.8(read this article about pass by value and reference )->ANSWER:";



echo 'The main difference is when we pass by reference we are handing in our only copy of the variable, and the function directly modifies that variable, where as when we pass by value we have another variable that points at the other variable, so basically two copies of the same variable, and only the copy is modified leaving our original unchanged.';




 
// this is the only variable we have of this function and it is directly modified by our function, this is passing by reference. 

function drive($laps) {
$mBarsCount=2;	
$mBarsCount -= $laps;
return $mBarsCount;
}
//Here is the example of passing by value.


$mBarsCount1 = 8; 
$currentBarCount = drive($mBarsCount1);
echo "orignal value=".$mBarsCount1; 
echo "function return value=".$currentBarCount 

// we are assigning two variables in this.







?>