<?php
$pic = "image/Download free image of Abstract beige wallpaper background image by Nunny about sand watercolor, sand background, earth tone abstract watercolor, gradient earth tone, and earth tone 2620460.jpeg";
 
include 'connection2.php'; 

$obj=new DatabaseConnection();
$res=$obj->showstudent();


if(isset($_POST['submit']))
{
     $studenroll = $_POST['studenroll'];
     $pass = $_POST['password'];
    // $profilefile = $_FILES['myfile'];
    

     $varcheck=0;
      while($data=mysqli_fetch_array($res))
      {
         if(($studenroll==$data[0]) && ($pass==$data[7]))
         {
            $phname = $data[8];
            $varcheck=1;
         }
      }

      if($varcheck==1)
      {
         echo "<br><br>";
         echo "login success"."<br>"."Welcome to collage<br>". '&nbsp;'.$studenroll."<br>";
         echo "<a href='class_form4.php'> Class details <a><br>";
         echo "<a href='student_form.php?en=$studenroll'>Student details <a><br>";
         echo "<a href='complain_form7.php?en=$studenroll'> Complain details <a>";
         echo "<br><br>";
         echo $phname."<br>";
         $imageUrl = 'upload/'.$phname;
         echo "<br>";
         echo "<img src='$imageUrl' alt='' hight='300px', width='300px' /><br>";
         
      

         echo "<br><br>";
         echo "<a href='ajaxJava.php'> Go To Ajax Code </a>";
      }
      else{
         echo "login failed";
         header('Location:form.php?var='.$varcheck);
      }
      
}
else{
 echo "no submit";
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>


   <style>
     body{
      background-image : url('<?php  echo $pic; ?>');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
      
     } 
   </style>
</head>

   </body>
</html>
