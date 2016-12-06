<?php 
$conn = new mysqli("localhost", "root", "", "event");
  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}	
$id = $_GET['id'];
  $sql="SELECT * FROM event_record WHERE caseID = '$id'";
  $res1 = $conn->query($sql);
  $caseID = $caseName = $caseDate = $budget = $department = $type = $level = $actualIncome = $cmtSize = $feedback = $actualPtcpt = $description = null;
	while( $row1 = mysqli_fetch_array($res1)) {
		$caseID = $id;
		$caseName = $row1['caseName'];
		$caseDate = $row1['caseDate'];
		$budget = $row1['budget'];
		$department = $row1['department'];
		$type = $row1['type'];
		$level = $row1['level'];
		$actualIncome = $row1['actualIncome'];
		$cmtSize = $row1['cmtSize'];
		$feedback = $row1['feedback'];
		$actualPtcpt = $row1['actualPtcpt'];
		$description = $row1['description'];
	}
$con = new mysqli("localhost", "root", "", "casebase");
$sql1 = "INSERT INTO positivecase (caseID,caseName,caseDate,budget,department,type,level, actualIncome,cmtSize,feedback,actualPtcpt,description) VALUES 
('$caseID','$caseName','$caseDate','$budget','$department','$type','$level', '$actualIncome','$cmtSize','$feedback','$actualPtcpt','$description')";
//echo $sql1;
if(mysqli_query($con,$sql1)){
		echo '<script language="javascript">';
		 echo 'alert("Case Base Adapted!")';
		 echo '</script>';  
		 echo "<script>setTimeout(\"location.href = 'admin_panel.php';\",1500);</script>";
}else{
		echo '<script language="javascript">';
		 echo 'alert("Fail to Adapte")';
		 echo '</script>';  
		 echo "<script>setTimeout(\"location.href = 'admin_panel.php';\",1500);</script>";
}
?>