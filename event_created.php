<?php
$con = mysqli_connect("localhost","root","","event");

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
if(isset($_POST['submit'])){  
 $name = $_POST['name'];
 $date = $_POST['date'];
 $pdate = $_POST['pdate'];
 //$uid = $_POST['uid'];
 //$email = trim($email);
 $budget = $_POST['budget'];
 $department = $_POST['department'];
 $level = $_POST['level'];
 //$staffid = trim($staffid);
 
 $type = $_POST['type'];
 $income = $_POST['income'];
 $cmtSize = $_POST['cmtSize'];
 $ppt = $_POST['ppt'];
 $feedback = $_POST['feedback'];
 $aim = $_POST['aim'];
 $justification = $_POST['justification'];
 $objective = $_POST['objective'];
 $hasil_bengkel = $_POST['hasil_bengkel'];
 $schedule = $_POST['schedule'];
 $prepare_by = $_POST['pby'];
 $userid=$_POST['userid'];
 $userid2=$_POST['userid2'];
$sql = "INSERT INTO pending_event (user_id, user_id2,caseDate,propose_date, caseName, budget,department,level,type,expectedIncome,cmtSize,expectedPtcpt,expectedFeedback,aim,justification,objective, hasil_bengkel,prepare_by)
VALUES ('$userid','$userid2','$date','$pdate','$name','$budget','$department','$level','$type','$income','$cmtSize','$ppt','$feedback', '$aim','$justification','$objective','$hasil_bengkel','$prepare_by')";


 if(mysqli_query($con,$sql)){
	 echo '<script language="javascript">';
	 echo 'alert("Event created, waiting approval from admin.")';
	 echo '</script>';
	 echo "<script>setTimeout(\"location.href = 'http://localhost/pending_list.php';\",1500);</script>";
 }else{
	 echo '<script language="javascript">';
	 echo 'alert("Failed to created")';
	 echo '</script>';
	 echo "<script>setTimeout(\"location.href = 'http://localhost/event_recom.php';\",1500);</script>";
}
 //echo "1 record added";
 mysqli_close($con);
}
?>