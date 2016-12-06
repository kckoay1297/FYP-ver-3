<?php
	if(isset($_POST['submit'])){
    $con = new mysqli("localhost", "root", "", "profile");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
	$template = $_POST['template'];
	$userid = $_POST["userid"];
	$temp_id = $_POST["temp_id"];
	$sql = "UPDATE user_tempt SET tempt=".htmlspecialchars($template)."WHERE temp_id =".$temp_id." AND user_id=".$userid;
	
	if (mysqli_query($con, "UPDATE user_tempt SET tempt='$template' WHERE temp_id ='$temp_id' AND user_id='$userid'")) {
    echo '<script language="javascript">';
	echo 'alert("Template Updated.")';
	echo '</script>';    
	echo "<script>setTimeout(\"location.href = 'http://localhost/email_start.php';\",1500);</script>";
	} else {
    echo '<script language="javascript">';
	echo 'alert("Error")';
	echo '</script>';    
	echo "<script>setTimeout(\"location.href = 'http://localhost/email_start.php';\",1500);</script>";}
	
	
	
}
?>