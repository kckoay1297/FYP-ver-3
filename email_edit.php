<?php
	if(isset($_POST['submit'])){
    $con = new mysqli("localhost", "root", "", "etest");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
	$recruit = $_POST['t1'];
	$invite = $_POST['t2'];
	$fb = $_POST['t3'];
	$other = $_POST['t4'];
	$lt = $_POST['leavetalk'];
	
	$editR = "UPDATE tempt SET template=".htmlspecialchars($recruit)."WHERE temp_id = 1";
	$editI = "UPDATE tempt SET template=".htmlspecialchars($invite)."WHERE temp_id = 2";
	$editF = "UPDATE tempt SET template=".htmlspecialchars($fb)."WHERE temp_id = 3";
	$editO = "UPDATE tempt SET template=".htmlspecialchars($other)."WHERE temp_id = 4";
	
	mysqli_query($con, "UPDATE tempt SET template='$recruit' WHERE temp_id=1");
	mysqli_query($con, "UPDATE tempt SET template='$invite' WHERE temp_id=2");
	mysqli_query($con, "UPDATE tempt SET template='$fb' WHERE temp_id=3");
	mysqli_query($con, "UPDATE tempt SET template='$other' WHERE temp_id=4");
	mysqli_query($con, "UPDATE list SET end_text='$lt' WHERE name='KCKoay'");
	
	echo '<script language="javascript">';
	echo 'alert("Template Updated.")';
	echo '</script>';    
	echo "<script>setTimeout(\"location.href = 'http://localhost/email_function_a.php';\",1500);</script>";
}
?>