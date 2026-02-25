<?php
include 'connection2.php';
$obj = new DatabaseConnection();
echo "<br>";
if(isset($_POST['edit'])){

    $enroll =$_POST['studenroll'];
    $name =$_POST['Studname'];
    $contact_number = $_POST['contact_number'];
    $file = $_POST['myfile'];
    

    $sql = "SELECT * FROM student_details WHERE stud_enroll='$enroll'";
    $result = $obj->c1->query($sql);
    $row = mysqli_fetch_assoc($result);
    print_r($row);
    echo "<br>";

    $res = $row['stud_enroll'];
    if($result==$enroll){

        $earray=array($enroll,$name,$contact_number,$file);
        $res =$obj->updatestud($enroll);


        if($res)
        {
            /*succssfull*/
            echo "<br>";
            echo "Your updated";
        }
        else{
            // echo "sorry your profile is not upadated";
            // header('location:student_form.php');

            echo "Error updating profile: " . mysqli_error($obj->c1);
        }
    }
    else{
        // sorry your id is not match 
        header('location:student_form.php');
    }
}


// if(isset($_POST['edit']))
// {
// 	$enroll = $_POST['studenroll'];
// 	$name=$_POST['Studname'];
// 	$contact=$_POST['contact_number'];
//     $profilefile=$_POST['myfile'];

// 	$earray=array($enroll,$name,$contact,$profilefile);
// 	$res=$obj->updatestud($earray);
//     echo $res;

// 	if($res)
// 	{
// 		echo "update sucess";
// 	}
// 	else{
// 		echo "no data update";
// 	}

// 	//echo $u. " ".$e. " ".$c;


// }

?>