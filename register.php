<?php require('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

<fieldset style="border:4px double #000; box-shadow: 3px 3px 3px; width: 350px; height: auto; border-radius: 40px; margin: 50px auto; font-family: arial">
<legend style="text-align: center; background: #000; color: #FFF; padding:10px; border-radius: 40px;">
	<h2 style="padding: 0; margin: 0;">Register</h2></legend>
	<form name="login" method="post">
		<table cellpadding="10" align="center" style="margin-top: 25px;">
        <tr>
				<td>Name:</td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" required></td>
			</tr>
            <tr>
				<td>Mobile:</td>
				<td><input type="text" name="phone" required></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="password" name="pass" required></td>
			</tr>
            <tr>
				<td>Your complaint: </td>
				<td><textarea type="text" name="msg" required></textarea>
                </td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="submit" value="Register" id="btn"></td>
			</tr>
            <p class="">If registered? <a href="index.php">Login account </a></p>
		</table>

	</form>
<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];

	$sql="INSERT INTO `student` (`name`,`pass`,`email`,`phone`,`msg`) VALUES('".$name."','".$pass."','".$email."','".$phone."','".$msg."')";

	$res=mysqli_query($con,$sql);
	if($res==1){
		echo "Saved sucessfully";
	}else{
		echo "Does not saved";
	}
}
?>
<a href="indx_lgn.php">Login</a>


	</div>


