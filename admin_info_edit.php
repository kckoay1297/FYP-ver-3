<?php
	if(isset($_POST['submit'])){
    $con = new mysqli("localhost", "root", "", "profile");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
	$phone = $_POST['phone'];
	$ic = $_POST['ic'];
	$id = $_POST['id'];
	$sid = $_POST['sid'];
	$de = $_POST['department'];
	$po = $_POST['position'];
	$editph = "UPDATE users SET phone=".$phone.",icnumber=".$ic.",staffid=".$sid.",designation='$po',department='$de' WHERE id = ".$id;
	
	
	mysqli_query($con, $editph);
	
	echo '<script language="javascript">';
	echo 'alert("Info Updated.")';
	echo '</script>';    
	echo "<script>setTimeout(\"location.href = 'http://localhost/admin_panel.php';\",1500);</script>";
}
?>