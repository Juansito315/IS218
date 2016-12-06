<?php

//Writen in OBJ mode
error_reporting(E_ALL); 
ini_set('display_errors', 1);

function main(){
  try {
		$file=open_csv();
		set_csv_header($file);
		$requesturl='https://web.njit.edu/~jr339/IS218/assignments9-15/12-14/controller/curl.handler.php';
		$json=get_web_page($requesturl);
		print '<table class="table">
		<thead>
			<tr><th>Json response</th></tr>
		</thead>
		<tbody>
			<tr><td>'.$json.'</td></tr>
		</tbody>
	</table><br><br>';

	$k= json_decode($json,true);

	print '<table class="table">
	<thead>
		<tr>
			<th>Make</th>
			<th>Model</th>
			<th>Year</th>
		</tr>
	</thead>
	<tbody>';

		foreach ($k['data'] as $key => $value) {
			print '<tr><td>'.$value['make'].'</td><td>'.$value['model'].'</td><td>'.$value['year'].'</td></tr>';
			insert_to_csv($file,$value);
		}
		print '</tbody></table>';
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}		


//handle curl requests		
function get_web_page($url) {
	$options = array(
		CURLOPT_RETURNTRANSFER => true,
         // return web page

		); 

	$ch = curl_init($url);
	curl_setopt_array($ch, $options);

	$content  = curl_exec($ch);
	$info = curl_getinfo($ch);
	curl_close($ch);
	return $content;
}

function set_csv_header($file){
	fputcsv($file, array('make','model','year'));
}

function insert_to_csv($file,$data){
	try {
		fputcsv($file, $data);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}

function open_csv(){
	try {
		$file = fopen("curltocsv.csv",'w');
		return $file;
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	
}

main();

