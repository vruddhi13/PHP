<?php
include 'connect.php';
$obj=new DatabaseConnection();

echo "welcome to edit your profile <br>";

$unm=$_GET['usernm'];

$res=$obj->dispuserprofile($unm);
		$data=mysqli_fetch_array($res);
//	echo $data[3];

?>

<html>
<form name="" action="" method="post">
<label for="um"> Your Name </label>
<input type="text" name="uname" value="<?php echo $data[0]; ?>" readonly> <br>
<label for="em"> Your Email </label>
<input type="text" name="uem" value="<?php echo $data[1];?>"> <br>
<label for=""> Your Contact</label>
<input type="text" name="ucont" value="<?php echo $data[3]; ?>"> <br>
<input type="submit" name="subupt" value="update">

<a href="changepas.php" > Change Password </a>

	</form>

</html>

<?php 

$obj2=new DatabaseConnection();

if(isset($_POST['subupt']))
{
	$u=$_POST['uname'];
	$e=$_POST['uem'];
	$c=$_POST['ucont'];

	$earray=array($u,$e,$c);
	$res=$obj2->editbankuserprofile($earray);

	if($res)
	{
		echo "update sucess";
	}
	else{
		echo "no data update";
	}

	//echo $u. " ".$e. " ".$c;


}

?>

