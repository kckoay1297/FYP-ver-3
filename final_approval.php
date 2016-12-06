<?php
$con = mysqli_connect("localhost","root","","event");
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
if(isset($_POST['submit'])){
$id = $_POST['id'];
$fid = $_POST['fid'];
$cid = strtolower($_POST['cid']);
$uid = $_POST['uid'];
$cName = $cDate = $pDate = $budget = $department = $level = $type = $eIncome = $cmtSize = $ePtcpt = $cIndex = null;
$sql1 = "UPDATE pending_event SET final = 1 WHERE pd_index=".$id;
 if(mysqli_query($con,$sql1)){
	 echo null;
 }else{
	 echo "Error";
 }
 $sql2 = "SELECT * from pending_event WHERE pd_index=".$id;
 $res=$con->query($sql2);
	if ($res->num_rows > 0) {
		while( $row = mysqli_fetch_array($res)) {
			$cName = $row['caseName'];
			$cDate = $row['caseDate'];
			$pDate = $row['propose_date'];
			$budget = $row['budget'];
			$department = $row['department'];
			$level = $row['level'];
			$type = $row['type'];
			$eIncome = $row['expectedIncome'];
			$cmtSize = $row['cmtSize'];
			$ePtcpt = $row['expectedPtcpt'];
		}
	}else{
		echo "Error";
	}
	
$sql = "INSERT INTO event_record (caseID, caseName,propose_date,caseDate, budget,department,type,level,expectedIncome,cmtSize,expectedPtcpt,status)
VALUES ('$cid','$cName','$pDate','$cDate','$budget','$department','$type','$level','$eIncome','$cmtSize','$ePtcpt','Ongoing')";

 if(mysqli_query($con,$sql)){
	/* $sql3 = "SELECT cIndex from event_record WHERE caseID=".$cid;
	 $res1=$con->query($sql3);
	if ($res1->num_rows > 0) {
		while( $row1 = mysqli_fetch_array($res1)) {
			$cIndex = $row1['cIndex'];
		}
	}else{
		echo $cIndex;
		echo "Not going to happen.";
	}*/
	$sql4= "INSERT INTO hosting_event (userid,caseID,caseName,propose_date,caseDate,cmtSize,level,department,type) VALUES
		('$uid','$cid','$cName','$pDate','$cDate','$cmtSize','$level','$department','$type')";
	 if(mysqli_query($con,$sql4)){
		 echo '<script language="javascript">';
	 echo 'alert("Event Info Updated.")';
	 echo '</script>';
	 echo "<script>setTimeout(\"location.href = 'http://localhost/hosting_event.php';\",1500);</script>";
	 }else{
		 echo '<script language="javascript">';
	 echo 'alert("Failed to update. OMG")';
	 echo '</script>';
	 echo "<script>setTimeout(\"location.href = 'http://localhost/hosting_event.php';\",1500);</script>";
	 }
 }else{
	 echo '<script language="javascript">';
	 echo 'alert("Failed to update, duplicate info.")';
	 echo '</script>';
	 echo "<script>setTimeout(\"location.href = 'http://localhost/hosting_event.php';\",1500);</script>";
}
 //echo "1 record added";
 mysqli_close($con);
}
?>