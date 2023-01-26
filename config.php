<?php
if($con=mysqli_connect("sql313.epizy.com","epiz_33119538","dTTVARRJzZe")){
	mysqli_select_db($con,"epiz_33119538_collegefun")or die(mysqli_error($con));
}else{
	echo "Database not connected";
}
?>