<?php
$con = mysqli_connect("localhost","root","","event");

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
if(isset($_POST['submit'])){
	$desc = $_POST['description'];
	$name = $_POST['name'];
	$type = $_POST['type'];
	$amount = $_POST['amount'];
	$pid = $_POST['pid'];
	$id = $_POST['id'];
	$sql = "UPDATE budget_plan SET name = '$name',description = '$desc',type='$type',amount=".$amount." WHERE bid = ".$id;
	//echo $sql;
	if(mysqli_query($con,$sql)){
		echo "<script>setTimeout(\"location.href = 'http://localhost/edit_budget_plan.php?pid=".$pid."';\",300);</script>";
	}else{
		echo $sql;
		//echo "no working";
		
	}
}
?>