<?php
    if(isset($_POST['Update']))
    {
                
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

        $id = $_POST['id'];
        $name = $_POST['className'];

        $sql = "UPDATE class_details SET class_name=$name WHERE class_id=$id";
        $result = mysqli_query($con,$sql);

        if(!$result)
        {
                die('Could not update data: ' );
        }
        echo "Updated data successfully\n";

    }
?>