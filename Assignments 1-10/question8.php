<?php

	
echo "Qusetion No.8(read this article about pass by value and reference )->ANSWER:";



echo 'The main difference is when we pass by reference we are handing in our only copy of the variable, and the function directly modifies that variable, where as when we pass by value we have another variable that points at the other variable, so basically two copies of the same variable, and only the copy is modified leaving our original unchanged.';




public int mBarsCount = 8; 
// this is the only variable we have of this function and it is directly modified by our function, this is passing by reference. 

public int drive(int laps) {
mBarsCount -= laps;
return mBarsCount
}
Here is the example of passing by value.


public int mBarsCount = 8; 
public int currentBarCount = mBarsCount; 
// we are assigning two variables in this.

public int drive(int laps) {
currentBarCount -= laps; // in our function we only decrease the copy, never modifying our original variable mBarsCount.
}





?>