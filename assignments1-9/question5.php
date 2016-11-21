<?php

echo "Qusetion No.5( Also create switch statement using isset, empty, and null.)->ANSWER:";
echo"<br>";

 $today = "Friday";
	if( isset( $today) &&!empty($today) && '$today'!= null ) {
	  //check today var value and act accordingly
	  switch($today)
	  {
	  case "Saturday":
	echo "today is saturday";
	break;	
		case "Sunday":
	echo "today is sunday";
	break;
	  //no need to keep going:
	  //in case value corresponds to Friday do thi
	  case "Friday":
	echo "today is friday";
	break;
	}
	}
	?>