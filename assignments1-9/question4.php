<?php
echo "<html><body><table border=1>\n\n";
$f = fopen("csv.csv", "r");
     
        
echo"<tr>";
$cell=array();
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table></body></html>";
?>