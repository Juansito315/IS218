<?php

echo "Qusetion No.3(Create array and output the array as an HTML ))->ANSWER:";

 // three different array  and Output show in html table
$a[0] = array('ActivityDiaryEntry' => array("date" => "2011-03-03", "type"=> "Walking", "minutes" => 60));
$a[1] = array('ActivityDiaryEntry' => array("date" => "2011-03-03", "type"=> "Running", "minutes" => 22));
$a[2] = array('ActivityDiaryEntry' => array("date" => "2011-03-03", "type"=> "Biking", "minutes" => 42));

$keys = array_keys($a[0]["ActivityDiaryEntry"]);

echo '<table>
<th>Array To Html</th>';
for($c = 0; $c < count($a); $c++) {
	echo '<tr>';
		for($i = 0; $i < count($a[$c]['ActivityDiaryEntry']); $i++) {
			echo '<td>' . $a[$i]['ActivityDiaryEntry'][$keys[$c]] . '</td>';
		}
	echo '</tr>';		
}
echo '</table>';
?>