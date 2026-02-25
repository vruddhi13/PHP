<?php
    
    $picture="image/ZandraArt.png";

    $servername="localhost";
    $username = "root";
    $password="";
    $dbname="e_complain";

    $con = mysqli_connect($servername,$username,$password,$dbname);
    if(!$con)
    {
        die("sorry we failed to connect : ".mysqli_connect_error());
    }
    else{
        echo "Database connected!";
    }

    $sql = "SELECT * FROM class_details";
    $result = mysqli_query($con,$sql);

    //find the number of recoreds returned
    echo "<br>";
    $num= mysqli_num_rows($result);
    echo $num;

    echo "<br>";
    //display the rows returned by the sql query
    if($num>0)
    {
        echo '<table border="1">
        <tr>
            <th>Class ID</th>
            <th>Class Name</th>
           
        </tr>';
        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row);
        // echo "<br>";
        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row);
        // echo "<br>";

        while($row= mysqli_fetch_assoc($result))
        {
            //echo "Class id : ". $row['class_id']."&nbsp Class Name : ".$row['class_name'];

            echo '<tr>';
            echo '<td>' . $row['class_id'] . '</td>';
            echo '<td>' . $row['class_name'] . '</td>';
           

            echo '</tr>';
            
        }
        echo '</table>';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<style>
    header{
        background-image: url(<?php echo $picture; ?>);
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