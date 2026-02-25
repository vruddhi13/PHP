<?php
    include 'connection2.php';
   
    if(isset($_POST['submit']))
    {
        $ctitle=$_POST['comtitle'];
        $studenroll = $_POST['studenroll'];
        $cid=$_POST['class_name'];
        $ctype=$_POST['comtype'];
        $comdate = date('Y-m-d'); 
        $comstatus=$_POST['comstatus'];

       $input = array($ctitle,$studenroll,$cid,$ctype,$comdate,$comstatus);
       $obj= new DatabaseConnection(); echo "<br><br>";
       $out = $obj->complainadd($input);

        if($out)
        {
            echo "inserted successfully <br>";
            
        }
        else{
            echo "data not inserted";
        }
    }
    echo "<br><br>";

    // echo "complain id : $cid <br>";
    // echo "complain title : $ctitle <br>";
    // echo "student enroll : $studenroll <br>";
    // echo "class id : $classid <br>";
    // echo "complain type : $comtype <br>";
    // echo "complain date : $comdate <br>";
    // echo "complain status : $comstatus <br>";
    

?>