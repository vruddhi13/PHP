<?php

    include 'connection2.php';
    $obj = new DatabaseConnection();

    $open = $_GET['com'];
    $row = $obj->comajax($open);
 
   echo "<br><br>";
    while($data = mysqli_fetch_array($row))
    {
        ?>
         <table border="1">
        <tr>
            <th> Complain ID </th>
            <th> Complain Title </th>
            <th> Student Enroll </th>
            <th> class ID </th>
            <th> Complain Type </th>
            <th> Complain Date  </th>
            <th> Complain Status </th>
           
       
        </tr>

         <tr>
                <td><?php echo $data['complain_id']; ?></td><br>
                <td><?php echo $data['complain_title']; ?></td>
                <td><?php echo $data['stud_enroll']; ?></td>
                <td><?php echo $data['class_id']; ?></td>
                <td><?php echo $data['complain_type']; ?></td>
                <td><?php echo $data['complain_date']; ?></td>
                <td><?php echo $data['complain_status']; ?></td>
                
            </tr>
            </table>
            <?php
    }

?>