<?php
require('check_cookie.php')
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration successful</title>
</head>
<body>

<fieldset style="border:4px double #000; box-shadow: 3px 3px 3px; width: 750px; height: auto; border-radius: 40px; margin: 50px auto; font-family: arial">
<?php
$cookie_data=unserialize($_COOKIE['log_info']);
//print_r($cookie_data);
?>

<h2>Welcome <?php echo $cookie_data['name']  ?> thank you for registration. </h2><br>
<h3></h3>

<!-- -->
<a href="indx_lgn.php">Login</a>
<a href="logout.php">Logout</a>
</fieldset>
</body>
</html>