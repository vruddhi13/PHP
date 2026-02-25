<?php
include 'connect.php';

$obj=new DatabaseConnection(); echo "<br>";
$var=$obj->dispbankuser();


 
if(isset($_POST['submit']))
{
		$unm=$_POST['uname'];
		$pas=$_POST['passwd'];
		//echo $unm;
		$flag=0;

	
		while($data=mysqli_fetch_array($var))
		{
			if($unm==$data[3] && $pas==$data[9])
			{
				global $acno;
				$acno=$data['account_no'];
					$flag=1;
			}
		}	//while over

if($flag==1)
{
	echo "login sucess."." "."welcome $unm"."<br><br>";
	echo "<a href='typeadd.php'> Account Type </a> <br><br>";
	echo "<a href='transdetadd.php'> Transaction Details </a> <br><br>";
	echo "<a href='edituserprofile.php?usernm=$unm'> User Profile </a>";

}
else{
	//echo "pls enter correct username and password";
	$message=urlencode("login failed");
	header('Location:login_bank.php?error='.$message);
	}
}	 //if submit over
else{
	echo "not true";
}

?>