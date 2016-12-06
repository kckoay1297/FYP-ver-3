<?php
	if(isset($_POST['submit'])){
    $con = new mysqli("localhost", "root", "", "profile");
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
	$level = $_POST['level'];
	$id = $_POST['id'];
	$email = null;
	$sql = "SELECT email FROM user WHERE id =".$id;
	$res = $con->query($sql);
	if ($res->num_rows > 0) {
		while($row = $res->fetch_assoc()) {
			$email = $row['email'];
		}
	}
	$sql1 = "INSERT INTO admin (user_id, level, email) VALUES (".$id.",".$level.",'$email')";
	
	if (mysqli_query($con, $sql1)) {
    echo '<script language="javascript">';
	echo 'alert("Admin Updated.")';
	echo '</script>';    
	echo "<script>setTimeout(\"location.href = 'http://localhost/admin_panel.php';\",1500);</script>";
	} else {
    echo '<script language="javascript">';
	echo 'alert("Error")';
	echo '</script>';    
	echo "<script>setTimeout(\"location.href = 'http://localhost/admin_panel.php';\",1500);</script>";
}
}
?>