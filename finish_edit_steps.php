<?php
$con = mysqli_connect("localhost","root","","event");

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
if(isset($_POST['submit'])){
	$time = $_POST['time'];
	$place = $_POST['place'];
	$partNo = $_POST['partNo'];
	$fees = $_POST['fees'];
	$other = $_POST['other'];
	$ins = $_POST['ins'];
	$pid = $_POST['pid'];
	
	if($ins == 1){
		$sql = "UPDATE steps_imp SET time = '$time',place = '$place',partNo='$partNo',fees='$fees',other='$other' WHERE pd_index = ".$pid;
	//echo $sql;
		if(mysqli_query($con,$sql)){
			echo "<script>setTimeout(\"location.href = 'http://localhost/view_pending_event.php?id=".$pid."';\",300);</script>";
		}else{
			echo $sql;
			//echo "no working";
			
		}
	}else{
		$sql = "INSERT INTO steps_imp (pd_index, time,place,partNo,fees,other) VALUES (".$pid.",'$time','$place','$partNo','$fees','$other')";
	//echo $sql;
		if(mysqli_query($con,$sql)){
			echo "<script>setTimeout(\"location.href = 'http://localhost/view_pending_event.php?id=".$pid."';\",300);</script>";
		}else{
			echo $sql;
			//echo "no working";
			
		}
	}
	
}
?>