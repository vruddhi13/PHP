<?php


    include "connection.php";

    $obj = new DatabaseConnection();
    $res = $obj->part_display();
    $num = mysqli_num_rows($res);

    if($num>0)
    { ?>
         <table border="1">
         <tr>
             <th>Event Name  </th>
             <th> Participant Name </th>
             <th>Fee Status </th>
             <th>Participant Type</th>
             <th> Event Fees </th>
             
            
        
         </tr>
 <?php
         while($row = mysqli_fetch_array($res))
         {
             ?>
             <tr>
                 <td><?php echo $row['event_name']; ?></td>
                 <td><?php echo $row['part_name']; ?></td>
                 <td><?php echo $row['fee_status']; ?></td>
                 <td><?php echo $row['part_type']; ?></td>
                 <td><?php echo $row['event_fee']; ?></td>
                 
                 
             </tr>
 
            
        <?php } //over the while clause ?>
     </table> <!--over the table variable -->
    
    <?php
    }
 
 
 ?>  