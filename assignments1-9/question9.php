<?php


echo "Qusetion No.9(Create a class to write a csv file class that handles exception for file not found error )->ANSWER:";


class test {

public function csvtoArray($path)
{
    if(file_exists($path)){
        $fh = fopen($path, "r");
        //Setup a PHP array to hold our CSV rows.
        $list = array();
          //Loop through the rows in our CSV file and add them to
          //the PHP array that we created above.
        while (($row = fgetcsv($fh, 0, ",")) !== FALSE) {
            $list[] = $row;
        }
        print_r($list);
    }else{
        echo "file not exist";
    }
}
}

$test = new test;

$test->csvtoArray("csv.csv");

echo "by changing file name    ";
$test->csvtoArray("cs.csv");
?>