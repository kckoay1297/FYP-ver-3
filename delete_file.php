<?php 
$dirPath = $_GET['name'];
echo $dirPath;
 if(!unlink($dirPath))
  {
		echo '<script language="javascript">';
		 echo 'alert("Error deleting File")';
		 echo '</script>';  
		 echo "<script>setTimeout(\"location.href = 'create_folder.php';\",1500);</script>";
 // echo ("Error deleting $file");
  }
else
  {
  $con = mysqli_connect("localhost","root","","event");
	if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
	$update = "DELETE FROM link WHERE link='$dirPath'";
	if(mysqli_query($con,$update)){
		echo '<script language="javascript">';
		 echo 'alert("File deleted!")';
		 echo '</script>';  
		 echo "<script>setTimeout(\"location.href = 'create_folder.php';\",1500);</script>";
	}else{
	 echo '<script language="javascript">';
		 echo 'alert("File deleted! Link delete not done!")';
		 echo '</script>';  
		 echo "<script>setTimeout(\"location.href = 'create_folder.php';\",1500);</script>";
	}
  }
?>