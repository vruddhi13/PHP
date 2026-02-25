<?php
    include 'connection2.php';
    $obj= new DatabaseConnection();

 if(isset($_GET['en']))
 {
    $studenroll = $_GET['en'];
   
 }
 $result = $obj->showstudent();
 $classresult=$obj->showclass();


   
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complain Details</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body id="complain_form">
<div id="complain">
    <h1 > Complain Details</h1>
        <form action="complaindatainsert8.php" method="post">
            <!-- <label for="complainId"> Complain Id  </label>
            <input type="text" name="complainId" ><br><br> -->


            <label for="comtitle" > Complain Title : </label>
            <select name="comtitle">
                <option value="teching">Teching</option>
                <option value="about reserch">About Reserch</option>
                <option value="unfair practice about">Unfair Practice About</option>
                <option value="about facilities">About facilites</option>
            </select><br><br>


            <label for="studenroll" > Student Enroll : </label>
            <select name="studenroll">
                <?php
                    while($row = mysqli_fetch_array($result))
                    {
                        ?>
                        <option value="<?php echo $row[0];  ?>"> <?php echo $row[0]; ?></option>
                        <?php
                    }?>
            </select><br><br>

            <label for="class_name" > Student Class Name  : </label>
            <select name="class_name">
            <?php
                    while($row = mysqli_fetch_array($classresult))
                    {
                        ?>
                        <option value="<?php echo $row[0];  ?>"> <?php echo $row[1]; ?></option>
                        <?php
                    }?>
            </select><br><br>


            <label for="comtype" > Complain type  :</label>
            <select name="comtype">
                <option value="teching">Teching</option>
                <option value="facilites">Facilities</option>
                <option value="unfair practice">Unfair Practice</option>
                <option value="supervision">Supervision</option>
                <option value="reserch">Reserch</option>
            </select><br><br>


            <label for="comdate" > Complain Date : </label>
            <?php echo $k = date('Y-m-d'); ?><br><br>


            <label for="comstatus" > Complain Status : </label>
            <select name="comstatus">
                <option value="pending">Pending</option>
                <option value="completes">Completes</option>
            </select><br><br>

            <input type="submit" name="submit" value="submit" id="complain_submit"><br><br>
                <?php
                echo "<a href='complain_display9.php' style='color:white;'> Show The Data </a> <br>";

                ?>
        </form>

    </div>
</body>
</html>

