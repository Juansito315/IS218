<?php

echo "Qusetion No.4(read csv file and convert the content of file to array, and then show the array using HTML table ))->ANSWER:";

//read csv file and and result show in html table
$row = 1;
if (($handle = fopen("sites/default/files/Bok1.csv", "r")) !== FALSE) {
    
    echo '<table border="1">';
    
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        $num = count($data);
        if ($row == 1) {
            echo '<thead><tr>';
        }else{
            echo '<tr>';
        }
        
        for ($c=0; $c < $num; $c++) {
            //echo $data[$c] . "<br />\n";
            if(empty($data[$c])) {
               $value = "&nbsp;";
            }else{
               $value = $data[$c];
            }
            if ($row == 1) {
                echo '<th>'.$value.'</th>';
            }else{
                echo '<td>'.$value.'</td>';
            }
        }
        
        if ($row == 1) {
            echo '</tr></thead><tbody>';
        }else{
            echo '</tr>';
        }
        $row++;
    }
    
    echo '</tbody></table>';
    fclose($handle);
}


echo "Qusetion No.5(if-statements that use isset, empty, and null.)->ANSWER:";


function add_deal($db){
	$buyer =null;
	if((isset($_POST["user_name"]) && !empty($_POST["user_name"]) && $_POST["user_name"])== Null)) {
		$data = [
		"user_name" => $_POST["user_name"]
		
		];
	$buyer_id = $db->insert("users",$data);

	}
	else{
		$buyer_id = $_POST['buyer_id'];
	}
}

?>