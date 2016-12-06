<?php
$con = mysqli_connect("localhost","root","","event");

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$description = $_POST['description'];
	$amount = $_POST['amount'];
	$type = $_POST['type'];
	$id = $_POST['pid'];
	$sql = "INSERT INTO budget_plan (name,description,amount,type,pd_index) VALUES ('$name','$description',".$amount.",'$type','$id')";
	//echo $sql;
	if(mysqli_query($con,$sql)){
		echo "<script>setTimeout(\"location.href = 'http://localhost/edit_budget_plan.php?pid=".$id."';\",300);</script>";
	}else{
		echo $sql;
		//echo "no working";
		//echo "<script>setTimeout(\"location.href = 'http://localhost/edit_vol.php';\",300);</script>";
	}
}
?>