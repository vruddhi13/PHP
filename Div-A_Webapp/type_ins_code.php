<?php
include 'connect.php';
$obj=new DatabaseConnection();

if(isset($_POST['add']))
{
	$typename=$_POST['actypename'];
	//echo $typename;
	$out=$obj->instype($typename);

	if($out)
	{
		echo "inserted successfully";
	}
	else{
		echo "data not inserted";
	}
}

?>