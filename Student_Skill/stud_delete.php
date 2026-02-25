<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label>Student ID</label>
        <input type="number" name="stud_id" require/><br><br>

        <button  type="delete" name="delete" value="delete"> Delete The Data</button>
    </form>
</body>
</html>


<?php

include 'connection.php';
$obj = new dataConnection();

    if(isset($_POST['delete']))
    {
        $sid = $_POST['stud_id'];

        $array = array($sid);
        $res = $obj->delete($array);

        if($res)
        {
            echo "<br><br>";
            echo "deleted successfully";
        }
        else{
            echo "not deleted ";
        }
    }

?>