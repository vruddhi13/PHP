<html>

<form name="frmlogin" action="bank_data.php" method="post">

<label name="username"> Enter UserName </label>
<input type="textbox" name="uname" value=""> <br>
<label name="password"> Enter your password </label>
<input type="password" name="passwd" value=""> <br>
<input type="submit" name="submit" value="login">

</form>
</html>
<?php
if(isset($_GET['error']))
{
	echo $_GET['error'];
	//if( $_GET['error']==1)
	//	{echo "invaild";
//}
	}?>
