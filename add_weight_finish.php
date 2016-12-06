<?php
$con = mysqli_connect("localhost","root","","casebase");

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
if(isset($_POST['submit'])){
 //$id = $_POST['id'];	
// $name = $_POST['name'];
$type = $_POST['type'];
 $date = $_POST['date'];
 $budget = $_POST['budget'];
 $expenses = $_POST['expenses'];
 //$department = $_POST['department'];
 $level = $_POST['level']; 
// $type = $_POST['type'];
 $income = $_POST['income'];
 $cmtSize = $_POST['cSize'];
 $ppt = $_POST['ppt'];
 $feedback = $_POST['feedback'];
 $desc = $_POST['desc'];
 
$sql = "INSERT INTO weight (type,date,budget,expenses,level, income,cSize,feedback,ppt,description) VALUES 
('$type','$date','$budget','$expenses','$level', '$income','$cmtSize','$feedback','$ppt','$desc')";

 if(mysqli_query($con,$sql)){
	 echo '<script language="javascript">';
	 echo 'alert("Case Updated.")';
	 echo '</script>';
	 echo "<script>setTimeout(\"location.href = 'http://localhost/admin_panel.php';\",1500);</script>";
 }else{
	 echo '<script language="javascript">';
	 echo 'alert("Failed to update.")';
	 echo '</script>';
	 echo "<script>setTimeout(\"location.href = 'http://localhost/admin_panel.php';\",1500);</script>";
}
 //echo "1 record added";
 mysqli_close($con);
}
?>