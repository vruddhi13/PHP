<?php
include 'connect.php';
$obj=new DatabaseConnection();

if(isset($_POST['save']))
{
	
	$tamt=$_POST['tamt'];
	$uemail=$_POST['uemail'];
	$actype=$_POST['typeid'];
	$ttype=$_POST['ttype'];
	//$tdate=$_POST['tdate'];
	$tdate=date("Y-m-d");

	//echo $tamt. "  ". $uemail. "  ". $actype. " " .$ttype. " " .$tdate;

	$valuearray=array($tamt,$uemail,$ttype,$actype,$tdate);
	$output=$obj->instrasdetails($valuearray);

	if($output)
	{
		echo "successfully inserted";
	}
	else{
		echo "no data inserted".mysqli_error($obj->c1);
	}
}
?>