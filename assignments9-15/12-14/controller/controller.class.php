<?php

function csv_to_json(){
	$items='';

	    $data = array();
	    $filename='cars.csv';
		$handle = fopen($filename, "r");

		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			//echo $make;
			if(!empty($data))
			{
			
			$items .= <<<EOD
{
"make": "$data[1]",
"model": "$data[2]",
"year": "{$data[0]}"
},
EOD;
		
	}}
	?>
{
 "data": [
            <?php echo rtrim($items,',');?>
        ]
}
<?php


}
function search(){

	if (isset($_GET['make'])) {
		$make=$_GET['make'];
		$data = array();
		$filename='cars.csv';
		$handle = fopen($filename, "r");

		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		//echo $make;
			if(!empty($data)&& strtolower($data[1])==strtolower($make))
			{
				print('<tr>
					<td>'.clean($data[1]).'</td>
					<td>'.clean($data[2]).'</td>
					<td>'.clean($data[0]).'</td>
				</tr>   ');

			}
		}
	}
}




function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}