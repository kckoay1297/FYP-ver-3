<?php
session_start();
$con = mysqli_connect("localhost","root","","profile");
$error = "Correct";
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
if(isset($_POST['submit'])){
	if(empty($_POST['email']) || empty($_POST['password'])){
		$error = "Password or email must not be empty.";
	}else{
		$user = $_POST['email'];
		$pass = $_POST['password'];
		$sql = "SELECT * FROM user WHERE email = '$user' AND password='$pass'";
		$res = $con->query($sql);
			if ($res->num_rows > 0) {
				while( $row = mysqli_fetch_array($res)) {
					$_SESSION['login_user']=$row['id'];
					header("location: new_home.php"); // Redirecting To Other Page
				}
			}else{
				$error = "Wrong in email or password.";
			}
	}
	
	
		if($error != "Correct"){
			echo '<script language="javascript">';
			echo 'alert("'.$error.'")';
			echo '</script>';    
			echo "<script>setTimeout(\"location.href = 'http://localhost/login.php';\",100);</script>";
		}
	
}
?>