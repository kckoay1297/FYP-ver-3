<?php 
$uid = $_GET['id'];

$del = "DELETE FROM user WHERE id =".$uid;
$conn1 = new mysqli("localhost", "root", "", "profile");
	if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
	
	if(mysqli_query($conn1,$del)){
		
	}else{
	echo '<script language="javascript">';
	echo 'alert("Info Not Deleted.")';
	echo '</script>';    
	echo "<script>setTimeout(\"location.href = 'admin_panel.php';\",800);</script>";
	}
	$con2 = new mysqli("localhost","root","","event");
	$del1 = "DELETE FROM invitation WHERE id=".$uid;
	if(mysqli_query($con2,$del1)){
		echo '<script language="javascript">';
		echo 'alert("Info Deleted.")';
		echo '</script>';    
		echo "<script>setTimeout(\"location.href = 'admin_panel.php';\",800);</script>";
	}else{
	echo '<script language="javascript">';
	echo 'alert("Info Not Deleted.")';
	echo '</script>';    
	echo "<script>setTimeout(\"location.href = 'admin_panel.php';\",800);</script>";
	}
	$conn1->close();
?>