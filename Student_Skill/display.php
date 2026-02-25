<?php


include 'connection.php';
$obj = new dataConnection();
$res = $obj->showstudent();

   $num = mysqli_num_rows($res);
   echo "<br>";
    
   if($num>0)
   {
        $varcheck=0;

        while($data = mysqli_fetch_array($res))
        {
            $phname = $data[4];
            $varcheck=1;
        }

        if($varcheck==1)
        {
            echo "<br>";
            echo $phname; echo "<br><br>";
            $imgURL = 'upload/'.$phname;

            echo "<img src='$imgURL' alt='' hight='200px' width='200px'>";

        }
        else{
            echo "<br><br>";
            echo "can't display image";
        }

       
   }

       
    

?>