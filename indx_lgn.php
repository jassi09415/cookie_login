<?php 
	require('config.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
		#btn{
			width: 100px; height: auto; padding: 15px; border-radius: 15px; font-weight: 500; font-size: 18px;
		}
		#btn:hover{
			cursor: pointer;
		}
	</style>
</head>
<body>
<fieldset style="border:4px double #000; box-shadow: 3px 3px 3px; width: 350px; height: auto; border-radius: 40px; margin: 50px auto; font-family: arial">
<legend style="text-align: center; background: #000; color: #FFF; padding:10px; border-radius: 40px;">
	<h2 style="padding: 0; margin: 0;">Login</h2></legend>
	<form name="login" method="post">
		<table cellpadding="10" align="center" style="margin-top: 25px;">
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass" required></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="lgin" value="Login" id="btn"></td>
			</tr>
            <p class="">Not registered? <a href="register.php">Create an account </a></p>
		</table>

	</form>
	<?php
	if(isset($_POST['lgin']))
	{
		$src="SELECT * FROM `student` WHERE `email`='".$_POST['email']."' AND `pass`='".$_POST['pass']."'";
		$rs=mysqli_query($con,$src)or die(mysqli_error($con));
		if(mysqli_num_rows($rs)>0){
			$row=mysqli_fetch_assoc($rs);
			setcookie("log_info", serialize($row), time()+3600, "/");
			header('location:index.php');
		}else{
			echo "Invalid email or password";
		}	
	}
	?>
</fieldset>

</body>
</html>