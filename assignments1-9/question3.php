<?php
$shop = array(
    array("John", 5000, "Manager"),
    array("Elena",  6000, "Executive Manager"),
    array("Richard", 7500, "HR Manager" ),
);
?>
<table>
     <tr>
       <th>Name</th>
       <th>Salary</th>
       <th>Designation</th>
     </tr>
     <?php foreach ($shop as $row) : ?>
     <tr>
       <td><?php echo $row[0]; ?></td>
       <td><?php echo $row[1]; ?></td>
       <td><?php echo $row[2]; ?></td>
     </tr>
     <?php endforeach; ?>
   </table>
