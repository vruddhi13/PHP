<?php
include 'connect.php';
//echo "welcome to do the transactions";
$obj=new DatabaseConnection();
$result=$obj->dispbankuser();
$result1=$obj->dispacctype();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Transaction Add</title>
</head>
<body>
<form name="frmtrans" action="fetchtrans.php" method="post">
<label for="transamt"> Enter Transaction Amount </label>
<input type="number" name="tamt" value=""> <br>
<label for="uemail"> Select UserEmail </label>
<select name="uemail"> 
	<?php 
			while($data=mysqli_fetch_array($result))
				{ ?>

<option value="<?php echo $data[1]; ?>"> <?php echo $data[1]; ?> </option>

<?php } ?>

</select>  <br>
<label for="typeid"> Select accounttype </label>
<select name="typeid">

<?php 
			while($data1=mysqli_fetch_array($result1))
				{ ?>

<option value="<?php echo $data1[0]; ?>"> <?php echo $data1[1]; ?></option>
<?php } ?>

</select> <br>

<label for="transtype"> Select Transaction Type </label>
<input type="radio" name="ttype" value="Debit"> Debit &nbsp; 
<input type="radio" name="ttype" value="Credit">   Credit 
<br>

<input type="submit" name="save" value="SaveTransaction">
</form>
</body>
</html>