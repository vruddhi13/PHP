<?php

    include 'connection2.php';

    $obj = new DatabaseConnection();
    echo "<br><br>";
        //$id=$_POST['id'];
        $className=$_POST['className'];
    
        $out=$obj->classcreate($className);
        
    

        if($out)
        {
            echo "data inserted <br>";
            // echo "Class Id : $id";
             echo "Class Name : $className";
                echo "<br><br>";
             
            
        }
    
        else{
            echo "data not inserted";
        }
    
 
?>

        
    
