<?php

    include "connection.php";
    $obj = new dataConnection();

    if(isset($_GET['skill_id']))
    {
        $skill_id = $_GET['skill_id'];
       
    }
   
    $res = $obj->showskill();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
    <h2>Student Form</h2>
    <p>Fill The Student With Proper Details</p>

    <form action="#" method="post" enctype="multipart/form-data">

        <label>Student ID:</label>
        <input type="number" name="s_id" required><br><br>

        <label>Student Name:</label>
        <input type="text" name="s_name" required><br><br>

        <label>Student Contact:</label>
        <input type="number" name="s_contact" required><br><br>

        <label >Skill ID:</label>
        <select name="skill_id">
            <?php  while($data = mysqli_fetch_array($res)){  ?>
                <option value="<?php echo $data[0]; ?>"><?php  echo $data[0];  ?></option>
     <?php  }?>
        </select><br><br>
        
        <!-- <select name="skill_id">
            <?php 
                // $skills = array(
                //     1=>"Drawing",
                //     2=>"Singing",
                //     3=>"Dancing",
                //     4=>"Cooking"
                // );

                // foreach($skills as $skill_id =>$skill_type)
                // {
                //     echo "<option value='$skill_id'>$skill_type</option>";
                // }
            ?>
        </select><br><br> -->

        <label>Student Image</label>
        <input type="file" name="myfile"><br><br>

        <input type="submit" name="submit" value="submit"><br><br>

        <a href='student_display.php'> show The Data</a>
        
    </form>
</body>
</html>


<?php

    if(isset($_POST['submit']))
    {
        $sid = $_POST['s_id'];
        $sname = $_POST['s_name'];
        $contact = $_POST['s_contact'];
        $id = $_POST['skill_id'];
        $image = $_FILES['myfile']['name'];

        $profile = basename($_FILES['myfile']['name']);
        $target = 'upload/'.$profile;

        $targetfilepath = $target.$image;
        $filetype= pathinfo($targetfilepath,PATHINFO_EXTENSION);

        $allowext = array('png','docs','jpeg','jpg');
        if(in_array($filetype,$allowext))
        {
            echo "file OK";
            echo "<br><br>";

            if(move_uploaded_file($_FILES['myfile']['tmp_name'],$targetfilepath))
            {
                echo "uploaded Successfully";
                echo "<br><br>";

                $array = array($sid,$sname,$contact,$id,$image);
                $res =$obj->student_insert($array);

                if($res)
                {
                    echo "inserted successfully";
                }
                else{
                    echo "not inserted";
                }
            }
        }

      echo "<a href='display.php'> See The Photo</a>";
      

    }

?>
