<?php
    if(isset($_POST['var']))
    {
        if($_GET['var']==0){
            echo "Login Failed";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body ><center>
    <div id="form">
        <form name="form" action="welcome3.php" method="post">

            <!-- <label> Username : </label>
            <input type="text" name="user" placeholder="Enter Username"><br><br> -->
            <label>  Enrollment No.: </label>
            <input type="number" name="studenroll" placeholder="Enter Enroll No"><br><br>
            
            <label> Password : </label>
            <input type="password" name="password" minlength="8",maxlength="15" required placeholder="Enter Password"><br><br>


            <input type="submit"  name="submit" value="submit" id="btn">

        </form>

    </div> 
</center>
</body>
 <!-- <style>  
    body{
    background-image: url("image/Low Poly Landscapes.jpeg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}

#form{
    background-color: white;
    color :white;
    width : 40%;
    margin: 120px auto;
    padding :60px;
    box-shadow: 10px 10px 5px rgb(82,11,77); 
    border-radius: 6px;
    background:  rgba(255, 255, 255, 0.1);
    box-shadow: 0 26px 42px rgba(0, 0, 0, 0.1);

}

#btn{
    color: black;
    background-color: rgb(165, 122, 165);
    padding: 10px;
    font-size: small;
    border-radius: 10px;
} 
</style> -->
</html>


