<?php
	$con = new mysqli("localhost", "root", "", "profile");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
	$uid = $_GET["id"];
	mysqli_query($con, "UPDATE user_tempt u, def_tempt d
   SET u.tempt = d.temp WHERE u.user_id = '$uid' AND d.temp_id = u.temp_id");
	
	
	echo '<script language="javascript">';
	echo 'alert("All Templates Reset.")';
	echo '</script>';    
	echo "<script>setTimeout(\"location.href = 'http://localhost/email_start.php';\",1500);</script>";
?>