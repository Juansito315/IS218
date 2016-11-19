<?php

echo "Qusetion No.5( Also create switch statement using isset, empty, and null.)->ANSWER:";


 var today = "Friday";
	if( isset( $today && !empty($today) && ($today)== null) ) {
	  //check today var value and act accordingly
	
	  switch(today)
	
	  {
	
	  //in case value corresponds to Saturday or to Sunday do this:
	
	  case "Saturday":
		
		case "Sunday":
	
	  alert("It's the weekend: great!");
	
	  document.write("Today is " + today);
	
	  //no need to keep going:
	
	  break;
	
	  //in case value corresponds to Friday do this
	
	  case "Friday":
	
	  alert("Almost weekend time!");
	
	  document.write("Today is " + today);
	
	  //no need to keep going
	
	  break;
	}
	
	?>