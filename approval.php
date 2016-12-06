<?php
$con = mysqli_connect("localhost","root","","event");
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
if(isset($_POST['submit'])){
$id = $_POST['id'];
$level = $_POST['level_update'];
$app = $_POST['approval'];
$sql = "";
if($level == 'level1'){
	$sql = "UPDATE pending_event SET level1 = ".$app." WHERE pd_index=".$id;
}elseif($level == 'level2'){
	$sql = "UPDATE pending_event SET level2 = ".$app." WHERE pd_index=".$id;
}else{
	$sql = "UPDATE pending_event SET level3 = ".$app." WHERE pd_index=".$id;
}

 if(mysqli_query($con,$sql)){
	 echo '<script language="javascript">';
	 echo 'alert("Event Info Updated.")';
	 echo '</script>';
	 echo '<script language="javascript">';
	 echo 'alert("Event Info Updated.")';
	 echo '</script>';
	 echo "<script>setTimeout(\"location.href = 'http://localhost/admin_panel.php';\",1500);</script>";
 }else{
	 echo '<script language="javascript">';
	 echo 'alert("Failed to update.")';
	 echo '</script>';
	 echo '<script language="javascript">';
	 echo 'alert("Event Info Updated.")';
	 echo '</script>';
	 echo "<script>setTimeout(\"location.href = 'http://localhost/admin_panel.php';\",1500);</script>";
}
 //echo "1 record added";
 mysqli_close($con);
}
?>