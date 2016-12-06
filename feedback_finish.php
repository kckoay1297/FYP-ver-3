<?php 
$new = null;
$target_dir = "feedback/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
if(isset($_POST['submit'])) 
{ 
    $report = $_POST['report'];
	$feedback= $_POST['feedback'];
	$confirm = $_POST['status'];
	$eid = $_POST['eid'];
	$update = "UPDATE feedback SET report='$report', feedback=".$feedback.", confirm = ".$confirm." WHERE event_id ='$eid'";
	$con = mysqli_connect("localhost","root","","event");
	if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	
}
$filename  = basename($_FILES['fileToUpload']['name']);
$extension = pathinfo($filename, PATHINFO_EXTENSION);
$date = new DateTime();
$time= $date->getTimestamp();
$newfile = $filename;
$target_dir = "feedback/".$eid."/";
	$del = $target_dir.$newfile;

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
	echo '<script language="javascript">';
		 echo 'alert("Sorry, your file is too large.")';
		 echo '</script>';  
    //echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
	
if (file_exists($newfile)) {
	unlink($newfile);
	
    //rename('upload/tmp/'.$_POST['overwrite_file_name'],'upload/'.$_POST['overwrite_file_name']);
    echo "file exist and try to rename it. ";
    $uploadOk = 1;
}
if($uploadOk == 1){
	
	$new = $target_dir.$newfile;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $new)) {
		if(mysqli_query($con,$update)){
		 echo '<script language="javascript">';
		 echo 'alert("Add Succesfully!")';
		 echo '</script>';  
		 echo "<script>setTimeout(\"location.href = 'hosting_feedback_other.php';\",1500);</script>";
		}else{
		 echo '<script language="javascript">';
			 echo 'alert("Error!")';
			 echo '</script>';  
			  //echo "<script>setTimeout(\"location.href = 'hosting_feedback_other.php';\",1500);</script>";
		}
	}
}else{
			 echo '<script language="javascript">';
			 echo 'alert("Error!")';
			 echo '</script>';  
			  echo "<script>setTimeout(\"location.href = 'hosting_feedback_other.php';\",1500);</script>";
}
	
?>
