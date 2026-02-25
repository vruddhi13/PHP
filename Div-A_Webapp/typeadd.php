<?php

echo "welcome to add account type";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form name="frmacctype" action="type_ins_code.php" method="post">

<label for="actypename"> Select Account Type Name</label>
<select name="actypename">
	<option value="savings"> Savings </option>
	<option value="current"> Current </option>
	<option value="fixeddeposit"> Fixed-deposit </option>
	<option value="recurring"> Recurring </option>
	
</select> <br>

<input type="submit" name="add" value="Add">
<input type="reset" name="cancel" value="cancel">

</form>
</body>
</html>

