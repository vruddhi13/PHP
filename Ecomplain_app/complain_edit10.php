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

        $id = $_POST['complainId'];
        $ctitle=$_POST['comtitle'];
        $studenroll = $_POST['studenroll'];
        $cid=$_POST['class_id'];
        $ctype=$_POST['comtype'];
        $comdate = date('Y-m-d');
        $comstatus=$_POST['comstatus'];

        $sql = "UPDATE complain_details SET comtitle=$ctitle,studenroll=$studenroll,class_id= $cid,comtype=$ctype,comdate=$comdate,comstatus=$comstatus WHERE complainId=$id";
        $result = mysqli_query($con,$sql);

        if(! $result ) {
            die('Could not update data: ' . mysql_error());
         }
         echo "Updated data successfully\n";
         mysql_close($con);
    }
  
 

?>