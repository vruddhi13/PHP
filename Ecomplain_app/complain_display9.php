<?php
    $pic="image/jpeg.jpeg";
      
    
    $servername = "localhost";
    $username="root";
    $password = "";
    $dbname = "e_complain";

    $con = mysqli_connect($servername,$username,$password,$dbname);
    if(!$con)
    {
        die("Not connected");
    }
    else{
        echo "Connected Successfully !";
    }

    $sql = "SELECT * FROM complain_details";
    $result = mysqli_query($con,$sql);

   $num = mysqli_num_rows($result);
   //echo var_dump($num);

   if($num>0)
   { ?>
        <table border="1">
        <tr>
            <th> Complain ID </th>
            <th> Complain Title </th>
            <th> Student Enroll </th>
            <th> class ID </th>
            <th> Complain Type </th>
            <th> Complain Date  </th>
            <th> Complain Status </th>
           
       
        </tr>;
<?php
        while($row = mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?php echo $row['complain_id']; ?></td>
                <td><?php echo $row['complain_title']; ?></td>
                <td><?php echo $row['stud_enroll']; ?></td>
                <td><?php echo $row['class_id']; ?></td>
                <td><?php echo $row['complain_type']; ?></td>
                <td><?php echo $row['complain_date']; ?></td>
                <td><?php echo $row['complain_status']; ?></td>
                
            </tr>

            <!-- echo '<tr>';
            echo '<td>'.$row['complain_id'].'</td>';
            echo '<td>'.$row['complain_title'].'</td>';
            echo '<td>'.$row['stud_enroll'].'</td>';
            echo '<td>'.$row['class_id'].'</td>';
            echo '<td>'.$row['complain_type'].'</td>';
            echo '<td>'.$row['complain_date'].'</td>';
            echo '<td>'.$row['complain_status'].'</td>'; -->
           
            <!-- echo '</tr>'; -->
           
       <?php } //over the while clause ?>
    </table> <!--over the table variable -->
   
   <?php
   }


?>  

<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body{
        background-image: url(<?php echo $pic; ?>);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
    }
    </style>
    
</head>
<body>
    
</body>
</html>