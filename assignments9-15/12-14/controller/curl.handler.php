<?php
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
	header('Content-type: application/json');
	?>
{
 "data": [
            <?php echo rtrim($items,',');?>
        ]
}

