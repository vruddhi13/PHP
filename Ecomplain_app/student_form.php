<?php

include 'connection2.php';
$obj = new DatabaseConnection();
echo "<br>";

   if(isset($_GET['en'])){
        $studenroll = $_GET['en'];
        $res = $obj->wherestud($studenroll);

       
       if($res){
            echo " success";
       }
       else{
            echo "not worked";
       }

    }
   

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style1.css">
    <title>student information</title>
</head>
<body id="kkk">
<div id="lilo">
    <h1> Edit your Student Profile</h1>
        <form action="#" method="post" enctype="multipart/form-data">
    
    <?php     while($data = mysqli_fetch_array($res))  { ?>
            <label for="studenroll"> student Enroll No.  </label>
            <input type="text" name="studenroll"  value="<?php echo $studenroll[0]; ?>" readonly><br><br>

            <label for="email"> student Email </label>
            <input type="text" name="email" value="<?php //echo $data[1];  ?>"><br><br>
          
            <label for="studname"> student Name </label>
            <input type="text" name="studname" value="<?php //echo $data[2];  ?>"><br><br>

            <label for="contact_number"> student Contact No. </label>
            <input type="number" name="contact_number"  value="<?php //echo $data[3];  ?>"><br><br>

            <label for="studId"> student Class ID </label>
            <input type="number" name="studId" value="<?php echo $data[4];  ?>" readonly><br><br>

            <label for="fee"> student Annual Fee </label>
            <input type="number" name="fee" value="<?php echo $data[5];  ?>" readonly><br><br>
           

            <label for="studdate"> student Date of admission </label>
            <input type="date" name="studdate" value="<?php echo $data[6];  ?>"><br><br>
           
            
            <label for="pass"> Password </label>
            <input type="password" name="pass" value="<?php echo $data[7];  ?>"><br><br>
         

            <label for="myfile">Search File : </label>
            <input type="file" name="myfile"><br><br>
           

            <button name="edit" value="edit">Edit</button>
        <?php  } ?>

            
        </form>

    </div>
</body>
</html>


<?php

    if(isset($_POST['edit'])){
        if($_POST['edit']){
            
            $studname = $_POST['studname'];
            $contact = $_POST['contact_number'];
            $profilefile=$_FILES['myfile']['name'];

            $filename = basename($_FILES['myfile']['name']);
            echo $filename;

            $target = "upload/".$filename;

            $TargetFilePath = $target.$profilefile;
            $fileType= pathinfo($TargetFilePath,PATHINFO_EXTENSION);
            echo "<br>";
            //echo $fileType;

        

            $allowdext = array('jpg','png','jpeg','gif');

            if(in_array($fileType,$allowdext)){
                echo "<br>"."File OK";

                if(move_uploaded_file($_FILES['myfile']['tmp_name'],$TargetFilePath))
                {
                    echo "File uploaded Successfully";
                
            

            // $targetDir = "upload/";
            // $targetFile = $targetDir . basename($_FILES["myfile"]["name"]);
            // $uploadOk = 1;
            // $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            
            echo "<br><br>";
            // $earray = array($enroll,$studname,$contact,$profilefile);
            // $del = $obj->updatestudent($earray);

            $update = "UPDATE student_details 
            SET stud_name='$studname' , stud_contact='$contact' , profile_file='$profilefile'
            WHERE stud_enroll=".$studenroll;


            $sql2 =$obj->c1->query($update);
            
            if($sql2)
            {
                echo "updated successfuly";
            }
            else{
                echo "not Upadted ".mysqli_error($obj->c1);
            }

            // $fname = basename($_FILES["myfile"]["name"]);

                }
            }
        }
    

        echo "<br><br>";

        // if($_SERVER["REQUEST_METHOD"]=="POST")
        // {
        //     $email = $_POST['email'];
            
        //     if(filter_var($email,FILTER_VALIDATE_EMAIL))
        //     {
        //         echo "valid email address: ".$email;
        //     }
        //     else{
        //         echo "Invalid email address: ".$email;
        //     }
        // }

        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $email = $_POST['email'];

            $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';

            if(preg_match($pattern,$email))
            {
                echo "valid email address: ".$email;
            }
            else{
                echo "Invalid email address: ".$email;
            }
        }
    }
?>